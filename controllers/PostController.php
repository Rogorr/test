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
        $query = Post::find()->with('category');
        $pages = new Pagination (['totalCount'=> $query->count(), 'pageSize' => 4, 'forcePageParam'=>false, 'pageSizeParam'=> false]); 
        $posts = $query->offset ($pages->offset) ->limit ($pages->limit)->all() ;   
        return $this->render('index', compact ('posts','pages'));   
   }
   
   public function actionView($id)
   {
      var_dump($id);
      die;
   }

   public function actionTest()
    {
        $post1 = new post();
        $post1->category_id = '3';
        $post1->title = 'Пятый пост';
        $post1->excerpt = 'Пятый пост';
        $post1->content = 'Содержимое Пятого поста';
        if ($post1->save()) {
            echo "Создан пост: {$post1->title}\n";
        } else {
            echo "Ошибка при создании поста: " . implode(', ', $post1->getErrors()) . "\n";
        }

        $post2 = new post();
        $post2->category_id = '2';
        $post2->title = 'Четвёртый пост';
        $post2->excerpt = 'Четвёртый пост';
        $post2->content = 'Содержимое четвёртого поста';
        if ($post2->save()) {
            echo "Создан пост: {$post2->title}\n";
        } else {
            echo "Ошибка при создании поста: " . implode(', ', $post2->getErrors()) . "\n";
        }
    }

}


