
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="styles-about.css">
    <title>About</title>
</head>
<body>
<section >
    <?php include dirname(__DIR__) . "/components/header.php"; ?>
</section>

<section id="about-container">

    <div id="img-info">
        <div id="img-sea">
            <img id="sea" src="../images/ari-sea.JPG" alt="sea">
        </div>
        <div id="img-desc">
            <h3>profetional</h3>
            <h3>Analysing</h3>

        </div>
    </div>

    <section id="bar-table">
        <div id="computer-content">
            <h3>Application-,Web Development</h3>
            <div id="bars" data-animation="slide-in-right">
                <div class="bar grid-bar">
                <div class="bar-fill" style="width:100%">
                    <div class="tag bold grid-bar">CSS</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:100%">
                    <div class="tag bold grid-bar">HTML</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:90%">
                    <div class="tag bold grid-bar">SQL</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:90%">
                    <div class="tag bold grid-bar">JavaScript</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:90%">
                    <div class="tag bold grid-bar">Python</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:65%">
                    <div class="tag bold grid-bar">PHP</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:65%">
                    <div class="tag bold grid-bar">Kivy</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:50%">
                    <div class="tag bold grid-bar">C</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:50%">
                    <div class="tag bold grid-bar">Figma</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:50%">
                    <div class="tag bold grid-bar">Illustrator</div>
                </div>
                </div>
            </div>
        </div>

        <div id="arts-content">
            <h3>Arts</h3>
            <div id="bars" data-animation="slide-in-right">
                <div class="bar grid-bar">
                <div class="bar-fill" style="width:90%">
                    <div class="tag bold grid-bar">Film</div>
                </div>
                </div>

                <div class="bar grid-bar">
                <div class="bar-fill" style="width:70%">
                    <div class="tag bold grid-bar">Theater</div>
                </div>
                </div>
            </div>
        </div>
    </section>

</section>
<script src="../script.js"></script>
<section>
<?php include dirname(__DIR__) . "/components/footer.php"; ?>
</section>
</body>
</html>
