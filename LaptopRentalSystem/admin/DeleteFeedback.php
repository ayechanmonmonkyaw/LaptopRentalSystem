​<?php
    include('../includes/config.php');
    if (isset($_GET['id'])) {
        $Id = $_GET['id'];
        $sql = "DELETE FROM msg WHERE m_id ='$Id' ";
        $result = $con->query($sql);
        if ($result == TRUE) {
            echo "<script>
		window.alert('Delete Successfully');
		window.location='customerFeedback.php';
		</script>";
        } else {
            echo "Error:" . $sql . "<br>" . $con->error;
        }
    }
    ?>