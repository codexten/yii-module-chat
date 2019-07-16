<?php

use codexten\yii\web\widgets\Page;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

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


<div class="messaging">
    <div class="inbox_msg">
        <div class="inbox_people">
            <div class="headind_srch">
                <div class="recent_heading">
                    <h4>Recent</h4>
                </div>
                <div class="srch_bar">
                    <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search">
                        <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span>
                    </div>
                </div>
            </div>
            <div class="inbox_chat">

                <?php foreach ($contacts as $contact): ?>

                    <div class="chat_list <?= $contact->id == $toUser->id ? 'active_chat' : '' ?>"
                         style="cursor: pointer"
                         onclick="location.href='<?= \yii\helpers\Url::to(['index', 'id' => $contact->id]) ?>';">
                        <div class="chat_people">
                            <div class="chat_img">
                            </div>
                            <div class="chat_ib">
                                <h5><?= $contact->username ?></h5>
                                <!--                                <p>Test, which is a new approach to have all solutions-->
                                <!--                                    astrology under one roof.</p>-->
                            </div>
                        </div>
                    </div>

                <?php endForeach; ?>

            </div>
        </div>
        <div class="mesgs">
            <div class="msg_history">

                <?php if ($toUser): ?>

                    <?= $this->render('index/_messages', $_params_) ?>

                <?php endIf; ?>

            </div>
            <div class="type_msg">

                <?php if ($toUser): ?>

                    <?php Pjax::begin(); ?>

                    <div class="input_msg_write">

                        <?php $from = ActiveForm::begin() ?>

                        <?= $from->field($model, 'text')
                            ->textInput([
                                'options' => [
                                    'class' => 'write_msg',
                                ],
                            ])->label(false) ?>

                        <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o"
                                                                      aria-hidden="true"></i>
                        </button>

                        <?php ActiveForm::end() ?>
                    </div>

                    <?php Pjax::end(); ?>

                <?php endIf; ?>

            </div>
        </div>
    </div>
</div>

<?php $page->end() ?>
