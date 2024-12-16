<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Tech||Customer registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="../css/customerLogin.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4 rounded p-4 shadow bg-success bg-gradient bg-opacity-10">
                <div class="heading justify-content-center mb-2">
                    <h1>Log In</h1>
                </div>
                <p>Don't you have an account? Please <a href="reg.php">Sign Up</a></p>
                <form name="fm" action="loginattempt.php" onsubmit="return validation()" method="post">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <div class="input-group-addons">
                                <i class="bi bi-envelope-fill icon"></i>
                            </div>
                        </div>
                        <input type="email" class="form-control" name="cusemail" placeholder="E-mail" autofocus="autofocus">
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <div class="input-group-addons">
                                <i class="bi bi-file-lock-fill icon"></i>
                            </div>
                        </div>
                        <input type="password" class="form-control" name="cuspassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-success:hover w-100" name="LOGIN">Log In</button><br><br>
                    <button type="reset" class="btn btn-outline-danger btn-danger:hover w-100" name="reset">Reset</button>

                </form>
            </div>
        </div>
    </div>
    <script>
        function validation() {
            var em = document.fm.cusemail.value;
            var pw = document.fm.cuspassword.value;
            if (em.length == "" && pw.length == "") {
                alert("Please fill Email & Password!");
                return false;
            } else {
                if (em.length == "") {
                    alert("Email is empty");
                    return false;
                }
                if (pw.length == "") {
                    alert("Password is empty");
                    return false;
                }
            }
        }
    </script>

</body>

</html>