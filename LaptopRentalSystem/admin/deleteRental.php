​<?php
    include('../includes/config.php');
    if (isset($_GET['id'])) {
        $Id = $_GET['id'];
        $sql = "DELETE FROM order_product WHERE order_id = $Id";
        $result = $con->query($sql);
        if ($result == TRUE) {
            echo "<script>
		window.alert('Are you sure to cancel this order?');
		window.location='rentaldetail.php';
		</script>";
        } else {
            echo "Error:" . $sql . "<br>" . $con->error;
        }
    }
    ?>