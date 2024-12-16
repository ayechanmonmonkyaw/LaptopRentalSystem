<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Tech||Admin LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="../css/adminLogin.css" rel="stylesheet">
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/972ffd0a78.js" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4 bg-light rounded p-4 shadow">
            <div class="heading justify-content-center mb-2">
               <h1>Admin</h1>
            </div>
            <form action="login.php" method="post">
                <div class="form-group mb-4">
                    <div class="input-group">
                        <div class="input-group-addons">
                        <i class="bi bi-person-circle icon"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="aname" placeholder="Username" required>
                </div>
                <div class="form-group mb-4">
                    <div class="input-group">
                        <div class="input-group-addons">
                        <i class="bi bi-file-lock-fill icon"></i>
                        </div>
                    </div>
                    <input type="password" class="form-control" name="apassword" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-outline-success btn-success:hover w-100" name="logIn">Log In</button><br><br>
                <button type="reset" class="btn btn-outline-danger btn-danger:hover w-100" name="reset">Reset</button>
            </form>
        </div>
      </div>
    </div>

<?php
   if (isset($_POST['logIn'])) 
   {
       $a_user=$_POST['aname'];
       $Pw=$_POST['apassword'];
   
       if ($a_user=="admin" && $Pw =="12345") 
       {
       
           // ------------------------------------------
           echo "<script>
           window.alert('Login Successful. Click OK to go dashboard page.');
           window.location='dashboard.php';
           </script>";
   
   
       }
   
        else 
       {
           
           echo "<script>
           window.alert('Invalid username or password');
           window.location='login.php';
           </script>";
   
       }
   }
   
   ?>

</body>
</html>