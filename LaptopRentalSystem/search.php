<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../AyeChanMon_201527_Code/css/LaptopList.css">
    <link rel="stylesheet" href="../AyeChanMon_201527_Code/css/main.css">
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
                                            <button class="btn" name="BtnSearch"><i class="bi bi-search"></i></button>
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
    <div class="container-fluid">
        <?php
        include "../AyeChanMon_201527_Code/includes/config.php";
        if (isset($_POST['BtnSearch'])) {
            $search = $_POST['search'];

            $sql = "SELECT * FROM Product WHERE P_id like '%$search%' or P_name like '%$search%' ";
            $result = mysqli_query($con, $sql);

            if ($result) {
        ?>
                <section class="row mt-5">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="card col-sm-12 col-md-6 col-lg-3">
                                <div class="image">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["P_img"]); ?>" style="max-width:150px" alt="">
                                </div>
                                <div class="card-title">

                                    <table class="card-text table table-striped">
                                        <thead>
                                            <th colspan="2">
                                                <h4><?php echo $row["P_name"]; ?></h4>
                                            </th>
                                            <th colspan="2">
                                                <h6><?php echo $row["P_price"]; ?>MMK</h6>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ram</td>
                                                <td><?php echo $row["P_ram"]; ?></td>
                                                <td>Storage</td>
                                                <td><?php echo $row["P_storage"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>CPU</td>
                                                <td><?php echo $row["P_cpu"]; ?></td>
                                                <td>Screen Size</td>
                                                <td><?php echo $row["P_size"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Resolution</td>
                                                <td><?php echo $row["P_resolution"]; ?></td>
                                                <td>Color</td>
                                                <td><?php echo $row["P_color"]; ?></td>
                                            </tr>
                                            <?php
                                            echo "<form method='post' action='addToCart.php'>";

                                            echo "<input type='hidden' name='p_id' value='" . $row["P_id"] . "'>";
                                            echo "<p>Quantity: </p>";
                                            echo "<input type='number' name='quantity' value='1' min='1'>";
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    echo "<div class='text-center'><button class='btn btn-warning' type='submit'>Add Cart</button></div> ";
                                    echo "</form>";
                                    ?>
                                </div>

                            </div>

                <?php
                        }
                    }
                } else {
                    echo "0 results";
                }
                ?>
                </section>
            <?php
        }
            ?>
    </div>

</body>

</html>