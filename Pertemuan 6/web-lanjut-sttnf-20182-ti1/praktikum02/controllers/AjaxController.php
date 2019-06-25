<?php

namespace app\controllers;

class AjaxController extends \yii\web\Controller
{
    public function getBooks()
    {
        $books = [
            ['id' => '1', 'title' => 'Pemrograman Web', 'author' => 'Farhan', 'year' => '2017'],
            ['id' => '2', 'title' => 'Pemrograman JS', 'author' => 'Raihan', 'year' => '2018'],
            ['id' => '3', 'title' => 'Pemrograman MySQL', 'author' => 'Hera', 'year' => '2019'],
        ];

        return $books;
    }

    public function actionBook()
    {
        $model = new \yii\base\DynamicModel([
            'title','author','year'
        ]);

        $model->addRule(['title'], 'string');
        $model->addRule(['author'], 'string');
        $model->addRule(['year'], 'integer');

        return $this->render('book',[
            'model' => $model,
            'books' => $this->getBooks(),
        ]);
    }

    public function actionGetBook($id)
    {
        $books = $this->getBooks();
        $bookSelected = [];
        foreach($books as $book)
        {
            if($book['id'] == $id)
            {
                $bookSelected = $book;
            }
        }

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'book' => $bookSelected,
        ];
    }
}