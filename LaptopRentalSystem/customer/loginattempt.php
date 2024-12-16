<?php
include "../includes/config.php";

if (isset($_SESSION['error'])) {
	$count = $_SESSION['error'];
	if ($count == 3) {
		echo "<script>
					alert('3 Wrong Attempt: Please wait and try again');
					location.assign('loginTimer.php');
				</script>";
	}
}

if (isset($_POST['LOGIN'])) {
	$Email = $_POST['cusemail'];
	$Pw = $_POST['cuspassword'];

	$select = "SELECT * 
			FROM customer
			WHERE cemail='$Email'
			AND cpassword='$Pw'
			";

	echo "$Email";
	$query = mysqli_query($con, $select);
	$count = mysqli_num_rows($query);

	if ($count > 0) {
		$data = mysqli_fetch_array($query);
		$UserID = $data['id'];



		// ------------------------------------------
		echo "<script>
		window.alert('Login Successful. Ckick Ok to return home page');
		window.location='../index.php';
		</script>";
		$_SESSION['id'] = $UserID;
	} else {
		if (isset($_SESSION['error'])) {
			$_SESSION['error']++;
		} else {
			$_SESSION['error'] = 1;
		}
		echo "<script>
		window.alert('Invalid Email or password');
		window.location='login.php';
		</script>";
	}
}
