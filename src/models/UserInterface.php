<?php


namespace codexten\yii\modules\chat\models;

/**
 * Interface UserInterface
 *
 * @package codexten\yii\modules\chat\models
 *
 * @property string $name
 */
interface UserInterface
{
    public function getName(): string;

    public function getChatUrl();
}
