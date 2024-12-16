<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <!-- bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/972ffd0a78.js" crossorigin="anonymous"></script>
    <!--icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--main css link-->
    <link rel="stylesheet" href="../AyeChanMon_201527_Code/css/main.css">
    <!--contact css link-->
    <link href="../AyeChanMon_201527_Code/css/Contact.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#">A-Tech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contactus.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Blog.php">Blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Items</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="LaptopList.php">Laptop</a></li>
                                <li><a class="dropdown-item" href="DesktopList.php">Desktop</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <form action="search.php" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search..." name="search">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                            <button class="btn btn-link" name="BtnSearch"><i class="bi bi-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item">
                            <div class="log cart">
                                <a href="cart.php">My Cart</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="log">
                                <a href="customer/login.php">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="con1 mb-3 mt-5">
        <div class="mb-5"></div><br>
        <div class="mb-5"></div><br>
        <h2>Contact us & Your Feedback</h2>
    </div>
    <div class="container-t">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <div class="con">
                    <h2>Inform Us</h2>
                    <form class="f" name="f1" action="Contactus.php" onsubmit="return validation()" method="post">
                        <input type="text" name="fName" placeholder="First Name" autofocus="autofocus"> <br>
                        <input type="text" name="email" placeholder="Email" required> <br>
                        <textarea cols="25" rows="5" name="msg" placeholder="Text message"></textarea> <br>
                        <input type="submit" class="btn btn-success" name="send" value="Send"> <br><br>
                        <input type="reset" class="btn btn-danger" value="Reset"> <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer">
        <div class="row row1">
            <div class="col-sm-12 col-md-4 col-lg-4 contact">
                <div class="l">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p>Mandalay,Myanmar</p>
                </div>
                <div class="l">
                    <i class="bi bi-telephone-fill"></i>
                    <p>+959444008822</p>
                </div>
                <div class="l">
                    <i class="bi bi-envelope-fill"></i>
                    <p>atech@.com</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 about">
                <p>A-Tech Laptop Rental Website</p>
                <p>Since 2018</p>
                <p>High quality, suitable price Laptop and Desktop</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 social-media">
                <a href="facebook.com">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="instagram.com">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="twitter.com">
                    <i class="bi bi-twitter"></i>
                </a>
            </div>
        </div>
    </footer>
    <div class="cpr">
        <p>2018 copyright: ATech.com</p>
    </div>


    <script>
        function validation() {
            var fn = document.f1.fName.value;
            var em = document.f1.email.value;
            var msg = document.f1.msg.value;
            if (fn.length == "" && em.length == "" && msg.length == "") {
                alert("Please fill First name, email and text");
                return false;
            } else {
                if (fn.length == "") {
                    alert("First name is empty");
                    return false;
                }
                if (em.length == "") {
                    alert("Email is empty");
                    return false;
                }
                if (msg.length == "") {
                    alert("Message is empty");
                    return false;
                }
            }
        }
    </script>
    <?php
    include "../AyeChanMon_201527_Code/includes/config.php";
    if (isset($_POST['send'])) {
        $fName = $_POST['fName'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $insert = "INSERT INTO `msg`(`uFName`, `uEmail`, `uText`) VALUES ('$fName','$email','$msg')";

        $data = mysqli_query($con, $insert);
        if ($data) {
            echo '<script>alert("Thanks for your messagge, Click OK to go back")</script>';
        } else {
            echo 'Message sending failed!';
        }
    }
    ?>

</body>

</html>