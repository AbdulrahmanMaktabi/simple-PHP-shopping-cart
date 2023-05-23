<?php 
    require_once "class.cart.php";
    require_once "class.cartitem.php";
    require_once "class.product.php";

    $product1 = new Product(1 , "iPhone 13" , 2500 , 10);
    $product2 = new Product(2 , "iPhone 12" , 3500 , 10);
    $product3 = new Product(3 , "iPhone 11" , 4500 , 10);

    $cart = new Cart();

    $cartItem1 = $cart->addProduct($product1 , 1);
    $cartItem2 = $product2->addToCart($cart , 2);
    echo "Number of items in cart: ";
    echo $cart->getTotalQuantity();
    echo "<br>";
    echo "Total Price of items in carts: ";
    echo $cart->getTotalSum();
    echo "<br>";

    $cartItem2->increaseQuantity();
    $cartItem2->increaseQuantity();

    echo "Number of items in cart: ";
    echo $cart->getTotalQuantity();
    echo "<br>";
    echo "Total Price of items in carts: ";
    echo $cart->getTotalSum();

    $cart->removeProduct($product1);
    $cart->removeProduct($product2);
    echo "<br>";
    echo "Number of items in cart: ";
    echo $cart->getTotalQuantity();
    echo "<br>";
    echo "Total Price of items in carts: ";
    echo $cart->getTotalSum();