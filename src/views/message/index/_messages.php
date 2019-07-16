<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this \yii\web\View */

$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refresh").click(); }, 3000);
});
JS;
$this->registerJs($script);
?>

<?php Pjax::begin(); ?>

<div class="hidden">

    <?= Html::a("Refresh", \yii\helpers\Url::current(), ['id' => 'refresh']) ?>

</div>


<?php foreach ($messages as $message): ?>

    <div class="single-message single-message-<?= $message->sender_id == $fromUser->id ? 'send' : 'received' ?>">
        <p class="message-text"><?= $message->text ?></p>
        <p class="message-time"><?= Yii::$app->formatter->asDatetime($message->created_at) ?></p>
    </div>

<?php endForeach; ?>

<?php Pjax::end(); ?>
