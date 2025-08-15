<?php

namespace frontend\controllers;

use yii\base\Controller;

class HelpController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAccountSettings()
    {
        return $this->render('accountSettings');
    }
    public function actionPrivacy()
    {
        return $this->render('privacy');
    }

    public function actionLoginAndSecurity()
    {
        return $this->render('loginAndSecurity');
    }
}
