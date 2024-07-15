<section id="header-homepage" class="header">
    <!-- <section id="main-components"> -->
        <!-- logo here -->
    <section id="header-logo">
        ARI
    </section>

    <!-- search container -->
    <section  id="search-container" onmouseover="showPopup()" onmouseout="hidePopup()">

        <form id="search-components" action="/search-results.php" method="post"  onsubmit="return saveSearchQuery()">
            <input class="search" id="search-field" type="text" name="search" placeholder="Search">
            <input class="search" id="search-btn" type="submit" name="submit" value="Go">
        </form>

        <section id="popup" class="popup" onmouseover="keepPopupOpen()" onmouseout="closePopup()">

            <section class="popup-content" id="first">
                <a href="./cv/lebenslauf.php">
                    <img src="/components/image1.png" alt="Image 1" style="height: 60px;">
                </a>
            </section>
            <section class="popup-content" id="second">
                <a href="https://kleinhaendler.ch/" target="_blank">
                    <img src="/components/image2.png" alt="Image 2" style="height: 60px;">
                </a>
            </section>
            <section class="popup-content" id="third">
                <a href="https://youtube.com/@khusrawz?si=Kt37uGggQItjVPMS" target="_blank">
                    <img src="/components/image3.png" alt="Image 3" style="height: 60px;">
                </a>
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
