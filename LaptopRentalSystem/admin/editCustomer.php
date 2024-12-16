<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <!-- bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/972ffd0a78.js" crossorigin="anonymous"></script>
    <!--icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--dashboard css link-->
    <link href="../css/editLaptop.css" rel="stylesheet">
</head>
<body>
<?php

include "../includes/config.php";
if(isset($_POST['editCustomer'])){
 $id = $_POST['cid'];
 $fn = $_POST['fname'];
 $ln = $_POST['lname'];
 $add = $_POST['add'];
 $ph = $_POST['ph'];
 $em = $_POST['em'];
 $pw = $_POST['pw'];

$sql = "UPDATE `customer` SET `fname`='$fn',`lname`='$ln',`address`='$add',`phone`='$ph',`cemail`='$em',`cpassword`='$pw' WHERE `id`='$id' ";
$result = $con->query($sql);
if($result == TRUE){
  echo "<script>
		window.alert('Updated Successfully');
        window.location='customerManage.php';
		</script>";
} else{
  echo "Error:" .$sql . "<br>" .$con->error;
}

}


if (isset($_GET['id'])){
    $cid = $_GET['id'];
    $sql = "SELECT * FROM `customer` WHERE id='$cid'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $id = $row['id'];
            $fn= $row['fname'];
            $ln = $row['lname'];
            $add = $row['address'];
            $ph = $row['phone'];
            $em = $row['cemail'];
            $pw = $row['cpassword'];
        }

?>
  <h2 class="heading">Customer Management</h2><br>

        <form action=""  class="form-gp" method="post" enctype="multipart/form-data">
          <fieldset>
            <input type="hidden"  name="cid" value="<?php echo $id; ?>"> <br>
           First Name<br>
            <input type="text" class="form-control" name="fname" value="<?php echo $fn; ?>">
           Last Name<br>
            <input type="text" class="form-control" name="lname" value="<?php echo $ln; ?>">
           Address<br>
            <input type="text" class="form-control" name="add" value="<?php echo $add; ?>">
            <br>
           Phone<br>
            <input type="text" class="form-control" name="ph" value="<?php echo $ph; ?>">
           Email<br>
            <input type="text" class="form-control" name="em" value="<?php echo $em; ?>">
            <br>
            Password<br>
            <input type="text" class="form-control" name="pw" value="<?php echo $pw; ?>">
            <br>
            <input type="submit" class="btn btn-primary Button" value="EDIT" name="editCustomer">
            <a href="customerManage.php" type="button" class="btn btn-warning Button Back">Back</a><br>
          </fieldset>
        </form>

        <?php
    } else{
        header('Location: customerManage.php');
    }
}
?>

</body>
</html>