<?php

namespace codexten\yii\modules\chat\controllers;

use codexten\yii\modules\auth\helpers\UserHelper;
use codexten\yii\modules\chat\models\ChatMessage;
use codexten\yii\modules\chat\models\User;

class MessageController extends \yii\web\Controller
{
    public function actionIndex($id = null)
    {
        $contacts = User::find()
            ->distinct([User::tableName() . '.id'])
            ->joinWith([
                'sendMessages as sendMessages',
                'receivedMessages as receivedMessages',
            ])
            ->andWhere([
                'or',
                ['receivedMessages.sender_id' => UserHelper::getMyId()],
                ['sendMessages.receiver_id' => UserHelper::getMyId()],
            ])
            ->andWhere(['!=', User::tableName() . '.id', UserHelper::getMyId()])
            ->all();
        $fromUser = User::findOne(['id' => UserHelper::getMyId()]);

        if ($id == null) {
            return $this->render('index', compact(['fromUser', 'contacts']));
        }


        $toUser = User::findOne(['id' => $id]);
        $model = new ChatMessage([
            'sender_id' => $fromUser->id,
            'receiver_id' => $toUser->id,
        ]);

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }

        $messages = \codexten\yii\modules\chat\models\ChatMessage::find()
            ->andWhere([
                'or',
                ['sender_id' => $id, 'receiver_id' => UserHelper::getMyId()],
                ['sender_id' => UserHelper::getMyId(), 'receiver_id' => $id],
            ])->limit(100)
            ->orderBy(['created_at' => SORT_ASC])->all();

        return $this->render('index', compact(['messages', 'fromUser', 'toUser', 'model', 'contacts']));
    }

}
