<?php

//include_once ROOT . '/models/Category.php';


class ProductController
{

    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $Category = array();
        $Category = Product::getProductsListByCategory(3);
        
        $product = Product::getProductById($productId);

        $images = array();
        $images = Product::getProductImage($productId);
       
        require_once(ROOT . '/views/product/view.php');

        return true;
    }

}
