<?php

namespace app\models;

use Yii;
use app\models\Sex;
use app\models\Department;
/**
 * This is the model class for table "doctor".
 *
 * @property integer $doctor_id
 * @property string $doctor_name
 * @property integer $doctor_salary
 * @property string $doctor_address
 * @property integer $doctor_sex
 * @property integer $doctor_contact
 * @property integer $doctor_dept
 * @property string $doctor_qualification
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doctor_name', 'doctor_salary', 'doctor_address', 'doctor_sex', 'doctor_contact', 'doctor_dept', 'doctor_qualification'], 'required'],
            [['doctor_salary', 'doctor_sex', 'doctor_contact', 'doctor_dept'], 'integer'],
            [['doctor_address', 'doctor_qualification'], 'string'],
            [['doctor_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'doctor_id' => 'Doctor ID',
            'doctor_name' => 'Doctor Name',
            'doctor_salary' => 'Doctor Salary',
            'doctor_address' => 'Doctor Address',
            'doctor_sex' => 'Doctor Sex',
            'doctor_contact' => 'Doctor Contact',
            'doctor_dept' => 'Doctor Dept',
            'doctor_qualification' => 'Doctor Qualification',
        ];
    }
     public function getDoctorsex()
    {
        return $this ->hasOne(Sex::className(),['sex_id'=>'doctor_sex']);  
     }
      public function getDoctorsdept()
    {
        return $this ->hasOne(Department::className(),['dept_id'=>'doctor_dept']);  
     }
}

