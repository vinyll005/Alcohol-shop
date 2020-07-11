<?php

class Cart
{

    public static function addProduct($id)
    {
        $id = intval($id);

        $productsInCart = array();

        if(isset($_SESSION['productsInCart']))  {
            $productsInCart = $_SESSION['productsInCart'];
        }

        if(array_key_exists($id, $productsInCart))  {
            $productsInCart[$id]++;
        }   else    {
            $productsInCart[$id] = 1;
        }
        
        $_SESSION['productsInCart'] = $productsInCart;
        
        return self::countProductsInCart();
    }

    public static function decreaseProduct($id)
    {
        $id = intval($id);

        $productsInCart = array();

        if(isset($_SESSION['productsInCart']))  {
            $productsInCart = $_SESSION['productsInCart'];
        }

        if(array_key_exists($id, $productsInCart) && $productsInCart[$id] > 1)  {
            $productsInCart[$id]--;
        }   else    {
            $productsInCart[$id] = 1;
        }
        
        $_SESSION['productsInCart'] = $productsInCart;
        
        return self::countProductsInCart();
    }

    public static function countProductsInCart()
    {
        if(isset($_SESSION['productsInCart']))  {
            $count = 0;
            foreach ($_SESSION['productsInCart'] as $itemId => $itemCount)   {
                $count += $itemCount;
            }
            return $count;
        }   else    {
            return 0;
        }
    }

    public static function getProducts()
    {
        if(isset($_SESSION['productsInCart']))  {
            return $_SESSION['productsInCart'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;

        if(isset($productsInCart))  {
            foreach($products as $product)  {
                $total += $product['price'] * $productsInCart[$product['id']];
            }
        }
        return $total;
    }

    public static function deleteProduct($id)
    {
        $data = $id;
        unset($_SESSION['productsInCart'][$id]);
        // $referer = $_SESSION['HTTP_REFERER'];
        // header("Location: $referer");
        echo $data;
    }

    public static function changeProductQuantity($product, $quantity)
    {
        if($quantity < 1) {
            $quantity = 1;
        } elseif($quantity > 99)    {
            $quantity = 99;
        }

        if(isset($_SESSION['productsInCart'][$product['id']]))    {
            $_SESSION['productsInCart'][$product['id']] = $quantity;
        }

        echo '$'.$_SESSION['productsInCart'][$product['id']] * $product['price'];
    }

    public static function completeOrder($customer)
    {
        $db = Db::getDbConnection();
        $products = json_encode(self::getProducts());

        $request = $db->prepare("INSERT INTO orders(name, last_name, city, street, phone, email, products) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $request->bind_param('sssssss', $customer['name'], $customer['last_name'], $customer['city'], $customer['street'], $customer['phone'], $customer['email'], $products);
        $request->execute();

        unset($_SESSION['productsInCart']);
    }



}

?>