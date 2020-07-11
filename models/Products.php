<?php

class Products
{
    const AMOUNT_PRODUCTS_BY_DEFAULT = 6;

    public static function getProductsList()
    {
        $db = Db::getDbConnection();
        $id = 'id';

        $request = $db->prepare("SELECT * FROM products ORDER BY ? ASC");
        $request->bind_param('s', $id);
        $request->execute();
        $result = $request->get_result();
        $products = array();
        
        $i = 0;
       while($row = $result->fetch_assoc()) {
           $products[$i]['id'] = $row['id'];
           $products[$i]['name'] = $row['name'];
           $products[$i]['category_name'] = $row['category_name'];
           $products[$i]['description'] = $row['description'];
           $products[$i]['is_new'] = $row['is_new'];
           $products[$i]['price'] = $row['price'];
           $products[$i]['is_recommended'] = $row['is_recommended'];
           $i++;
       }
       return $products; 
    }

    public static function getLatestProducts($page, $count = self::AMOUNT_PRODUCTS_BY_DEFAULT)
    {
        $db = Db::getDbConnection();

        $count = intval($count);
        $offset = ($page - 1) * self::AMOUNT_PRODUCTS_BY_DEFAULT;

        $request = $db->prepare("SELECT * FROM products
            ORDER BY id DESC
            LIMIT ?
            OFFSET ?");
        
        $request->bind_param('ss', $count, $offset);
        $request->execute();

        $result = $request->get_result();

        $products = array();
        $i = 0;
        while($row = $result->fetch_assoc())    {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['category_name'] = $row['category_name'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['is_new'] = $row['is_new'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['is_recommended'] = $row['is_recommended'];
            $i++;
        }

        return $products;
    }

    public static function getProductById($id)
    {
        $db = Db::getDbConnection();

        $request = $db->prepare("SELECT * FROM products WHERE id=?");
        $request->bind_param('s', $id);
        $request->execute();

        $result = $request->get_result();
        return $result->fetch_assoc();
    }

    public static function getAmountOfProducts()
    {
        $db = Db::getDbConnection();

        $request = $db->query("SELECT count(id) AS count FROM products WHERE availability = '1'");
        $productsAmount = $request->fetch_assoc();

        return $productsAmount;
    }

    public static function getProductsByCategory($categoryName, $page, $count = self::AMOUNT_PRODUCTS_BY_DEFAULT)
    {
        $db = Db::getDbConnection();
        $count = intval($count);
        $offset = ($page - 1) * self::AMOUNT_PRODUCTS_BY_DEFAULT;

        $request = $db->prepare("SELECT * FROM products 
            WHERE category_name=? 
            ORDER BY id DESC
            LIMIT ?
            OFFSET ?");

        $request->bind_param('sss', $categoryName, $count, $offset);
        $request->execute();

        $result = $request->get_result();

        $products = array();
        $i = 0;

        while($row = $result->fetch_assoc())    {
           $products[$i]['id'] = $row['id'];
           $products[$i]['name'] = $row['name'];
           $products[$i]['category_name'] = $row['category_name'];
           $products[$i]['description'] = $row['description'];
           $products[$i]['is_new'] = $row['is_new'];
           $products[$i]['price'] = $row['price'];
           $products[$i]['is_recommended'] = $row['is_recommended'];
            $i++;
        }

        return $products;
    }

    public static function getAmountOfProductsByCategory($categoryName)
    {
        $db = Db::getDbConnection();

        $request = $db->prepare("SELECT count(id) AS count FROM products WHERE availability = '1' AND category_name = ?");
        $request->bind_param('s', $categoryName);
        $request->execute();

        $result = $request->get_result();
        $productsAmount = $result->fetch_assoc();

        return $productsAmount;
    }

    public static function getNewProducts()
    {
        $db = Db::getDbConnection();
        $new = '1';

        $request = $db->prepare("SELECT * FROM products WHERE is_new=?");
        $request->bind_param('s', $new);
        $request->execute();

        $result = $request->get_result();

        $i = 0;
        $products = array();

        while($row = $result->fetch_assoc())   {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['category_name'] = $row['category_name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }

        return $products;
    }

    public static function getProductsByIds($ids)
    {
        $db = Db::getDbConnection();

        $idsString = implode(',', $ids);

        $request = $db->query("SELECT * FROM products WHERE id IN ($idsString)");

        $i = 0;
        $products = array();
        while($row = $request->fetch_assoc())   {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['category_name'] = $row['category_name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['description'] = $row['description'];
            $i++;
        }

        return $products;
    }

    public static function getHeaderProducts()
    {
        $headerProducts = array_slice(Cart::getProducts(), 0, 3, true);
        $headerProductsIds = array_keys($headerProducts);
        $threeProducts = self::getProductsByIds($headerProductsIds);

        return $threeProducts;
    }

}

?>