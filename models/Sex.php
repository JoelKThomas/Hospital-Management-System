<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sex".
 *
 * @property integer $sex_id
 * @property string $sex_name
 */
class Sex extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sex';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex_id', 'sex_name'], 'required'],
            [['sex_id'], 'integer'],
            [['sex_name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sex_id' => 'Sex ID',
            'sex_name' => 'Sex Name',
        ];
    }
}
