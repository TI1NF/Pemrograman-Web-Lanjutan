<?php
namespace app\controller;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout = 'login';

    public function actionLogin()
    {
        return $this->render('form-login');
    }
}