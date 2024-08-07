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
    <title>ARI</title>
    <link rel="stylesheet" href="dist/style.css">
    <script src="script.js"></script>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body id="body-home">
    <header >
        <?php include_once "./components/header.php" ?>
</header>

    <main id="main">
        <div class="apps" style="text-align: center;">
            <p>E-commerce Web Application: <strong><a href="https://kleinhaendler.ch/" target="_blank" rel="noopener noreferrer">kleinhaendler.ch</a></strong></p>
        </div>
        <section id="main-content">
            <div class="dm-width">
                <div class="dm-device1">
                    <div class="device1">
                    <div id="image-container-iphone" class="container">
<!--                         <img class="animated" src="image4.png" alt="Image 4">
                        <img class="animated" src="image3.png" alt="Image 3"> -->
                        <img class="animated" src="image2.png" alt="Image 2">
                        <img class="animated" src="image1.png" alt="Image 1">
                        <img id="last-img" class="animated" src="image3.png" alt="Image 3">
                        <button class="popup-button-phone" onclick="redirectToForm()">Form demo</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="dm-width2">
                <div class="dm-device2">
                    <div class="device2">
                    <div id="image-container-macbook" class="container">
                        <img id="macbook-images" src="screenshot1.png" alt="Image 1" onmouseover="stopAutoChange()" onmouseout="startAutoChange()">
                        <button class="popup-button-laptop" onclick="redirectToQuiz()">Quiz demo</button>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include_once "./components/footer.php" ?>

</footer>

    <script src="script.js"></script>
    <script src="dist/bundle.js"></script>

</body>
</html>