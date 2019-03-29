<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Employee;

class EmployeeController extends Controller
{
    public function actionCreate()
    {
        $model = new Employee;

        if(Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());

            if($model->save())
            {
                Yii::$app->session->setFlash('success','Data berhasil disimpan');
            }
            else 
            {
                Yii::$app->session->setFlash('error','Data gagal disimpan');
            }

            return $this->redirect(['index']);
        }
        else 
        {
            return $this->render('create',[
                'model' => $model,
            ]);
        }
    }

    public function actionIndex()
    {
        $employees = Employee::find()->all();

        return $this->render('index', [
            'employees' => $employees,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Employee::findOne($id);

        if(Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());

            if($model->save())
            {
                Yii::$app->session->setFlash('success','Data berhasil diubah');
            }
            else 
            {
                Yii::$app->session->setFlash('error','Data gagal diubah');
            }

            return $this->redirect(['index']);
        }
        else 
        {
            return $this->render('update',[
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $model = Employee::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }
}