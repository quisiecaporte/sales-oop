<?php

    //  This is main update 
    include "../classes/Product.php";

    $product = new Product;

    $product->deleteProduct($_GET['product_id']);
