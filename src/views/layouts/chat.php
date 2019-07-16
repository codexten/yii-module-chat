<?php

use codexten\yii\modules\chat\ChatBoxAssetBundle;

/* @var $this \yii\web\View */
/* @var $content string */

ChatBoxAssetBundle::register($this);
?>

<?php $this->beginPage(); ?>

<?php $this->beginContent('@app/views/layouts/main.php'); ?>

<?= $content ?>

<?php $this->endContent() ?>
