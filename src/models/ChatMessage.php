<?php

namespace codexten\yii\modules\chat\models;

use Yii;
use yii\helpers\Url;
use \codexten\yii\db\ActiveRecord;
use \codexten\yii\modules\chat\models\query\ChatMessageQuery;
use codexten\yii\modules\auth\models\User;

/**
 * This is the model class for table "{{%chat_message}}".
 *
 * Database fields:
 *
 * @property string $id
 * @property int $sender_id
 * @property int $receiver_id
 * @property string $text
 * @property int $is_new
 * @property int $is_deleted_by_sender
 * @property int $is_deleted_by_receiver
 * @property string $created_at
 *
 * Defined properties:
 *
 * @property array $meta
 *
 * Defined relations:
 *
 * @property User $receiver
 * @property User $sender
 */
class ChatMessage extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%chat_message}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sender_id', 'receiver_id', 'text'], 'required'],
            [['sender_id', 'receiver_id', 'is_new', 'is_deleted_by_sender', 'is_deleted_by_receiver'], 'integer'],
            [['created_at'], 'safe'],
            [['text'], 'string', 'max' => 1020],
            [['receiver_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['receiver_id' => 'id']],
            [['sender_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['sender_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sender_id' => Yii::t('app', 'Sender ID'),
            'receiver_id' => Yii::t('app', 'Receiver ID'),
            'text' => Yii::t('app', 'Text'),
            'is_new' => Yii::t('app', 'Is New'),
            'is_deleted_by_sender' => Yii::t('app', 'Is Deleted By Sender'),
            'is_deleted_by_receiver' => Yii::t('app', 'Is Deleted By Receiver'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceiver()
    {
        return $this->hasOne(User::className(), ['id' => 'receiver_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSender()
    {
        return $this->hasOne(User::className(), ['id' => 'sender_id']);
    }


    /**
     * {@inheritdoc}
     * @return ChatMessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChatMessageQuery(get_called_class());
    }

}
