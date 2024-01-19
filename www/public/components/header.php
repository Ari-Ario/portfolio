<section id="header-homepage" class="header">
    <!-- <section id="main-components"> -->
        <!-- logo here -->
    <section id="header-logo">
        LOGO
    </section>

    <!-- search container -->
    <section  class="search-components" placeholder="CV" onmouseover="showPopup()" onmouseout="hidePopup()">
        <form id="search-components" action="" method="get">
            <label class="search" id="search"  for="search-field">Search</label>
            <input class="search" id="search-field" type="text" name="search">
            <input class="search" id="search-btn" type="button" name="search" value="Go">
        </form>
        <?php include_once "search-popup.php" ?>
    </section>
    
    <!-- navigator section -->
    <section id="header-navigation">
        <a class="navigation" href="/index.php">Home</a>
        <a class="navigation" href="/">work</a>
        <a class="navigation" href="/">about</a>
        <a class="navigation">Contact</a>
    </section>

    <!-- Responsive Home icon for cell-phone, smaller screens etc -->
    <section id="home-navigation">
        HH
    </section>

</section>