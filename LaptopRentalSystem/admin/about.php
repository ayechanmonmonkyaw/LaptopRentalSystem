<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>About Company</title>
</head>

<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="bg-secondary bg-gradient">
                    <h3>About Us</h3>
                </th>
                <th><a class="btn btn-primary" href="dashboard.php">Back</a></th>
            </tr>
            <tr>
                <th>About</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../includes/config.php";

            $sql = "SELECT * FROM `Blog`";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row['about']; ?></td>
                        <td><a class="btn btn-success" href="editabout.php?id=<?php echo $row['Blog_id']; ?>">Edit</a>
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