<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include_once "./components/header.php" ?>

    <?php include_once "./components/main.php" ?>

    <?php include_once "./components/footer.php" ?>

    <script src="script.js"></script>
</body>
</html>