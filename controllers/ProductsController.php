<?php

class ProductsController
{

    public function actionIndex($page = 1)
    {
        $headerProducts = Products::getHeaderProducts();

        $categories = Category::getCategoriesList();
        $products = Products::getLatestProducts($page);
        $productsAmount = Products::getAmountOfProducts();

        $pagination = new Pagination($productsAmount['count'], $page, Products::AMOUNT_PRODUCTS_BY_DEFAULT, 'page-');

        require_once(ROOT.'/views/products/list.php');

        return true;
    }

    public function actionView($productId)
    {
        $product = Products::getProductById($productId);

        $headerProducts = Products::getHeaderProducts();

        require_once(ROOT.'/views/products/view.php');

        return true;
    }

    public function actionCategory($categoryName, $page = 1)
    {
        $headerProducts = Products::getHeaderProducts();

        $products = Products::getProductsByCategory($categoryName, $page);
        $categories = Category::getCategoriesList();
        $productsAmountByCategory = Products::getAmountOfProductsByCategory($categoryName);

        $pagination = new Pagination($productsAmountByCategory['count'], $page, Products::AMOUNT_PRODUCTS_BY_DEFAULT, 'page-');

        require_once(ROOT.'/views/products/list.php');

        return true;
    }
}

?>