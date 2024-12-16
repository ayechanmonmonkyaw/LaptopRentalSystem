<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management</title>
    <!-- bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/972ffd0a78.js" crossorigin="anonymous"></script>
    <!--icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--dashboard css link-->
    <link href="../css/dashboard.css" rel="stylesheet">
    <!--laptop css link-->
    <link href="../css/laptopManage.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">
                        <h5 class="h-logo">A-Tech</h5>
                        <h6>Laptop Rental House</h6>
                    </a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <i class="fa-solid fa-list"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="productManage.php" class="sidebar-link" aria-expanded="false"><i class="fa-solid fa-laptop"></i>
                            Product Management
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#customer" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-user"></i>
                            Customer
                        </a>
                        <ul id="customer" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="customerManage.php" class="sidebar-link">Manage Customer</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="customerFeedback.php" class="sidebar-link">Customer Feedback</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="rentaldetail.php" class="sidebar-link" aria-expanded="false"><i class="fa-solid fa-list"></i>
                            Rental Detail
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="companyinfo.php" class="sidebar-link collapsed">
                            <i class="fa-solid fa-circle-info"></i>
                            Company Information </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="about.php" class="sidebar-link collapsed">
                            <i class="fa-solid fa-building"></i>
                            About us </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="../images/adminprofile.jpeg" class="avatar img-fluid rounded" alt="">
                                <p>Admin</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="login.php" class="dropdown-item">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Customer Management</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="../images/adminprofile.jpeg" class="img-fluid illustration-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- customer manage -->
                <div class="content">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="7">
                                    <h5>Edit Page</h5>
                                </th>
                                <th colspan="2"><a class="btn btn-success" href="insertCustomer.php">New Customer</a></th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../includes/config.php";

                            $sql = "SELECT * FROM `customer`";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['cemail']; ?></td>
                                        <td><?php echo $row['cpassword']; ?></td>
                                        <td><a class="btn btn-info" href="editCustomer.php?id=<?php echo $row['id']; ?>">Edit</a>
                                            &nbsp;
                                        </td>
                                        <td><a class="btn btn-danger" href="deleteCustomer.php?id=<?php echo $row['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                            <?php       }
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../admin/js/dashboard.js"></script>