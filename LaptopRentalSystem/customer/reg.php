<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Tech||Customer registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="../css/customerReg.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4 bg-info bg-opacity-10 rounded p-4 shadow">
                <div class="heading justify-content-center mb-2">
                    <h1>Sign Up</h1>
                </div>
                <p>Do you have an account? Please <a href="login.php">Log in</a></p>
                <form action="reg.php" method="post">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <div class="input-group-addons">
                                <i class="bi bi-person-circle icon"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="fn" placeholder="First Name" required> <br>
                        <input type="text" class="form-control" name="ln" placeholder="Last Name" required>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <div class="input-group-addons">
                                <i class="bi bi-house-fill icon"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="add" placeholder="Address" required>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <div class="input-group-addons">
                                <i class="bi bi-telephone-fill icon"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="ph" placeholder="Contact No" required>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <div class="input-group-addons">
                                <i class="bi bi-envelope-fill icon"></i>
                            </div>
                        </div>
                        <input type="email" class="form-control" name="em" placeholder="E-mail" required>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <div class="input-group-addons">
                                <i class="bi bi-file-lock-fill icon"></i>
                            </div>
                        </div>
                        <input type="password" class="form-control" name="pw" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-success:hover w-100" name="reg">Sign Up</button><br><br>
                    <button type="reset" class="btn btn-outline-danger btn-danger:hover w-100" name="reset">Reset</button>

                </form>
            </div>
        </div>
    </div>
    <?php
    include "../includes/config.php";
    if (isset($_POST['reg'])) {
        $f = $_POST['fn'];
        $l = $_POST['ln'];
        $a = $_POST['add'];
        $ph = $_POST['ph'];
        $e = $_POST['em'];
        $pw = $_POST['pw'];

        $insert = "INSERT INTO `customer`(`fname`, `lname`, `address`, `phone`, `cemail`, `cpassword`) VALUES ('$f','$l','$a','$ph','$e','$pw')";
        $data = mysqli_query($con, $insert);
        if ($data === TRUE) {
            echo "<script>
            window.alert('Register Successful. Click OK to log in.');
            window.location='login.php';
            </script>";
        } else {
            echo 'Registeration failed! Try again';
        }
    }
    ?>

</body>

</html>