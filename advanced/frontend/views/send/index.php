<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отправить деньги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="send-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Отправить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'otprav',
            'poluch',
            'sum',
            'date',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
