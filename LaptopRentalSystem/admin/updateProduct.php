<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product||ATech</title>
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
  if (isset($_POST['update'])) {
    $id = $_POST['p_id'];
    $n = $_POST['name'];
    $t = $_POST['type'];
    $r = $_POST['ram'];
    $s = $_POST['storage'];
    $c = $_POST['cpu'];
    $sz = $_POST['screen'];
    $re = $_POST['resolution'];
    $col = $_POST['color'];
    $p = $_POST['price'];

    if ($p > 5000) {
      $sql = "UPDATE `Product` SET `P_name`='$n',`Type_id`='$t',`P_ram`='$r',`P_storage`='$s',`P_cpu`='$c',`P_size`='$sz',`P_resolution`='$re',`P_color`='$col',`P_price`='$p' WHERE `P_id`='$id' ";
      $result = $con->query($sql);
      if ($result == TRUE) {
        echo "<script>
		window.alert('Updated Successfully');
		window.location='editProduct.php';
		</script>";
      } else {
        echo "Error:" . $sql . "<br>" . $con->error;
      }
    }
  }


  if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sql = "SELECT * FROM Product WHERE P_id='$p_id'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $p_id = $row['P_id'];
        $pN = $row['P_name'];
        $pT = $row['Type_id'];
        $pR = $row['P_ram'];
        $pS = $row['P_storage'];
        $pC = $row['P_cpu'];
        $pSz = $row['P_size'];
        $pRe = $row['P_resolution'];
        $pCol = $row['P_color'];
        $img = $row['P_img'];
        $pPrice = $row['P_price'];
      }


  ?>
      <h2 class="heading">Product details update</h2><br>

      <form name="f1" action="" class="form-gp" method="post" onsubmit="return validation()" enctype="multipart/form-data">
        <fieldset>
          <input type="hidden" name="p_id" value="<?php echo $p_id; ?>"> <br>
          Name:<br>
          <input type="text" class="form-control" name="name" value="<?php echo $pN; ?>">
          Type:<br>
          <input type="text" class="form-control" name="type" value="<?php echo $pT; ?>">
          Ram:<br>
          <input type="text" class="form-control" name="ram" value="<?php echo $pR; ?>">
          Storage:<br>
          <input type="text" class="form-control" name="storage" value="<?php echo $pS; ?>">
          CPU:<br>
          <input type="text" class="form-control" name="cpu" value="<?php echo $pC; ?>">
          Screen Size<br>
          <input type="text" class="form-control" name="screen" value="<?php echo $pSz; ?>">
          Resolution<br>
          <input type="text" class="form-control" name="resolution" value="<?php echo $pRe; ?>">
          Color<br>
          <input type="text" class="form-control" name="color" value="<?php echo $pCol; ?>">
          Image<br>
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?>" width="125" alt="image">
          <br>
          Price per day<br>
          <input type="number" class="form-control" name="price" value="<?php echo $pPrice; ?>">
          <br><br>
          <input type="submit" class="btn btn-primary Button" value="Edit" name="update">
          <a href="editProduct.php" type="button" class="btn btn-warning Button Back">Back</a><br>
        </fieldset>
      </form>

  <?php
    } else {
      header('Location: editProduct.php');
    }
  }
  ?>
  <script src="../admin/js/validate.js"></script>



</body>

</html>