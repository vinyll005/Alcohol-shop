<?php

class HomeController
{

    public function actionIndex()   {

        $newProducts = Products::getNewProducts();

        $headerProducts = Products::getHeaderProducts();
        
        require_once(ROOT.'/views/home/index.php');

        return true;
    }

}

?>