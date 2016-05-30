<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DoctorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'doctor_id') ?>

    <?= $form->field($model, 'doctor_name') ?>

    <?= $form->field($model, 'doctor_salary') ?>

    <?= $form->field($model, 'doctor_address') ?>

    <?= $form->field($model, 'doctor_sex') ?>

    <?php // echo $form->field($model, 'doctor_contact') ?>

    <?php // echo $form->field($model, 'doctor_dept') ?>

    <?php // echo $form->field($model, 'doctor_qualification') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
