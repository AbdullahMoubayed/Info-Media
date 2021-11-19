<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Authors" content="Abdullah & David">
    <link rel="stylesheet" href="css/style.css">
    <title>Info-Media Website</title>
</head>
<!-- #app för att vi använder Vu.ja -->

<body class="app">
    <?php require("php/header.php") ?>

    <div class="our-body">
        <!-- The hero section -->
        <section id="hero" class="flex j-center purple-1">
            <span>
                <h1 class="t_center">Info-Media</h1>
                <p><i>Gör dina digitala idéer verkliga</i></p>
                <div class="btns">
                    <a href="las-mer.php"><button class="btn white_t t_center" type="button">Öppet
                            hus</button></a>
                    <a href="#studieplan"><button class="btn purple_t t_center" type="button">Studieplan</button></a>
                </div>
            </span>
            <span class="imgg"><img class="imgg" src="assets/img/hero.png" alt="Computah"></span>
        </section>

        <!-- The contacting floated circle -->
        <a href="#contact"><button class="contact-cr"><img src="assets/img/contact.svg" alt=""></button></a>

        <!-- "Om"-sektionen -->
        <section id="om">
            <span>
                <h1 class='after'>Om <br> Info-Media</h1>
                <p class="text">Info-Media ger dig kunskaper om digital teknik. För dig som har intresset kring
                    datorteknik,
                    programmering, webbutveckling, 3D-modellering… så passar denna inriktning dig väldigt bra!</p>

                <div class="om-btns m_auto t_center">
                    <a href="las-mer.php"><input class="btn purple_t" type="button" value="Läs mer"></a>
                    <a href="las-mer.php"><input class="btn purple_t" type="button"
                            value="Elev för en dag"></a>
                </div>
            </span>
            <img id="pic1" src="assets/img/code.jpg" alt="computar nerd">
            <img id="pic2" src="assets/img/VR.jpg" alt="vr nerd">
            <img id="pic3" src="assets/img/code-table.png" alt="vr nerd">
        </section>

        <!-- "Vad vi gör"-sektionen -->
        <section id="gor" class='round'>
            <span class="span-cont">
                <span>
                    <h1 class='after'>Vad vi gör</h1>
                    <p class='after'>Här får du möjlighet till att utveckla och framställa dina digitala idéer.</p>
                    <p class='after'>Alltifrån 3D-modellering av spel till programmering av hemsidor.</p>
                    <p>Dina kunskaper utmanas ständigt som stärker din kunskap kring området.</p>
                    <a href="las-mer.php"><input class="btn purple_t" type="button" value="Läs mer"></a>
                </span>
                <img id='vr-img' src="assets/img/vvrr.png" alt="VR">
            </span>

            <!-- The grid of the languages that we are going to learn. From JS -->
            <h3>Följande språk kommer du stöta på:</h3>
            <div class="språk-grid-container flex">
                <div class="språk-item" v-for="item in språk">
                    <img :src="item.url" alt="språk">
                    <p>{{ item.title }}</p>
                </div>
            </div>

        </section>

        <!-- We love Ankor! -->
        <!-- "Varför Info-Media"-sektionen -->
        <section id="varfor">
            <img id='blender' src="assets/img/p-414-kt8658-kt-1-l.png" alt="blender">
            <span>
                <h1 class='after'>Varför <br> Info-Media?</h1>
                <p>I denna inriktning får du många framtida möjligheter till jobb inom datorteknik, eftersom jobb inom
                    datorteknik är väldigt efterfrågat i samhället.</p>
                <div id="v-div" class="m_auto t_center"><a href="las-mer.php"><input class="btn purple_t" type="button" value="Läs mer"></a></div>
            </span>
            <div class='v-wrapper'><img id="v-img-1" src="assets/img/blalba.png" alt="Blender example"></div>
            <div class='v-wrapper'><img id="v-img-2" src="assets/img/codak.jpg" alt=""></div>
        </section>

        <!-- Kursstruktur-sektionen -->
        <section id='Kursstruktur' class='round'>
            <h1 class='after'>Kursstruktur</h1>
            <p class='after'>Info-Media är uppdelat i två spår: Ingenjör- och teknikerspåret. Olika kurser läggs till
                beroende på vilket spår du väljer.</p>
            <p>Oberoende på vilket spår du väljer kommer du läsa kurserna: Webbserverprogrammering 1, Webbutveckling 1,
                Programmering 1, Dator- och nätverksteknik 1 & Digitalt skapande 1.</p>
            <a href="las-mer.php"><input class="btn purple_t" type="button" value="Studieplan"></a>
        </section>
        <!--"Studieplan" section-->
        <section id="studieplan" class='poang-plan'>
            <h3>Studieplan</h3>
            <ul>
                <li>Inriktningar</li>
                <div>
                    <li class="ak2">Åk 2</li>
                    <li>Åk 3</li>
                </div>
            </ul>
            <div class='div'>
                <span>Dator- och nätverksteknik</span>
                <span>100p</span>
            </div>
            <div class='div'>
                <span>Programmering 1</span>
                <span>100p</span>
            </div>
            <div class='div'>
                <span>Webbutveckling 1</span>
                <span class="ak2p">100p</span>
            </div>
            <ul>
                <li>Programfördjupningar</li>
                <div>
                    <li class="ak2">Åk 2</li>
                    <li>Åk 3</li>
                </div>
            </ul>
            <div class='div'>
                <span>Digitalt skapande 1 *</span>
                <span>100p</span>
            </div>
            <div class='div'>
                <span>Webbserver-<br>programmering 1 *</span>
                <span class="ak2p">100p</span>
            </div>
            <ul>
                <li>Tilläggskurser för <br>Teknikerspåret</li>
                <div>
                    <li class="ak2">Åk 2</li>
                    <li>Åk 3</li>
                </div>
            </ul>
            <div class='div'>
                <span>Gränssnittsdesign</span>
                <span class="ak2p">100p</span>
            </div>
            <div class='div'>
                <span>Teknik - specialisering 1</span>
                <span>100p</span>
            </div>
            <ul>
                <li>Tilläggskurser för<br> Ingenjörspåret</li>
                <div>
                    <li class="ak2">Åk 2</li>
                    <li>Åk 3</li>
                </div>
            </ul>
            <div class='div'>
                <span>Fysik 2</span>
                <span class="ak2p">100p</span>
            </div>
            <div class='div'>
                <span>Matematik 4 </span>
                <span>100p</span>
            </div>
            <div class="NIU">
                <p><i>*Ingår ej i ordinarie studieplan för NIU eller RIG-elever</i></p>
            </div>
        </section>

        <!-- Ankor är bäst -->
        <!--"Konatakt" section-->
        <section id="contact">
            <div class="cperson">
                <h3>Rektor för teknikprogrammet</h3>
                <div>
                    <img src="assets/img/katrin.jpg" alt="Bild på Karin">
                    <span>
                        <h5>Katrin Pedersen</h5>
                        <p>0582-353 83</p>
                        <a href="mailto:katrin.pedersen@alleskolan.eu">Kontakta via mail</a>
                    </span>
                </div>
            </div>

            <div id="rtlperson" class="cperson">
                <h3>Programledare</h3>
                <div>
                    <img src="assets/img/Anette-Bengtsson-1.jpg" alt="Bild på Anette">
                    <span>
                        <h5>Anette Bengtsson</h5>
                        <p>0582-353 11</p>
                        <a href="mailto:anette.bengtsson@alleskolan.eu">Kontakta via mail</a>
                    </span>

                </div>
            </div>

            <div class="cperson">
                <h3>Studie- och yrkesvägledare</h3>
                <div>
                    <img src="assets/img/Anna-Winck.jpg" alt="Bild på Karin">
                    <span>
                        <h5>Anna Winck</h5>
                        <p>0582-355 67</p>
                        <a href="mailto:anna.winck@alleskolan.eu">Kontakta via mail</a>
                    </span>
                </div>
            </div>
        </section>

        <!-- Ankor are number one! -->

        <!-- "Ord från tidigare elever"-sektionen -->
        <section id='ord' class="flex j_center">
            <h1 class="t_center">Ord från <br> tidigare elever</h1>
            <div class=" flex">
                <img id="ett" src="assets/img/elev-Lucas-Wass.jpg" alt="">
                <div>
                    <p class="sub">"Skolan har fantastiska och engagerade lärare som har hjälpt mig att utvecklas och
                        skapa
                        ett djupare intresse
                        inom matematik, fysik, CAD, bildredigering och programmering; ämnen jag använder mig av varje
                        dag
                        som
                        apputvecklare."</p>
                    <p class="name">Lukas Wass</p>
                    <p class="work">Apputvecklare på byBrick Elevate</p>
                </div>
            </div>

            <div>
                <img id="two" src="assets/img/elev-Emil-Ivarsson.jpg" alt="">
                <div>
                    <p class="sub">"Det absolut viktigaste med att gå på teknik är att du får med dig massor av kunskap
                        för
                        framtiden och får
                        viktiga kurser för att kunna ha många valmöjligheter att välja den universitetsutbildning du
                        vill gå
                        i
                        framtiden."</p>
                    <p class="name">Emil Ivarsson</p>
                    <p class="work">Studerar vid Polishögskolan i Stockholm</p>
                </div>
            </div>
        </section>
        <!--Video from alleskolan.eu about Info-Media-->
        <iframe src="https://www.youtube.com/embed/KXIs7-MX9Zc" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>

        <div class="card">
            <p id="datum">Datum för kommande öppet hus:</p>
            <br>
            <img src="../assets/icon/calendar.svg" alt="KALÄNDEJ">
            <p>25/01-2022</p>
            <p>(25:e Januari 2022)</p>
            <div class="tid">
                <img src="../assets/icon/clock.svg" alt="KLÖCKA">
                <p>17:30 - 20:00</p>
            </div>

        </div>

    </div>
    <!-- The footer section -->
    
    <?php require("php/footer.php") ?>
    <!--Linking/fetching JS-script for some great functions-->
    <script src="https://unpkg.com/vue@3.0.0"></script>
    <script src="js/app.js"></script>
</body>

</html>