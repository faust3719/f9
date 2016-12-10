<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Привет';
?>
<div class="site-index">
<?php if (Yii::$app->user->isGuest) {
?>
<div class="jumbotron">
        <h1>Приветствуем!</h1>


        <p><a class="btn btn-lg btn-success" href="./index.php?r=site%2Fsignup">Регистрация</a></p>
        <p><a class="btn btn-lg btn-success" href="./index.php?r=site%2Flogin">Авторизация</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Зарегистрируйтесь</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Авторизуйтесь</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
<?php
    } else {
        ?>
<div class="col-lg-4">
                <h2>Отправить деньги</h2> 
       <p><a class="btn btn-lg btn-success">Остаток: <?php echo Yii::$app->user->identity->schet; ?></a></p>

        <p><a class="btn btn-lg btn-success" href="./index.php?r=send%2Fcreate">Отправить деньги</a></p>
        <p><a class="btn btn-lg btn-success" href="./index.php?r=user%2Fupdate&id=<?php echo Yii::$app->user->identity->id; ?>">Пополнить счет</a></p>
            </div>
<?php
    }
?>
    
</div>
