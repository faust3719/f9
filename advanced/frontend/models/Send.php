<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "send".
 *
 * @property string $otprav
 * @property string $poluch
 * @property integer $sum
 * @property string $date
 * @property string $status
 */
class Send extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'send';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sum'], 'integer'],
            [['sum'], 'required'],
            [['poluch'], 'required'],
            [['date'], 'required'],
            [['date'], 'safe'],
            [['otprav', 'poluch', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'otprav' => 'Отправитель',
            'poluch' => 'Получатель',
            'sum' => 'Сумма',
            'date' => 'Дата',
            'status' => 'Статус',
        ];
    }
}
