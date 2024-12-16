<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update laptop</title>
    <!-- bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/972ffd0a78.js" crossorigin="anonymous"></script>
    <!--icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--dashboard css link-->
    <link href="../css/updateLaptop.css" rel="stylesheet">
</head>

<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th colspan="7">
                    <h5>Edit Page</h5>
                </th>
                <th colspan="3"><a class="btn btn-primary" href="productManage.php">Back</a></th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Ram</th>
                <th>Storage</th>
                <th>CPU</th>
                <th>Screen Size</th>
                <th>Resolution</th>
                <th>Color</th>
                <th>Image</th>
                <th>Price per day</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../includes/config.php";

            $sql = "SELECT * FROM `Product`";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row['P_id']; ?></td>
                        <td><?php echo $row['P_name']; ?></td>
                        <td><?php echo $row['Type_id']; ?></td>
                        <td><?php echo $row['P_ram']; ?></td>
                        <td><?php echo $row['P_storage']; ?></td>
                        <td><?php echo $row['P_cpu']; ?></td>
                        <td><?php echo $row['P_size']; ?></td>
                        <td><?php echo $row['P_resolution']; ?></td>
                        <td><?php echo $row['P_color']; ?></td>
                        <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['P_img']); ?>"></td>
                        <td><?php echo $row['P_price']; ?> MMK</td>
                        <td><a class="btn btn-info" href="updateProduct.php?id=<?php echo $row['P_id']; ?>">Edit</a>
                            &nbsp;
                        </td>
                        <td><a class="btn btn-danger" href="deleteProduct.php?id=<?php echo $row['P_id']; ?>">Delete</a>
                            &nbsp;
                        </td>
                    </tr>
            <?php       }
            }
            ?>
        </tbody>
    </table>


</body>

</html>