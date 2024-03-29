<?php


namespace codexten\yii\modules\chat\models;

use yii\helpers\Url;

/**
 * Trait UserTrait
 *
 * @package codexten\yii\modules\chat\models
 * @var $sendMessages ChatMessage[]
 * @var $receivedMessages ChatMessage[]
 */
trait UserTrait
{
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSendMessages()
    {
        return $this->hasMany(ChatMessage::class, ['sender_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivedMessages()
    {
        return $this->hasMany(ChatMessage::class, ['receiver_id' => 'id']);
    }

//
//    public function getName(): string
//    {
//        return $this->username;
//    }

    public function getChatUrl(): string
    {
        return Url::to(['/chat/message/index', 'id' => $this->id]);
    }
}
