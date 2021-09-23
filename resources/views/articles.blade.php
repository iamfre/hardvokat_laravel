<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Юридическая помощь</title>
    <meta name="description" content="Юридическая помощь" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('/img/favicon/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="{{asset('/img/favicon/browserconfig.xml')}}">
    <meta name="theme-color" content="#214fb1">
    <!-- /favicon -->
</head>


<body>
    <!--=======================================================================
        HEADER 
    ========================================================================-->
    <header class="header_articles">
        <div class="wrapper">
            <div class="header__wrapper">
                <!-- LOGO -->
                <div class="header__logo">
                    <a href="http://vartovgor.hmao.sudrf.ru/" target="_blank" class="header__logo-link"> <img src="/img/svg/header-logo.svg" alt="logo" class="header__logo-pic"> </a>
                </div>
                <!-- /LOGO -->
                <!-- ADDRESS-->
                <div class="header__contact-info">
                    <div class="header__contact-address mid"><a href="https://go.2gis.com/vejrd" class="white-hover" target="_blank">п.Излучинск ул.Таежная 6</a></div>
                    <p class="mid"><a href="tel:89825385756" class="header__contact-phone">8 (982) 538-57-56</a></p>
                    <p class="mid"><a href="mailto:Legat86@yandex.ru" class="header__contact-mail">Legat86@yandex.ru</a></p>
                </div>
                <div class="header__contact-time">
                    <p class="header__contact-time-days">Пн-Пт </p>
                    <p>8:00 - 17:00</p>
                </div>
                <!-- /ADDRESS -->
                <div class="sz"><a href="#!" class="btn">ЗАПИСАТЬСЯ</a></div>
                <!-- NAVIGATION -->
                <nav class="header__nav">
                    <ul class="header__list link-hover-center">
                        <li class="header__item"> <a href="{{ route('index') }}" class="header__link js-scroll">Главная</a> </li>
                        <li class="header__item"> <a href="{{ route('price') }}" class="header__link js-scroll">Услуги</a> </li>
                        <li class="header__item"> <a href="{{ route('articles') }}" class="header__link js-scroll">Статьи</a> </li>
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
    <main class="main">
		        <!-- PICS SECTION-->
				<section class="pics">
					<div class="wrapper-full" style="padding-top: 140px;">
						<!-- заголовок -->
						<div class="pics__caption">
							<h2 class="pics__title intro__title">Полезные статьи по юриспруденции</h2>
						</div>
						<div class="articles__items">
							<!-- article 1 -->
							<div class="articles__item">
								<div class="article__item-picture"> <img src="./img/articles/article-1-min.jpg" alt="article-1" class="articals__item-pic">
									<div class="articles__item-stats">
										<h3 class="article__item-title">
											ОБМАНУТЫЕ ДОЛЬЩИКИ
										</h3>
										<div class="artcile__item-likes ff"><span class="article__item-likes-value"> 241 </span></div>
										<div class="article__item-comments ff"><span class="article__item-comments-value">120</span> </div>
									</div>
								</div>
								<p class="article__item-text"> Застройщик не выполнил свои обязательства. По мнению Т. В. Светник в 80-90 % средств одних дольщиков шли на достройку проектов предыдущих дольщиков из-за чего возникала своеобразная финансовая пирамида. </p> <a href="#!" class="btn-seemore">ПОДРОБНЕЕ</a>
							</div>
							<!-- article 2 -->
							<div class="articles__item">
								<div class="article__item-picture"> <img src="./img/articles/article-2-min.jpg" alt="article-1" class="articals__item-pic">
									<div class="articles__item-stats">
										<h3 class="article__item-title">
											РАЗДЕЛ ИМУЩЕСТВА ПРИ РАЗВОДЕ
										</h3>
										<div class="artcile__item-likes ff">
											<span class="article__item-likes-value"> 21 </span>
										</div>
										<div class="article__item-comments"> <span class="article__item-comments-value">
												10
											</span> </div>
									</div>
								</div>
								<p class="article__item-text"> Супруга обратилась в суд с иском о расторжении брака, разделе совместно нажитого имущества, взыскании алиментов, как на свое содержание до наступления ребенку 3-хлетнего возраста, так и на ребенка. </p> <a href="#!" class="btn-seemore">ПОДРОБНЕЕ</a>
							</div>
							<!-- article 3 -->
							<div class="articles__item">
								<div class="article__item-picture"> <img src="./img/articles/article-3-min.jpg" alt="article-1" class="articals__item-pic">
									<div class="articles__item-stats">
										<h3 class="article__item-title">
											ОФОРМЛЕНИЕ ИНВАЛИДНОСТИ
										</h3>
										<div class="artcile__item-likes ff">
											<span class="article__item-likes-value"> 221 </span>
										</div>
										<div class="article__item-comments"> <span class="article__item-comments-value">
												50
											</span> </div>
									</div>
								</div>
								<p class="article__item-text"> Чтобы получать пенсию и социальные выплаты по инвалидности, необходимо пройти медико-социальную экспертизу и установить инвалидность. </p> <a href="#!" class="btn-seemore">ПОДРОБНЕЕ</a>
							</div>
							<!-- article 4 -->
							<div class="articles__item">
								<div class="article__item-picture"> <img src="./img/articles/article-4-min.jpg" alt="article-1" class="articals__item-pic">
									<div class="articles__item-stats">
										<h3 class="article__item-title">
											ОТКАЗ ТУРФИРМЫ ВЕРНУТЬ ДЕНЬГИ
										</h3>
										<div class="artcile__item-likes ff">
											<span class="article__item-likes-value"> 321 </span>
										</div>
										<div class="article__item-comments"> <span class="article__item-comments-value">
												42
											</span> </div>
									</div>
								</div>
								<p class="article__item-text"> Оплатив стоимость путевок, люди пришли за билетами в офис турфирмы и обнаружили, что он опечатан право охранительными органами. </p> <a href="#!" class="btn-seemore">ПОДРОБНЕЕ</a>
							</div>
							<!-- article 5 -->
							<div class="articles__item">
								<div class="article__item-picture"> <img src="./img/articles/article-5-min.jpg" alt="article-1" class="articals__item-pic">
									<div class="articles__item-stats">
										<h3 class="article__item-title">
											ВЫПЛАТА СРЕДСТВ ПО СТРАХОВКЕ КАСКО
										</h3>
										<div class="artcile__item-likes ff">
											<span class="article__item-likes-value"> 421 </span>
										</div>
										<div class="article__item-comments"> <span class="article__item-comments-value">
												150
											</span> </div>
									</div>
								</div>
								<p class="article__item-text"> Машина моего клиента получила повреждения, об этом было сообщено в страховую компанию, но выплаты не последовало. </p> <a href="#!" class="btn-seemore">ПОДРОБНЕЕ</a>
							</div>
							<!-- article 6 -->
							<div class="articles__item">
								<div class="article__item-picture"> <img src="./img/articles/article-6-min.jpg" alt="article-1" class="articals__item-pic">
									<div class="articles__item-stats">
										<h3 class="article__item-title">
											ЛИШЕНИЕ ОТЦА РОДИТЕЛЬСКИХ ПРАВ
										</h3>
										<div class="artcile__item-likes ff">
											<span class="article__item-likes-value"> 55 </span>
										</div>
										<div class="article__item-comments"> <span class="article__item-comments-value">
												14
											</span> </div>
									</div>
								</div>
								<p class="article__item-text"> Родители могут быть лишены родительских прав, если они уклоняются от выполнения обязанностей родителей </p> <a href="#!" class="btn-seemore">ПОДРОБНЕЕ</a>
							</div>
						</div>
					</div>
				</section>
				<!-- /PICS SECTION-->
    </main>
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
                        <a href="tel:89825385756" class="footer__contact-phone">8 (982) 538-57-56</a>
                        <p><a href="mailto:legat@yandex.ru" class="footer__contact-mail">Legat@yandex.ru</a></p>
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
