<?php

class CartController
{

    public function actionIndex()
    {
        $productsInCart = Cart::getProducts();

        $headerProducts = Products::getHeaderProducts();

        if(!empty($productsInCart))    {
            $productsIds = array_keys($productsInCart);
            $products = Products::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once(ROOT.'/views/cart/index.php');

        return true;
    }

    public function actionCheckout()
    {
        $productsInCart = Cart::getProducts();

        $headerProducts = Products::getHeaderProducts();

        if(!empty($productsInCart))    {
            $productsIds = array_keys($productsInCart);
            $products = Products::getProductsByIds($productsIds);
            require_once(ROOT.'/views/cart/checkout.php');
        }   else    {
            header("Location: /products");
        }

        return true;
    }

    public function actionComplete()
    {
        $customer = $_POST;
        print_r($customer);
        
        Cart::completeOrder($customer);

        return true;
    }

    public function actionAddProduct($id)
    {
        echo Cart::addProduct($id);

        return true;
    }

    public function actionDeleteProduct($id)
    {
        Cart::deleteProduct($id);

        return true;
    }

    public function actionChangeQuantity($id, $quantity)
    {
        $product = Products::getProductById($id);
        Cart::changeProductQuantity($product, $quantity);

        return true;
    }

    public function actionUpdateQuant()
    {
        echo Cart::countProductsInCart();

        return true;
    }

    public function actionGetTotal()
    {
        $productsInCart = Cart::getProducts();

        if(!empty($productsInCart))    {
            $productsIds = array_keys($productsInCart);
            $products = Products::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
            echo '$'.$totalPrice;
        }   else    {
            echo '$0';
        }

        return true;
    }

}


?>