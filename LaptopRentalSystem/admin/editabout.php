<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit laptop</title>
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
    if (isset($_POST['editAbout'])) {
        $id = $_POST['Id'];
        $a = $_POST['About'];
        $sql = "UPDATE `Blog` SET `about`='$a' WHERE `Blog_id`='$id' ";
        $result = $con->query($sql);
        if ($result === TRUE) {
            echo "<script>
		window.alert('Updated Successfully');
		window.location='about.php';
		</script>";
        } else {
            echo "Error:" . $sql . "<br>" . $con->error;
        }
    }


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM Blog WHERE Blog_id='$id'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['Blog_id'];
                $a = $row['about'];
            }


    ?>
            <h2 class="heading">About us Page Update Form</h2><br>

            <form action="" class="form-gp" method="post" enctype="multipart/form-data">
                <fieldset>
                    <input type="hidden" name="Id" value="<?php echo $id; ?>"> <br>
                    <textarea class="form-control" name="About" rows="10" cols="50"> <?php echo $a; ?></textarea>
                    <input type="submit" class="btn btn-primary Button" value="Edit" name="editAbout">
                    <a href="about.php" type="button" class="btn btn-info Button Back">Back</a><br>
                </fieldset>
            </form>

    <?php
        } else {
            header('Location: about.php');
        }
    }
    ?>




</body>

</html>