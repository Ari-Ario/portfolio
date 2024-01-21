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

<body>
    <section >
        <?php include_once "./components/header.php" ?>
    </section>

    <section>
        <?php include_once "./components/about.php" ?>

    </section>

    <section>
        <?php include_once "./components/footer.php" ?>

    </section>

    <script src="script.js"></script>
</body>
</html>