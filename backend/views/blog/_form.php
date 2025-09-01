<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;
use kartik\editors\Summernote; // Use the correct class for the kartik package

/** @var yii\web\View $this */
/** @var common\models\Blog $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'description')->widget(Summernote::class, [
        'options' => ['placeholder' => 'Write your blog content here...'],
        'pluginOptions' => [
            'height' => 300,
        ]
    ])->label('Description'); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>