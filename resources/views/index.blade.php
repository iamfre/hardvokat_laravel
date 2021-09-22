@extends('layouts.main')

@section('main')
    <main class="main">
        <!-- INTRO SECTION -->
        <div class="intro" id="index">
            <div class="wrapper">
                <!-- title -->
                <h1 class="intro__title">Юридические услуги</h1>
                <!-- sub title -->
                <p class="intro__subtitle"> Оперативная юридическая поддержка частных лиц, владельцев малого и среднего бизнеса в России, снижение рисков привлечения к ответственности. </p>
                <div><a href="#price" class="btn-found">ПРАЙС ЛИСТ</a></div>
                <!-- SEARCH FORM -->
                <form class="search-form">
                    <fieldset class="search-form__wrap">
                        <p class="search-form__info">
                            <input type="text" name="user-like-to-do" class="search-form__field" placeholder="поиск на сайте">
                            <a href="#!" class=""> <img src="/img/svg/search-black.ico" alt="НАЙТИ" class="button1"> </a>
                        </p>
                    </fieldset>
                </form>
                <!-- /SEARCH FORM -->
            </div>
        </div>
        <!-- /INTRO SECTION-->
        <!-- BENEFITS SECTION-->
        <section class="benefits">
            <div class="benefits__wrap">
                <!-- title -->
                <h2 class="benefits__title" id="services">Отрасли права (практики)</h2>
                <!-- cards -->
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <div class="benefits__card-pic"> <img src="./img/svg/working.svg" alt="Уголовные дела!" class="benefits_card-thumb"> </div>
                        <h3 class="benefits__card-title">Трудовое право</h3>
                        <p class="benefits__card-desc">Всесторонние споры, возникшие в процессе трудовой деятельности. </p> <a href="#!" class="benefits__card-more">Подробнее</a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic"> <img src="/img/svg/family.svg" alt="Семейное право" class="benefits_card-thumb"> </div>
                        <h3 class="benefits__card-title">Семейное право</h3>
                        <p class="benefits__card-desc"> Посвящено рассмотрению проблем, связанных с брачно-семейными правоотношениями. </p> <a href="#!" class="benefits__card-more">Подробнее</a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic"> <img src="/img/svg/courthouse.svg" alt="Гражданские дела" class="benefits_card-thumb"> </div>
                        <h3 class="benefits__card-title">Гражданско-процессуальное право</h3>
                        <p class="benefits__card-desc"> Судопроизводство по гражданским делам. </p> <a href="#!" class="benefits__card-more">Подробнее</a>
                    </div>
                </div>
                <!-- cards 2nd row -->
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <div class="benefits__card-pic"> <img src="/img/svg/judge.svg" alt="Конституционное право" class="benefits_card-thumb"> </div>
                        <h3 class="benefits__card-title">Конституционное право</h3>
                        <p class="benefits__card-desc">Регулирует социально-значимые общественные отношения, основной источник это Конституция РФ. </p> <a href="#!" class="benefits__card-more">Подробнее</a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic"> <img src="./img/svg/territory.svg" alt="Земельное право" class="benefits_card-thumb"> </div>
                        <h3 class="benefits__card-title">Земельное право</h3>
                        <p class="benefits__card-desc"> Предметом регулирования являются правовые отношения, связанные с землей. </p> <a href="#!" class="benefits__card-more">Подробнее</a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic"> <img src="./img/svg/book.svg" alt="Гражданские дела" class="benefits_card-thumb"> </div>
                        <h3 class="benefits__card-title">Гражданское право</h3>
                        <p class="benefits__card-desc"> Регулирует имущественные и связанные с ними неимущественные отношения субъектов права.</p> <a href="#!" class="benefits__card-more">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /BENEFITS SECTION-->
        <!-- PICS SECTION-->
        <section class="pics">
            <div class="wrapper-full">
                <!-- заголовок -->
                <div class="pics__caption">
                    <h2 class="pics__title section-title">Популярные статьи</h2> <a href="#!" class="pics__view-all">Посмотреть все</a>
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
@endsection