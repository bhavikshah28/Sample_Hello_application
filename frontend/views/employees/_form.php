<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contact')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
