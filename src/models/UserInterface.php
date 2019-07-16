<?php


namespace codexten\yii\modules\chat\models;

/**
 * Interface UserInterface
 *
 * @package codexten\yii\modules\chat\models
 *
 * @property string $name
 * @property  $chatUrl string
 */
interface UserInterface
{
    public function getName(): string;

    public function getChatUrl(): string;
}
