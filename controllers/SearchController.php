<?php

//include_once ROOT . '/models/Category.php';


class SearchController
{

    public function actionIndex()
    {
        
        $Category = array();
        $Category = Category::getCategoriesList();
        
        $keyword = '';
        $price1 = '';
        $price2 = '';
        $model = '';
        $year = '';
        $city = '';
       
        
        if (isset($_POST['search'])) {
            
            $model = $_POST['model'];
            if ($_POST['price2'] == '') {
                $price2 = 100000;
            } else {
                $price2 = $_POST['price2'];
            }
            
            $price1 = $_POST['price1'];
            $keyword = $_POST['keyword'];
            $year = $_POST['year'];
            $city = $_POST['city'];

            $latestProducts = array();
            $latestProducts = Search::getSearchProducts($price1, $price2, $model, $keyword, $year, $city);
            

        }

        require_once(ROOT . '/views/search/index.php');

        return true;
    }

    

}
