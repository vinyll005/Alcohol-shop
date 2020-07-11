<?php

class ContactsController
{

    public function actionIndex()
    {
        $headerProducts = Products::getHeaderProducts();

        require_once(ROOT.'/views/contact/index.php');

        return true;
    }

}

?>