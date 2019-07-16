<?php

use codexten\gnt\site\modules\chat\models\User;
use codexten\yii\web\widgets\Page;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model \codexten\yii\modules\chat\models\ChatMessage */
/* @var $messages \codexten\yii\modules\chat\models\ChatMessage[] */
/* @var $fromUser User */
/* @var $toUser User */
/* @var $contacts User[] */
/* @var $_params_ array */

$this->title = 'Messages';

?>

<?php $page = Page::begin([
    'title' => $this->title,
]) ?>

<div id="chat">
    <div class="row">
        <div class="col-md-4">
            <div class="chat-left">
                <div class="search">

                <?= $this->render('index/_search') ?>

                </div>
                <div class="contacts">
                    <ul>

                        <?php foreach ($contacts as $contact): ?>

                        <li
                                onclick="location.href='<?= $contact->getChatUrl() ?>';">
                            <p class="name"> <?= $contact->name ?></p>
                            <p class="id">ID : 3543654644</p>
                        </li>


                        <?php endForeach; ?>
                    </ul>


                </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="chat-right">


                <?php if ($toUser): ?>

                <div class="message-header">

                    <?= $toUser->name ?>

                </div>
                <div class="send-message">

                    <?php $form = ActiveForm::begin() ?>

                    <?= $form->field($model, 'text')->textarea()->label(false) ?>

                    <?= \yii\helpers\Html::submitButton('Send') ?>

                    <?php ActiveForm::end() ?>

                </div>

                <div class="messages">

                    <?php if ($toUser): ?>

                        <?= $this->render('index/_messages', $_params_) ?>

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


                    </div>
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

                    <?php endIf; ?>


                </div>

            <?php else: ?>

                <div class="no-messages">

                    No Messages

                </div>

            <?php endIf; ?>


            </div>
        </div>
    </div>
</div>


<?php $page->end() ?>
