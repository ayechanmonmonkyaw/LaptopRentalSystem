​<?php
    include('../includes/config.php');
    if (isset($_GET['id'])) {
        $PId = $_GET['id'];
        $sql = "DELETE FROM Product WHERE Product.P_id =$PId";
        $result = $con->query($sql);
        if ($result == TRUE) {
            echo "<script>
		window.alert('Delete Product Successfully');
		window.location='editProduct.php';
		</script>";
        } else {
            echo "Error:" . $sql . "<br>" . $con->error;
        }
    }
    ?>