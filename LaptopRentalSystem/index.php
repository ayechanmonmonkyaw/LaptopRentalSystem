<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Tech||Rental Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../AyeChanMon_201527_Code/css/index.css">
    <link rel="stylesheet" href="../AyeChanMon_201527_Code/css/main.css">
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

    <section class="home">
        <div class="home-content">
            <h1>Rental Laptop/Desktop Website</h1>
            <h3>Customer First!</h3>
            <p>
                Welcome to QuickRent Laptops! Rent top-quality laptops with flexible plans,
                affordable rates, and hassle-free booking. Enjoy fast delivery and 24/7 support.
                Browse our selection and rent today!
            </p>
        </div>
        <div class="home-img">
            <div class="rhombus">
                <img src="images/lap1.png" alt="">
            </div>
        </div>
        <div class="rhombus2">
        </div>

    </section>
    <div class="brand pl-3 mb-2">
        <h1>Most Popular Brand</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="images/dell.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="images/hpp1.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="images/acer.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="images/asus.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="row">
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

</body>

</html>