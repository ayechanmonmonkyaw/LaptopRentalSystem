<?php
session_start();

// Example cart array stored in session
$cart = $_SESSION['cart'];

// Product ID to remove
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    // Check if the product ID exists in the cart
    if (isset($cart[$product_id])) {
        // Remove the product from the cart
        unset($cart[$product_id]);
    }

    // Update the session with the modified cart
    $_SESSION['cart'] = $cart;
    echo "<script>
           window.alert('Are you sure to remove this item?');
           window.location='cart.php';
           </script>";

    // print_r($_SESSION['cart']);
} else {
    echo "No product to remove";
}
