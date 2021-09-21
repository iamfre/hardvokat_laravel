<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUARDIAN</title>
    <meta name="description" content="Юридическая помощь" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#214fb1">
    <!-- /favicon -->
</head>


<body>
    <!--=======================================================================
        HEADER 
    ========================================================================-->
    <header class="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <!-- LOGO -->
                <div class="header__logo">
                    <a href="http://vartovgor.hmao.sudrf.ru/" target="_blank" class="header__logo-link"> <img src="./img/svg/5.svg" alt="logo" class="header__logo-pic"> </a>
                </div>
                <!-- /LOGO -->
                <!-- ADRES-->
                <div class="header__contact-info">
                    <div class="header__contact-address mid"><a href="https://go.2gis.com/vejrd" class="white-hover" target="_blank">п.Излучинск ул.Таежная 6</a></div>
                    <p class="mid"><a href="tel:89090406030" class="header__contact-phone">8(909)040-60-30</a></p>
                    <p class="mid"><a href="mailto:help@mail.ru" class="header__contact-mail">Legat86@yandex.ru</a></p>
                </div>
                <div class="header__contact-time">
                    <p class="header__contact-time-days">Пн-Пт </p>
                    <!-- <img src="./img/svg/new/13/clock_icon_181527.ico" alt="logo" class="header__logo-time"> -->
                    <p>8:00 - 17:00</p>
                </div>
                <!-- /ADRES -->
                <div class="sz"><a href="#!" class="btn">ЗАПИСАТЬСЯ</a></div>
                <!-- NAVIGATION -->
                <nav class="header__nav">
                    <ul class="header__list link-hover-center">
                        <li class="header__item"> <a href="#index" class="header__link js-scroll">Главная</a> </li>
                        <li class="header__item"> <a href="#services" class="header__link js-scroll">Услуги</a> </li>
                        <li class="header__item"> <a href="#articles" class="header__link js-scroll">Статьи</a> </li>
                    </ul>
                    <div class="header__nav-close"> <span class="header__nav-close-line"></span> <span class="header__nav-close-line"></span> </div>
                </nav>
                <!-- /NAVIGATION -->
                <!-- burger menu -->
                <div class="header__burger burger"> <span class="burger__line burger__line_first"></span> <span class="burger__line burger__line_second"></span> <span class="burger__line burger__line_third"></span> </div>
            </div>
        </div>
    </header>
    <!--=======================================================================
        /HEADER 
    ========================================================================-->
	<!--=======================================================================
        MAIN 
    ========================================================================-->
	@yield('main')
	<!--=======================================================================
        /MAIN 
    ========================================================================-->
	<!--=======================================================================
        FOOTER
    ========================================================================-->
    <footer class="footer">
        <div class="wrapper">
            <div class="footer__item">
                <div class="footer__copyright-cont">
                    <p class="footer__left-copyright">Все права защищены Copyright © 2021 </p>
                </div>
                <address class="footer__contacts">
                    <div class="footer__contacts-address">
                        <p class="footer__adr-mid">
                            п.Излучинск ул. Таежная 6
                        </p>
                        <a href="https://go.2gis.com/vejrd" class="footer__contact-coordinate" target="_blank">показать на карте</a>
                    </div>
                    <div class="footer__contact-time">
                        <p>Пн-Пт</p>
                        <p>8:00 - 17:00</p>
                    </div>
                    <div class="footer__contact-items">
                        <a href="tel:89090406030" class="footer__contact-phone">8-909-040-60-30</a>
                        <p><a href="mailto:help@mail.ru" class="footer__contact-mail">Legat@yandex.ru</a></p>
                    </div>


                </address>
            </div>
        </div>
    </footer>
    <!--=======================================================================
        /FOOTER
    ========================================================================-->
	<!--=======================================================================
        JAVA SCRIPTS
    ========================================================================-->
    <script src="./js/main.js"></script>
    <!--=======================================================================
        /JAVA SCRIPTS
    ========================================================================-->
</body>
</html>