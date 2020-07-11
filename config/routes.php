<?php

return array(
    
    //Products pages
    'products/([a-z]+)/page-([0-9]+)' => 'products/category/$1/$2',
    'products/page-([0-9]+)' => 'products/index/$1',
    'products/([a-z]+)' => 'products/category/$1',
    'products/([0-9]+)' => 'products/view/$1',
    'products' => 'products/index',

    // Cart pages
    'cart' => 'cart/index',
    'checkout' => 'cart/checkout',

    // different stuff with products
    'cart/add/([0-9]+)' => 'cart/addProduct/$1',
    'cart/update' => 'cart/updateQuant',
    'cart/total' => 'cart/getTotal',
    'cart/complete' => 'cart/complete',
    'cart/delete/([0-9]+)' => 'cart/deleteProduct/$1',
    'cart/quant/([0-9]+)/([0-9]+)' => 'cart/changeQuantity/$1/$2',

    //Contacts page
    'contacts' => 'contacts/index',

    //Home page
    '' => 'home/index'

);

?>