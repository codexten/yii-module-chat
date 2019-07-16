<?php


namespace codexten\yii\modules\chat;


use codexten\yii\base\Module;
use codexten\yii\modules\chat\models\User;

class ChatModule extends Module
{
    public $userClass = User::class;

}
