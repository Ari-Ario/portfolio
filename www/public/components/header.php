<section id="header-homepage" class="header">
    <!-- <section id="main-components"> -->
        <!-- logo here -->
    <section id="header-logo">
        ARI
    </section>

    <!-- search container -->
    <section  id="search-container" onmouseover="showPopup()" onmouseout="hidePopup()">
        <form id="search-components" action="" method="get">
            <input class="search" id="search-field" type="text" name="search" placeholder="Search">
            <input class="search" id="search-btn" type="button" name="search" value="Go">
        </form>
        <section id="popup" class="popup" onmouseover="keepPopupOpen()" onmouseout="closePopup()">
            <section class="popup-content">
                first
            </section>
            <section class="popup-content">
                second
            </section>
            <section class="popup-content">
                third
            </section>
        </section>
    </section>
    
    <!-- navigator section -->
    <section id="cv-navigation" onmouseover="showPopupCV()" onmouseout="hidePopupCV()">
        CV
        <section id="cv" class="cv">
        <section id="CVpopup" class="CVpopup" onmouseover="keepCVPopupOpen()" onmouseout="closeCVPopup()">
            <section class="cv-content" id="cv-en">
                <a class="cv-link" href="/cv/cv.php">En</a>
            </section>
            <section class="cv-content" id="lebenslauf-de">
                <a class="cv-link"  href="/cv/lebenslauf.php">De</a>
            </section>
        </section>
        </section>
    </section>

</section>