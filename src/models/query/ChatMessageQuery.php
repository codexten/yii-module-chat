<?php

namespace codexten\yii\modules\chat\models\query;

use \yii\db\ActiveQuery;
use \codexten\yii\modules\chat\models\ChatMessage;

/**
 * This is the ActiveQuery class for [[\codexten\yii\modules\chat\models\ChatMessage]].
 *
 * @see ChatMessage
 */
class ChatMessageQuery extends ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return ChatMessage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ChatMessage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
