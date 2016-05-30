<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Sex;
use app\models\Department;


/* @var $this yii\web\View */
/* @var $model app\models\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'doctor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doctor_salary')->textInput() ?>

    <?= $form->field($model, 'doctor_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'doctor_sex')->dropDownList(ArrayHelper::map(Sex::find()->all(),'sex_id','sex_name')) ?>

    <?= $form->field($model, 'doctor_contact')->textInput() ?>

    <?= $form->field($model, 'doctor_dept')->dropDownList(ArrayHelper::map(Department::find()->all(),'dept_id','dept_name')) ?>

    <?= $form->field($model, 'doctor_qualification')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
