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
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body id="body-home">
    <header >
        <?php include_once "./components/header.php" ?>
</header>

    <main>
        <?php include_once "./components/main.php" ?>
</main>

    <footer>
        <?php include_once "./components/footer.php" ?>

</footer>

    <script src="script.js"></script>
</body>
</html>