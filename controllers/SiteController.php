<?php



class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        //$categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getRecomendetProducts();

        $caruselProducts = array();
        $caruselProducts = Product::getLatestProducts(20);

        $Category = array();
        $Category = Category::getCategoriesList();

        
        
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }


   
}
