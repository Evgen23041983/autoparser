<?php

//include_once ROOT . '/models/Category.php';


class ContactController
{

    public function actionIndex()
    {
        
       
        require_once(ROOT . '/views/contact/index.php');

        return true;
    }

}
