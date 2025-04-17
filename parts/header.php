<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <?php
            $path_parts = pathinfo($_SERVER['PHP_SELF']);
            echo "<span>" . ucfirst($path_parts['filename']) . "</span>";
            ?>
        </nav>
        <div class="batas">
        <img src="/Asset/img/bg1.png" class="batas1" alt="">
    </div>
    </header>
</body>

</html>