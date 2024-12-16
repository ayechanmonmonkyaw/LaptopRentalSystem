<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart||ATech Rental Laptop</title>
    <!-- bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th colspan="2">
                    <h5>Cart </h5>
                </th>
                <th> <a class="btn btn-primary" href="LaptopList.php">Back</a>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            session_start();
            include "../AyeChanMon_201527_Code/includes/config.php";

            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                $total = 0;
                foreach ($cart as $product_id => $quantity) {

                    $sql = "SELECT * FROM Product WHERE P_id=$product_id";
                    $result = $con->query($sql);
                    $row = $result->fetch_assoc();
                    $total += $row['P_price'] * $quantity;

                    echo "<tr>";
                    echo "<td>" . $row["P_id"] . "</td>";
                    echo "<td>";
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['P_img']) . '" style="max-width:150px"/>';
                    echo "</td>";
                    echo "<td>" . $row["P_name"] . "</td>";
                    echo "<td>" . $row["P_price"] . "MMK</td>";
                    echo "<td>" . $quantity . "</td>";
                    echo "<td>" . ($row["P_price"] * $quantity) . "MMK</td>";
                    echo "<td><a href='removeCart.php?id=" . $row["P_id"] . "' class='btn btn-danger'>Remove</a></td>";
                    echo "</tr>";
                }
                echo "<tr>";
                echo "<td colspan='3'><h3>Total Amount:" . $total . " MMK</h3></td>";
                echo "<td colspan='2'><form method='post' action='checkout.php'></td>";
                echo "<td>";
                echo "<input type='email'  class='form-control' name='em' placeholder='Your E-mail' autofocus='autofocus' required>";
                echo "</td>";
                echo "<td>";
                echo "<button class='btn btn-success' type='submit' name='btnCheckout'>Checkout</button>";
                echo "</form></td>";
            } else {
                echo "Your cart is empty";
            }
            ?>
        </tbody>
    </table>
</body>

</html>