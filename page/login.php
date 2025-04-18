<?php
include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location: Home.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: Home.php");
  } else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistem Penunjang Keputusan</title>
  <link rel="stylesheet" href="../css/Login.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <!-- Header -->
  <header class="header">
    <nav class="nav">
      <a class="nav_logo">Sistem Penunjang Keputusan</a>
      <button class="button" id="form-open">Login</button>
    </nav>
  </header>

  <!-- Home -->
  <section class="home">
    <div class="form_container">
      <i class="uil uil-times form_close"></i>
      <!-- Login Form -->
      <div class="form login_form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <h2>Login</h2>
          <div class="input_box">
            <input type="email" name="email" placeholder="Enter your email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" name="password" placeholder="Enter your password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <button class="button" name="submit">Login Now</button>
          <p class="login-register-text">Don't have an account? <a class="highlight" href="register.php">Register Here</a>.</p>
        </form>
      </div>
    </div>
  </section>
  <sec class="body0">
    
    <div class="image">
      <img src="../Asset/img/logo-unindra2-removebg-preview.png" alt="UNINDRA Logo" class="logo-body">
    </div>
    <p> Selamat datang di sistem penunjang keputusan pemilihan graphic card dengan metode forward chaining</p>
  </section>
  <script src="../javascript/login.js"></script>
</body>

</html>