<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\AppointmentStatus;
use app\models\Department;
use app\models\Doctor;
/* @var $this yii\web\View */
/* @var $model app\models\Appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'doctor_id')->dropDownList(ArrayHelper::map(Doctor::find()->all(),'doctor_id','doctor_name')) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'symtom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'medicine')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dept_id')->dropDownList(ArrayHelper::map(Department::find()->all(),'dept_id','dept_name')) ?>


    <?= $form->field($model, 'status_id')->dropDownList(ArrayHelper::map(AppointmentStatus::find()->all(),'status_id','current_status')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
