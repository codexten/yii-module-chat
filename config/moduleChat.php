<?php

return [
    'bootstrap' => ['chat'],
    'modules' => [
        'chat' => [
            'class' => \codexten\yii\modules\chat\ChatModule::class,
            'controllerNamespace' => 'codexten\yii\modules\chat\controllers',
            'viewPath' => '@moduleChat/views',
            'layoutPath' => '@moduleChat/views/layouts',
            'defaultRoute' => 'message',
            'controllerMap' => [
                'message' => [
                    'class' => \codexten\yii\modules\chat\controllers\MessageController::class,
                    'layout' => 'chat',
                ],
            ],
        ],
    ],
];
