<?php

namespace frontend\controllers;

use Yii;
use app\models\Send;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SendController implements the CRUD actions for Send model.
 */
class SendController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Send models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Send::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Send model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Send model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {



        $model = new Send();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
$query= new \yii\db\Query();

$query->select('sum,otprav,poluch,status,date')->from('send')->where(array('like','otprav',Yii::$app->user->identity->username));
$rows1=$query->all();
$command=$query->createCommand();
$rows1=$command->queryAll();

$query->select('schet,username')->from('user')->where(array('like','username',Yii::$app->user->identity->username));
$rows=$query->all();
$command=$query->createCommand();
$rows=$command->queryAll();
$poluch=trim($rows1[count($rows1)-1]['poluch']);
$query->select('schet,username')->from('user')->where(array('like','username',$poluch));
$row=$query->all();
$command=$query->createCommand();
$row=$command->queryAll();
if (Yii::$app->user->identity->username!=$poluch)
if (isset($rows[0]['schet']) && isset($rows1[count($rows1)-1]['sum']) && ($rows[0]['schet']>$rows1[count($rows1)-1]['sum'])) {
$schet=$rows[0]['schet']-$rows1[count($rows1)-1]['sum'];
$rows[0]['username'];
$command=Yii::$app->db->createCommand('UPDATE "user" SET schet='."'".$schet."'".' WHERE username='."'".$rows[0]['username']."'");
$rows2=$command->queryAll();
$schet=$row[0]['schet']+$rows1[count($rows1)-1]['sum'];
$command=Yii::$app->db->createCommand('UPDATE "user" SET schet='."'".$schet."'".' WHERE username='."'".$row[0]['username']."'");
$rows2=$command->queryAll();
$status='Исполнен';
$command=Yii::$app->db->createCommand('UPDATE "send" SET status='."'".$status."'".' WHERE date='."'".$rows1[count($rows1)-1]['date']."'");
$rows2=$command->queryAll();
}
else
{
$status='Недостаточно средств';
$command=Yii::$app->db->createCommand('UPDATE "send" SET status='."'".$status."'".' WHERE date='."'".$rows1[count($rows1)-1]['date']."'");
$rows2=$command->queryAll();
}
else
{
$status='Невозможно отправить самому себе!';
$command=Yii::$app->db->createCommand('UPDATE "send" SET status='."'".$status."'".' WHERE date='."'".$rows1[count($rows1)-1]['date']."'");
$rows2=$command->queryAll();
}

            return $this->redirect(['view', 'id' => $model->date]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Send model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->date]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Send model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Send model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Send the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Send::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
