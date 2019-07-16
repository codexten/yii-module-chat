<?php

use codexten\yii\web\widgets\Page;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model \codexten\yii\modules\chat\models\ChatMessage */
/* @var $messages \codexten\yii\modules\chat\models\ChatMessage[] */
/* @var $fromUser \codexten\yii\modules\auth\models\User */
/* @var $toUser \codexten\yii\modules\auth\models\User */
/* @var $contacts \codexten\yii\modules\chat\models\User[] */
/* @var $_params_ array */

$this->title = 'Messages';

?>

<?php $page = Page::begin([
    'title' => $this->title,
]) ?>

<div class="chat">
    <div class="row">
        <div class="col-md-4">
            <div class="search">

                <?php $form = ActiveForm::begin() ?>

                <?php ActiveForm::end() ?>

            </div>
            <div class="contacts">

                <ul>
                    <li>
                        Full Name
                    </li>
                    <li class="active">
                        Full Name
                    </li>
                    <li>
                        Full Name
                    </li>
                    <li>
                        Full Name
                    </li>
                    <li>
                        Full Name
                    </li>
                    <li>
                        Full Name
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">

            <?php if ($toUser): ?>

                <div class="message-header">
                    Full Name
                </div>
                <div class="send-message">

                    <?php $form = ActiveForm::begin() ?>

                    <?= $form->field($model, 'text')->textarea()->label(false) ?>

                    <?= \yii\helpers\Html::submitButton('Send') ?>

                    <?php ActiveForm::end() ?>

                </div>
                <div class="messages">
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                    <div class="single-message single-message-send">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>

                    </div>
                    <div class="single-message single-message-received">
                        <p class="message-text">test test tes</p>
                        <p class="message-time">2:40 pm</p>
                    </div>
                </div>

            <?php else: ?>

            <div class="no-messages">

                No Messages

            </div>

            <?php endIf; ?>


        </div>
    </div>
</div>


<?php $page->end() ?>
