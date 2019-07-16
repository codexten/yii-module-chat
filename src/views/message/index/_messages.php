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


    <?php if ($message->sender_id == $fromUser->id): ?>

        <div class="outgoing_msg">
            <div class="sent_msg">
                <p><?= $message->text ?></p>
                <span class="time_date"> <?= Yii::$app->formatter->asDatetime($message->created_at) ?></span>
            </div>
        </div>


    <?php else: ?>

        <div class="incoming_msg">
            <div class="received_msg">
                <div class="received_withd_msg">

                    <p><?= $message->text ?></p>
                    <span class="time_date"> <?= Yii::$app->formatter->asDatetime($message->created_at) ?></span>
                </div>
            </div>
        </div>


    <?php endIf; ?>

<?php endForeach; ?>

<?php Pjax::end(); ?>
