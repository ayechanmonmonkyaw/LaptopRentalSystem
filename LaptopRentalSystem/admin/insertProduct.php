<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert laptop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/insertLaptop.css">
</head>

<body>
    <?php

    include "../includes/config.php";
    //data insert
    if (isset($_POST['submit'])) {
        $n = $_POST['PName'];
        $t = $_POST['Ptype'];
        $r = $_POST['ram'];
        $st = $_POST['storage'];
        $cpu = $_POST['cpu'];
        $sz = $_POST['size'];
        $res = $_POST['resolution'];
        $col = $_POST['color'];
        $img = $_FILES['img']['tmp_name'];

        if ($img) {
            $imgContent = addslashes(file_get_contents($img));
        }
        $p = $_POST['price'];
        if ($p >= 5000) {
            $insert = $con->query("INSERT INTO `Product`(`P_name`, `Type_id`, `P_ram`, `P_storage`, `P_cpu`, `P_size`, `P_resolution`, `P_color`, `P_img`,`P_price`) VALUES 
            ('$n','$t','$r','$st','$cpu','$sz','$res','$col','$imgContent','$p')");

            if ($insert) {
                echo "<script>alert('Product inserted successfully!')</script>";
            } else {
                echo "<script>alert('Failed to insert data!!')</script>";
            }
        }

        //  $con->close();


    }

    ?>
    <div class="registeration-form">
        <form name="f1" action="" method="post" onsubmit="return validation()" enctype="multipart/form-data">
            <div class="mb-4">
                <h1>Insert New Product</h1>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="PName" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="storage">Product Type</label>
                <select name="Ptype" id="storage" class="form-control item" required>
                    <option value="T1">Laptop</option>
                    <option value="T2">Desktop</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ram">Ram</label>
                <select name="ram" id="ram" class="form-control item" required>
                    <option value="4Gb">4Gb</option>
                    <option value="6Gb">6Gb</option>
                    <option value="8Gb">8Gb</option>
                    <option value="12Gb">12Gb</option>
                </select>
            </div>
            <div class="form-group">
                <label for="storage">Storage</label>
                <select name="storage" id="storage" class="form-control item" required>
                    <option value="64Gb">64Gb</option>
                    <option value="128Gb">128Gb</option>
                    <option value="256Gb">256Gb</option>
                    <option value="512Gb">512Gb</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cpu">CPU Type</label>
                <select name="cpu" id="cpu" class="form-control item" required>
                    <option value="i5 Gen">i5 Gen</option>
                    <option value="i7 Gen">i7 Gen</option>
                    <option value="i12 Gen">i12 Gen</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="size" name="size" placeholder="Screen Size" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="resolution" name="resolution" placeholder="Resolution" required>
            </div>
            <div class="form-group">
                <label for="color">Select color</label>
                <select name="color" id="color" class="form-control item" required>
                    <option value="dark">Dark</option>
                    <option value="grey">Grey</option>
                    <option value="white">White</option>
                </select>
            </div>
            <div class="form-group">
                <label for="file">Upload image</label>
                <input type="file" class="form-control item" id="img" name="img" required>
            </div>
            <div class="form-group">
                <label for="price">Price per day</label>
                <input type="number" class="form-control item" id="price" name="price" placeholder="Please fill number only" name="price" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-info submit">Submit Data</button>
            </div>
            <div class="form-group">
                <a href="ProductManage.php">
                    <button type="button" class="btn btn-warning back">Back</button>
                </a>
            </div>
        </form>
    </div>
</body>
<script src="../admin/js/validate.js"></script>

</html>