<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Send */

$this->title = $model->date;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="send-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'otprav',
            'poluch',
            'sum',
            'date',
            'status',
        ],
    ]) ?>

</div>
