<?php


namespace codexten\yii\modules\chat\models;

/**
 * Class User
 *
 * @package codexten\yii\modules\chat\models
 * @var $sendMessages ChatMessage[]
 * @var $receivedMessages ChatMessage[]
 */
class User extends \codexten\yii\modules\auth\models\User
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

}
