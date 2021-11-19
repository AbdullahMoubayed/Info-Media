<header id="start" class="purple-1">
        <nav class="flex i_center">
            <!-- Two icons for closing and opening the menu -->
            <a href="index.php"><img class="logo" src="assets/img/infomedia.svg" alt="Info-Media"></a>
            <i v-show='!isOpen' class="menu-btn flex" :class='{ open: !isOpen }' @click='toggleMenu'>
                <div class="menu-btn_burger"></div>
                <div class="menu-btn_burger"></div>
            </i>
            <!-- The menu itself  -->
            <ul v-show='isOpen' :class='{ activ: isOpen }'>
                <span>
                    <i class="menu-btn flex" :class='{ open: isOpen }' @click='toggleMenu'>
                        <div class="menu-btn_burger"></div>
                        <div class="menu-btn_burger"></div>
                    </i>
                    <li><a href="#om">Om Info-media</a></li>
                    <li><a href="#gor">Vad vi gör</a></li>
                    <li><a href="#varfor">Varför Info-Media</a></li>
                    <li><a href="#struktur">Kursstruktur</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>

                    <div class="i flex">
                        <!--Clickable icons-->
                        <a href="#"><img src='assets/icon/facebook-outline.svg'></a>
                        <a href="#"><img src='assets/icon/instagram.svg'></a>
                        <a href="#"><img src='assets/icon/email-outline.svg'></a>
                        <a href="#"><img src='assets/icon/phone-outline.svg'></a>
                        <a href="#"><img src='assets/icon/pin-outline.svg'></a>
                    </div>
                </span>
            </ul>
        </nav>
    </header>