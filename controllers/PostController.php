<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;
use yii\data\Pagination;

class PostController extends Controller
{

   public function actionIndex()
   {
        //$posts= Post::find()->all();
        $query = Post::find();
        $pages = new Pagination (['totalCount'=> $query->count(), 'pageSize' => 3]); 
        $posts = $query->offset ($pages->offset) ->limit ($pages->limit)->all() ;   
        return $this->render('index', compact ('posts','pages'));
   } 

}


