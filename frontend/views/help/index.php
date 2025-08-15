<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="help-index">

    <div class="p-5 bg-secondary text-center">
        <?= Html::a('Account Settings', ['help/account-settings']) ?> <br>
    </div>
    <?= Html::a('Login and Security', ['help/login-and-security']) ?> <br>
    <?= Html::a('Privacy', ['help/privacy']) ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <h3>TRYYY</h3>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis maxime exercitationem facere alias dolorum soluta porro architecto dicta fugit blanditiis?
    </p>

</div>