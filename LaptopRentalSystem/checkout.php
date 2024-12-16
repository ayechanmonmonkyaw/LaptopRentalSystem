<?php
session_start();
include '../AyeChanMon_201527_Code/includes/config.php';

if (isset($_POST['btnCheckout'])) {
    $Email = $_POST['em'];
    $select = "SELECT * 
			FROM customer
			WHERE cemail='$Email'";


    $query = mysqli_query($con, $select);
    $data = mysqli_fetch_array($query);
    $UserID = $data['id'];


    if (isset($UserID) && isset($_SESSION['cart'])) {
        $user_id = $UserID;
        $cart = $_SESSION['cart'];
        $total = 0;


        foreach ($cart as $product_id => $quantity) {
            $sql = "SELECT * FROM Product WHERE P_id=$product_id";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();

            $total += $row['P_price'] * $quantity;
        }

        $sql = "INSERT INTO orders (id, total_amount) VALUES ($user_id, $total)";
        if ($con->query($sql) === TRUE) {
            $order_id = $con->insert_id;

            foreach ($cart as $product_id => $quantity) {
                $sql = "SELECT * FROM Product WHERE P_id=$product_id";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();

                $price = $row['P_price'];
                $sql = "INSERT INTO order_product (order_id, id, P_id, quantity, price) VALUES ($order_id, $user_id, $product_id, $quantity, $price)";
                $con->query($sql);
            }

            $_SESSION['cart'] = [];
            echo "<script>
                window.alert('Order Placed Successfully');
                window.location='LaptopList.php';
                </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "<script>
        window.alert('Please Log in first!');
        window.location='../AyeChanMon_201527_Code/customer/login.php';
        </script>";
    }
}
