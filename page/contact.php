<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css" />
</head>

<body>
    <div class="sidebar"><?php include '../parts/sidebar.php'; ?></div>
    <div class="atas"><?php include '../parts/header.php'; ?></div>
    <nav class="konten">
        <div class="sub-title">
            <h2>Find me on</h2>
            <div class="isi-konten">
                <div class="teknologi">
                    <a href="https://github.com/HainsLab" target="_blank">
                        <div class="box-github">
                            <img src="/Asset/Icon/GitHub-icon-c.png" class="logo-github" alt="GitHub">
                            <p class="text-logo">Github</p>
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/in/muhammad-ihsan-911865205" target="_blank">
                        <div class="box-linkedin">
                            <img src="/Asset/Icon/LinkedIn-icon-c.png" class="logo-scss" alt="LinkedIn">
                            <p class="text-logo">Linkedin</p>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/muhammd.ihsan_/" target="_blank">
                        <div class="box-instagram">
                            <img src="/Asset/Icon/Instagram-icon-c.png" class="logo-instagram" alt="Instagram">
                            <p class="text-logo">Instagram</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="border">
            <img src="/Asset/img/bg1.png" class="batas" alt="">
        </div>
    </nav>
    <div class="atas"><?php include '../parts/footer.php'; ?></div>
</body>

</html>