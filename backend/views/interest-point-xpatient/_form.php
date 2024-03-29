<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\InterestPointXPatient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interest-point-xpatient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'InterestPointId')->textInput() ?>

    <?= $form->field($model, 'PatientId')->textInput() ?>

    <?= $form->field($model, 'Enabled')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Creați' : 'Modificați', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
