​<?php
include ('../includes/config.php');
if (isset($_GET['id'])) {
    $cId = $_GET['id'];
    $sql = "DELETE FROM customer WHERE id ='$cId' ";
     $result = $con->query($sql);
     if ($result == TRUE) {
        echo "<script>
		window.alert('Delete Successfully');
		window.location='customerManage.php';
		</script>";
    }else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }
}
?>