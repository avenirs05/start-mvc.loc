<?php

include_once ROOT . '/models/News.php';

class NewsController 
{
    public function actionIndex() 
    {
        $newsList = [];
        $newsList = News::getNewsList();
        print_r($newsList);
        return true;
    }
    
    public function actionView($category, $id) 
    {
//        echo 'NewsController ActionView - просмотр одной новости';
        echo '<br>' . $category;
        echo '<br>' . $id;
        return true;
    }

}
