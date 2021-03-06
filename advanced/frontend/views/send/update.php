<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Send */

$this->title = 'Update Send: ' . $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Sends', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->date, 'url' => ['view', 'id' => $model->date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="send-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
