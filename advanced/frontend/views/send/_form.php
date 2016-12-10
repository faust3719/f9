<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Send */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="send-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'otprav')->hiddenInput(['value' => Yii::$app->user->identity->username])->label(false) ?>

    <?= $form->field($model, 'poluch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sum')->textInput() ?>
<?php
$date= new DateTime();
?>
    <?= $form->field($model, 'date')->hiddenInput(['value' => $date->format('Y-m-d H:i:s')])->label(false)  ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 'Исполняется'])->label(false)  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Отправить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
