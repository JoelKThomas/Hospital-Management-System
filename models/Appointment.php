<?php

namespace app\models;

use Yii;
use app\models\Department;
use app\models\AppointmentStatus;
/**
 * This is the model class for table "appointment".
 *
 * @property integer $app_no
 * @property integer $patient_id
 * @property integer $doctor_id
 * @property string $date
 * @property string $symtom
 * @property string $medicine
 * @property integer $dept_id
 * @property integer $status_id
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'doctor_id', 'date', 'dept_id'], 'required'],
            [['patient_id', 'doctor_id', 'dept_id', 'status_id'], 'integer'],
            [['date'], 'safe'],
            [['symtom', 'medicine'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'app_no' => 'App No',
            'patient_id' => 'Patient ID',
            'doctor_id' => 'Doctor ID',
            'date' => 'Date',
            'symtom' => 'Symtom',
            'medicine' => 'Medicine',
            'dept_id' => 'Dept ID',
            'status_id' => 'Status ID',
        ];
    }

    public function getDoctorid()
    {
        return $this ->hasOne(Doctor::className(),['doctor_id'=>'doctor_id']);  
     }
      public function getPatientid()
    {
        return $this ->hasOne(Patient::className(),['patient_id'=>'patient_id']);  
     }
     public function getAppdept()
    {
        return $this ->hasOne(Department::className(),['dept_id'=>'dept_id']);  
     }
     public function getAppstatus()
    {
        return $this ->hasOne(AppointmentStatus::className(),['status_id'=>'status_id']);  
     }
}
