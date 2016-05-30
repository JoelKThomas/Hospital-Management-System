<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointment_status".
 *
 * @property integer $status_id
 * @property string $current_status
 */
class AppointmentStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointment_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_id', 'current_status'], 'required'],
            [['status_id'], 'integer'],
            [['current_status'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'current_status' => 'Current Status',
        ];
    }
}
