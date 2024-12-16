
<?php

session_start();
include "../RentalLaptop/includes/config.php";

if (isset($_POST['p_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['p_id'];
    $quantity = $_POST['quantity'];

    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        if (array_key_exists($product_id, $cart)) {
            $cart[$product_id] += $quantity;
        } else {
            $cart[$product_id] = $quantity;
        }
    } else {
        $cart = array($product_id => $quantity);
    }
    $_SESSION['cart'] = $cart;
    header("Location: cart.php");
}
