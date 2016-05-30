<?php

namespace app\models;

use Yii;
use app\models\Sex;

/**
 * This is the model class for table "patient".
 *
 * @property integer $patient_id
 * @property string $patient_name
 * @property integer $patient_sex
 * @property string $patient_address
 * @property integer $patient_contact
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_name', 'patient_sex', 'patient_address', 'patient_contact'], 'required'],
            [['patient_sex', 'patient_contact'], 'integer'],
            [['patient_address'], 'string'],
            [['patient_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'patient_name' => 'Patient Name',
            'patient_sex' => 'Patient Sex',
            'patient_address' => 'Patient Address',
            'patient_contact' => 'Patient Contact',
        ];
    }
     public function getPatientsex()
    {
        return $this ->hasOne(Sex::className(),['sex_id'=>'patient_sex']);  
     }
}
