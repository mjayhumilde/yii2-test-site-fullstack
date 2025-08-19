<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\project $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_stack')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(), [
        // so that the user cannont manually enter a date
        'options' => ['readOnly' => true],
    ]) ?>

    <?= $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::classname(), [
        // so that the user cannont manually enter a date
        'options' => ['readOnly' => true],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>