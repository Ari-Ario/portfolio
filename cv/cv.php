
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-lebenslauf.css">
    <link rel="stylesheet" href="../styles.css">
    <title>Lebenslauf</title>
</head>
<body>
    <?php include dirname(__DIR__) . "/components/header.php"; ?>
    <main id="lebenslauf">
        <section id="cv-container">
            <section id="header">Curriculum Vitae</section>
            <nav id="nav">
                <ul>
                    <li class="li" id="exp-li"><a href="#experience">Experience</a></li>
                    <li class="li"><a href="#years1">Studies</a></li>
                    <li class="li"><a href="#languages">Lagusages</a></li>
                    <li class="li"><a href="#kenntnisse">ICT-knowledge</a></li>
                    <li class="li" id="act-li"><a href="#act">Hobbies</a></li>
                </ul>
            </nav>
            <hr>
            <section id="img" class="sections img"><img id="img" src="/images/ari.png"></section>
            <section id="personal" class="sections">
                <p>Mostafanejad Ismail
                    <br>Buchzelgweg 4, 8053 Zürich
                    <br>+41 76 216 65 57
                    <br>xusrew.z@gmail.com
                    <br>Geburtsdatum: 21.09.1984
                    <br>Aufenthaltsbewilligung: B</p>
                    <p>Portfolio: <a href="http://mostafanejad.ch/" target="_blank"><strong>mostafanejad.ch</strong></a></p>
            </section>
            <section id="experience" class="sections">
                <h2>Experience</h2>
            </section>
            <section id="empty" class="sections"></section>
            <section id="years" class="sections">
                <h4 class="years">2023-2024</h4>
                <h4 class="years"style="padding-top: 15px;">2021-2022</h4>
                <h4 class="years" style="padding-top: 140px;">2016-2017</h4>
                <h4 class="years" style="padding-top: 20px;">2013 und 2015</h4>
                <h4 class="years">2014</h4>
                <h4 class="years" style="padding-top: 20px;">2010-2012</h4>
                <h4 class="years">2008-2010</h4>
                <h4 class="years">2008</h4>
                <h4 class="years">2004-2007</h4>
            </section>
            <section id="jobs" class="sections">
                <p><strong>E-commerce Web-Application: </strong>
                <br>- <a href="https://kleinhaendler.ch/" target="_blank" rel="noopener noreferrer">kleinhaendler.ch</a>
                <br>
                <!-- - <a href="https://kleinhaendler.ch/" target="_blank" rel="noopener noreferrer">kleinhaendler.ch</a> -->
                </p>

                <p style="padding-top: 0;"><strong>1st and 2nd Level Support</strong>
                    <br>Zürcher Hochschule für angewandte Wissenschaften
                    <br>- Incidents
                    <br>- Instalations
                    <br>- Workplaces
                    <br>- Reparations</p>
                <p><strong>+Application-, Web-development:</strong> link on
                <a href="https://github.com/Ari-Ario?tab=repositories">Github</a></p>
                <p style="padding-top: 10px;"><strong>Journalist and Film-maker</strong>, 
                    <br> Surprisemagazin, SRF, etc. link on <a href="https://www.srf.ch/kultur/gesellschaft-religion/gesellschaft-religion-ein-tag-der-sprachen-reportage-vom-kulturplatz-dreh">SRF</a> /
                    <a href="https://www.swissfilms.ch/de/person/ismail-mostafanejad/76C265AFDC9544428C2C91D0F558A780">Swiss Films</a></p>

                <p style="padding-top: 10px;"><strong>English teacher</strong> (Freelance), ASZ, Zürich and Greece</p>
                <p style="padding-top: 10px;"><strong>Traslating a book from english to persian</strong>
                <br>"Natural remedies for health and well-being"</p>
                <p><strong>Freelance Journalist and Blogger, </strong> Iran, Tehran</p>
                <p style="padding-top: 10px;"><strong>English and math teacher</strong>, Iran, Tehran</p>
                <p style="padding-top: 10px;"><strong>Hawalati Newspaper, Iraq, Sulaimani</strong>, Teilzeit </p>
                <p><strong>Translator</strong> (part-time)
                <br> <i>Kurdish-Arabic-English-Persian</i></p>
            </section>
            <section id="years1" class="sections">
                <h3 style="padding-left: 20px; text-align: center;">Studies</h3>
                <h4 class="years">2023-2024</h4>
                <h4 class="years">2017-2020</h4>
                <h4 class="years">2016</h4>
                <h4 class="years">2010-2012</h4>
                <h4 class="years">2004-2008</h4>
                <h4 class="years">2005 und 2006</h4>
            </section>
            <section id="bildung" class="sections bildung">
                <p><strong>Web Development</strong>, Opportunity, Zürich</p>
                <p><strong>HF Diplom in Film</strong>, F und F Schule für Kunst und Design, Zürich</p>
                <p><strong>Postgraduate</strong>, ETHZ</p>
                <p><strong>Postgraduate of Media</strong>, Independent Media Center of Kurdistan</p>
                <p><strong>Bachelor of Informatik</strong>, Mathematics and Computer Department, Kurdistan</p>
                <p><strong>Media course</strong>,  Sommer breaks, Kurdistan</p>
            </section>
            <section id="languages" class="sections">
                <h3 style="padding-left: 20px; text-align: center;">Sprach Kenntnisse</h3>
                <h4 class="language">German</h4>
                <h4 class="language">Kurdish/Persian</h4>
                <h4 class="language">English</h4>
                <h4 class="language">Arabic</h4>
                <h4 class="language">Greek</h4>

            </section>
            <section id="kenn" class="sections">
                <p class="languagePro">Goethe Zertifikat C1</p>
                <p class="languagePro">Mother language</p>
                <p class="languagePro">Very good, C1</p>
                <p class="languagePro">good, B2</p>
                <p class="languagePro">A2</p>
            </section>
            <section id="kenntnisse" class="sections">
                <h3 style="padding-left: 20px; text-align: center;">Programming knowledge</h3>
            </section>
            <section id="adj" class="sections">
            <div id="bars" data-animation="slide-in-right">

                            <div class="bar grid-bar">
                            <div class="bar-fill" style="width:100%">
                                <div class="tag bold grid-bar">Laravel</div>
                            </div>
                            </div>

                            <div class="bar grid-bar">
                            <div class="bar-fill" style="width:100%">
                                <div class="tag bold grid-bar">Vue Js</div>
                            </div>
                            </div>

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
                            <div class="bar-fill" style="width:70%">
                                <div class="tag bold grid-bar">design</div>
                            </div>
                            </div>
                        </div>
            </section>
            <section id="act" class="sections">
                <h3 style="padding-left: 20px; text-align: center;">Hobbies</h3>
                <h4 class="LesenSport">Reading</h4>
                <h4 class="LesenSport">Sport</h4>
            </section>
            <section id="actInfo" class="sections">
                <p>Sicence, Programming, and Economy</p>
                <p>Jogging, Walking</p>
            </section>
            <section id="ref" class="sections">
                <h3 style="padding-right: 20px;">References</h3>
            </section>
            <section id="refInfo" class="sections">
                <p>Ask me</p>
            </section>
            <hr>
            <footer id="footer-lebenslauf">&copy; 2024</footer>
    </section>
    </main>

    <script src="../script.js"></script>
    <?php include dirname(__DIR__) . "/components/footer.php"; ?>
</body>
</html>