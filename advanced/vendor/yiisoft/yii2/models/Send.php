<?php

namespace yii\models;

use Yii;

/**
 * This is the model class for table "send".
 *
 * @property integer $otpav
 * @property integer $poluch
 * @property integer $sum
 * @property string $date
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
            [['otpav', 'poluch', 'sum'], 'integer'],
            [['date'], 'required'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'otpav' => 'Otpav',
            'poluch' => 'Poluch',
            'sum' => 'Sum',
            'date' => 'Date',
        ];
    }
}
