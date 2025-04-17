<?php

include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

	<title>Register Form </title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input_box">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
				<i class="uil uil-user"></i>
			</div>
			<div class="input_box">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				<i class="uil uil-envelope-alt email"></i>
			</div>
			<div class="input_box">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				<i class="uil uil-lock password"></i>
			</div>
            <div class="input_box">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
				<i class="uil uil-lock password"></i>
			</div>
			<div class="input_box">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a class="highlight" href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>