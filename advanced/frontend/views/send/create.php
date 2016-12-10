<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Send */

$this->title = 'Отправление';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="send-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
