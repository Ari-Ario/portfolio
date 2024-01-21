<section id="header-homepage" class="header">
    <!-- <section id="main-components"> -->
        <!-- logo here -->
    <section id="header-logo">
        LOGO
    </section>

    <!-- search container -->
    <section  id="search-container" onmouseover="showPopup()" onmouseout="hidePopup()">
        <form id="search-components" action="" method="get">
            <input class="search" id="search-field" type="text" name="search" placeholder="Search">
            <input class="search" id="search-btn" type="button" name="search" value="Go">
        </form>
        <?php include_once "search-popup.php" ?>
    </section>
    
    <!-- navigator section -->
    <section id="cv-navigation">
        <a href="cv/cv.php" id="cv-link">CV</a>
    </section>


</section>