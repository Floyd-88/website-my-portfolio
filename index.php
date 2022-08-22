<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>My portfolio</title>
</head>

<body>
<!-- block header -->
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="user">
                <div class="user__avatar">
                    <img src="https://pixelbox.ru/wp-content/uploads/2021/05/ava-vk-animal-91.jpg" alt="">
                </div>
                <div class="user__content">
                    <div class="user__name">Илья <br>Сазонов</div>
                    <div class="user__prof">frontend developer</div>
                </div>
            </div>
            <div class="nav" id="nav">
                <a class="nav__link active" href="#works">Работы</a>
                <a class="nav__link" href="#aboutMe">Обо мне</a>
                <a class="nav__link" href="#news">Новости</a>
                <!-- <a class="nav__link" href="#">Контакты</a> -->
                <a class="nav__link nav__link--btn" data-btn="contact" href="#" onclick="showModal(this)">Мои контакты</a>
            </div>
            <button class="burger" id="burger" type="button">
                <img class="burger__icon" src="images/burger.png" alt="">
            </button>
        </div>
    </div>
</header>

<!-- block intro -->
<section class="intro">
    <div class="container">
        <div class="intro__inner">
            <div class="intro__content">
                <h2 class="intro__subtitle">Привет, я</h2>
                <h1 class="intro__title">Илья Сазонов</h1>
                <div class="intro__text">frontend developer</div>
                <div class="social">
                    <a href="" class="social__link">
                        <img src="images/Be.png" alt="">
                    </a>
                    <a href="" class="social__link">
                        <img src="images/Dribbble.png" alt="">
                    </a>
                    <a href="" class="social__link">
                        <img src="images/In.png" alt="">
                    </a>
                    <a href="" class="social__link">
                        <img src="images/Fb.png" alt="">
                    </a>
                    <a href="" class="social__link">
                        <img src="images/In.png" alt="">
                    </a>
                    <a href="" class="social__link">
                        <img src="images/Twitter.png" alt="">
                    </a>
                </div>
                <button class="btn" data-btn="contact" onclick="showModal(this)">Мои контакты</button>
                <!-- <a class="btn" href="" data-btn="contact" onclick="showModal(this)">Найми меня</a> -->
                <button class="btn" data-btn="resume" onclick="showModal(this)">Посмотреть резюме</button>
            </div>
            <img class="intro__foto" src="images/designer_photo.png" alt="my foto">
        </div>
        <!-- /intro.inner -->
    </div>
    <!-- /container -->
</section>

<!-- block works -->
<div class="works" id="works">
    <div class="container">
        <div class="works__nav">
            <a class="works_nav-link" data-link="all" href="">Все</a>
            <a class="works_nav-link" data-link="app" href="">Приложения</a>
            <a class="works_nav-link" data-link="website" href="">Сайты</a>
            <a class="works_nav-link" data-link="interection" href="">Interaction</a>

        </div>
        <div class="portfolio">
            <div class="portfolio__col" data-work="website">
                <div class="work" data-btn="previews" onclick="showModal(this)">
                    <img class="work__image" src="images/works/resturant/1.png" alt="">
                    <div class="work__content">
                        <div class="work__cat">
                            CATEGORY: website
                        </div>
                        <div class="work__title">
                            Uber Eats - Рестораны Москвы
                            <!-- <time datetime="2022-04-03" class="work__date">2022</time> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-work="website">
                <div class="work" data-btn="previews2" onclick="showModal(this)">
                    <img class="work__image" src="images/works/Naruto/1.png" alt="">
                    <div class="work__content">
                        <div class="work__cat">
                            CATEGORY: website
                        </div>
                        <div class="work__title">
                            Naruto
                            <!-- <time datetime="2022-04-03" class="work__date">2022</time> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-work="website">
                <div class="work" data-btn="previews3" onclick="showModal(this)">
                    <img class="work__image" src="images/works/PiperNet_Is_Here/1.png" alt="">
                    <div class="work__content">
                        <div class="work__cat">
                            CATEGORY: website
                        </div>
                        <div class="work__title">
                            PiperNet Is Here
                            <!-- <time datetime="2022-04-03" class="work__date">2022</time> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-work="app">
                <div class="work" data-btn="previews4" onclick="showModal(this)">
                    <img class="work__image" src="images/works/react/1.png" alt="">
                    <div class="work__content">
                        <div class="work__cat">
                            CATEGORY: app
                        </div>
                        <div class="work__title">
                            React приложение
                            <!-- <time datetime="2022-04-03" class="work__date">2022</time> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-work="app">
                <div class="work" data-btn="previews5" onclick="showModal(this)">
                    <img class="work__image" src="images/works/Rocket/2.png" alt="Rocket">
                    <div class="work__content">
                        <div class="work__cat">
                            CATEGORY: app
                        </div>
                        <div class="work__title">
                            Game Rocket
                            <!-- <time datetime="2022-04-03" class="work__date">2022</time> -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="portfolio__col" data-work="app">
                <div class="work" data-btn="previews6" onclick="showModal(this)">
                    <img class="work__image" src="images/works/calc/1.png" alt="Calc">
                    <div class="work__content">
                        <div class="work__cat">
                            CATEGORY: app
                        </div>
                        <div class="work__title">
                            Калькулятор для андройд
                            <!-- <time datetime="2022-04-03" class="work__date">2022</time> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="text__center"><a class="btn btn--sm" href="">Загрузить больше</a></div>
    </div>
</div>

<!-- block about me -->
<section class="about" id="aboutMe">
    <div class="container">
        <div class="about_inner">
            <div class="about__foto">
                <img class="img" src="images/designer_photo_2.png" alt="my foto">
            </div>
            <div class="about_content">
                <h3 class="about__title">Обо мне</h3>
                <h2 class="about__bigTitle">Кто я</h2>
                <div class="about__text">
                    <p>Меня зовут Илья, мне 33 года, за это время я успел поработать в ряде крупных компаний как на технических должностях, так и на руководящих, при этом самый первый мой опыт работ, хоть и не долгий, был связан с IT-сферой в далеком
                        2011 году. И хоть я и решил связать свою судьбу в дальнейшем с другими отраслями, в глубине души IT меня никогда не оставляла. </p>
                    <p>И вот я решил вернуться к тому, с чего начинал свою карьеру, однако за долгие годы данная сфера шагнула вперед и мне пришлось фактически с нуля изучать новые технологии и инструменты.</p>
                    <p>В данный момент у меня имеется огромное желание развиваться в этом направлении, применять на практике полученные знания, повышать свои скилы и в будущем постараться внести свой вклад в развитие IT-индустрии.</p>
                </div>
                <button class="btn" data-btn="contact" onclick="showModal(this)">Мои контакты</button>
                <button class="btn" data-btn="resume" onclick="showModal(this)">Посмотреть резюме</button>
            </div>
        </div>
    </div>
</section>

<!-- block reviews -->
<?php
require_once "block_reviews.php";
?>

<!-- block news -->

<?php
require_once 'news.php';
?>

<!-- block footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer_credits">
                <div class="footer__copyright">
                    © 2022
                </div>
                <div class="footer__social">
                    <a href="#" target="_blank">
                        <img src="images/be_footer.png" alt="be">
                    </a>
                    <a href="#" target="_blank">
                        <img src="images/dribbble_footer.png" alt="dribbble">
                    </a>
                    <a href="#" target="_blank">
                        <img src="images/in_footer.png" alt="in">
                    </a>
                    <a href="#" target="_blank">
                        <img src="images/fb_footer.png" alt="fb">
                    </a>
                    <a href="#" target="_blank">
                        <img src="images/instagram_footer.png" alt="instagram">
                    </a>
                    <a href="#" target="_blank">
                        <img src="images/twitter_footer.png" alt="twitter">
                    </a>
                </div>
            </div>
            <div class="footer__nav">
                <a class="footer__nav-link" href="#works">Работы</a>
                <a class="footer__nav-link" href="#aboutMe">Обо мне</a>
                <a class="footer__nav-link" href="#news">Новости</a>
                <a class="footer__nav-link footer__nav-link--btn" href="#" data-btn="contact" onclick="showModal(this)">Мои контакты</a>
            </div>
        </div>
    </div>
</footer>

<!-- Modals -->

<div class="modal" id="previews">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>
        <div class="modal-work">
            <div class="modal-work__previews">
                <div data-slider="slick">
                    <div>
                        <img class="modal-work__foto" src="images/works/resturant/1.png" alt="resturant">
                    </div>
                    <div>
                        <img class="modal-work__foto" src="images/works/resturant/2.png" alt="resturant">
                    </div>
                    <div>
                        <img class="modal-work__foto" src="images/works/resturant/3.png" alt="resturant">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Uber Eats - Рестораны Москвы</h3>
                    <div class="modal-work__info">
                        Categoriy<span class="modal-work__info-span">|</span> 2022
                    </div>
                </div>

                <div class="modal-work__client">
                    <div class="modal-work__client-title">Посмотреть:</div>
                    <div class="modal-work__client-company"> <a target="_blink" href="https://floyd-88.github.io/Restaurant-website-layout/index.html">Ссылка на сайт</a></div>
                </div>
                <div class="modal-work__text">
                    <p>Верстка двухстраничного лендинга с адаптивом под мобильные экраны
                    </p>
                </div>
                <div class="modal-work__footer">
                    <button class="modal-work_btn modal-work_btn--back slickBack" type="button">
                        <img src="images/next.png" height="12px" alt="back">
                        Back
                    </button>
                    <button class="modal-work_btn modal-work_btn--next slickNext" type="button">
                        Next
                        <img src="images/next.png" height="12px" alt="next">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="previews2">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>
        <div class="modal-work">
            <div class="modal-work__previews">
                <div data-slider="slick">
                    <div>
                        <img class="modal-work__foto" src="images/works/Naruto/2.png" alt="naruto">
                    </div>
                    <div>
                        <img class="modal-work__foto" src="images/works/Naruto/3.png" alt="naruto">
                    </div>

                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Naruto</h3>
                    <div class="modal-work__info">
                        Categoriy<span class="modal-work__info-span">|</span> 2022
                    </div>
                </div>

                <div class="modal-work__client">
                    <div class="modal-work__client-title">Посмотреть:</div>
                    <div class="modal-work__client-company"><a target="_blink" href="https://floyd-88.github.io/website-Naruto/">Ссылка на сайт</a></div>
                </div>
                <div class="modal-work__text">
                    <p>Тематический веб-сайт по вселенной одноименного произведения Масаши Кишимото "Наруто"
                    </p>
                </div>
                <div class="modal-work__footer">
                    <button class="modal-work_btn modal-work_btn--back slickBack" type="button">
                        <img src="images/next.png" height="12px" alt="back">
                        Back
                    </button>
                    <button class="modal-work_btn modal-work_btn--next slickNext" type="button">
                        Next
                        <img src="images/next.png" height="12px" alt="next">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="previews3">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>
        <div class="modal-work">
            <div class="modal-work__previews">
                <div data-slider="slick">
                    <div>
                        <img class="modal-work__foto" src="images/works/PiperNet_Is_Here/1.png" alt="PiperNet_Is_Here">
                    </div>
                    <div>
                        <img class="modal-work__foto" src="images/works/PiperNet_Is_Here/2.png" alt="PiperNet_Is_Here">
                    </div>

                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">PiperNet Is Here</h3>
                    <div class="modal-work__info">
                        Categoriy<span class="modal-work__info-span">|</span> 2022
                    </div>
                </div>

                <div class="modal-work__client">
                    <div class="modal-work__client-title">Посмотреть:</div>
                    <div class="modal-work__client-company"><a target="_blink" href="https://floyd-88.github.io/-Landing_PiedPiper/PiedPiperLanding.html">Ссылка на сайт</a></div>
                </div>
                <div class="modal-work__text">
                    <p>Одностраничный лендинг адаптированный под различные экраны
                    </p>
                </div>
                <div class="modal-work__footer">
                    <button class="modal-work_btn modal-work_btn--back slickBack" type="button">
                        <img src="images/next.png" height="12px" alt="back">
                        Back
                    </button>
                    <button class="modal-work_btn modal-work_btn--next slickNext" type="button">
                        Next
                        <img src="images/next.png" height="12px" alt="next">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="previews4">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>
        <div class="modal-work">
            <div class="modal-work__previews">
                <div data-slider="slick">
                    <div>
                        <img class="modal-work__foto" src="images/works/react/1.png" alt="reactJS">
                    </div>


                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">React приложение</h3>
                    <div class="modal-work__info">
                        Categoriy<span class="modal-work__info-span">|</span> 2022
                    </div>
                </div>

                <div class="modal-work__client">
                    <div class="modal-work__client-title">Посмотреть:</div>
                    <div class="modal-work__client-company"><a target="_blink" href="https://github.com/Floyd-88/ReactPrioject">Ссылка на Githab</a></div>
                </div>
                <div class="modal-work__text">
                    <p>Разработка социальной сети на ReactJS (проект еще не окончен, работы ведутся)
                    </p>
                </div>
                <div class="modal-work__footer">
                    <button class="modal-work_btn modal-work_btn--back slickBack" type="button">
                        <img src="images/next.png" height="12px" alt="back">
                        Back
                    </button>
                    <button class="modal-work_btn modal-work_btn--next slickNext" type="button">
                        Next
                        <img src="images/next.png" height="12px" alt="next">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="previews5">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>
        <div class="modal-work">
            <div class="modal-work__previews">
                <div data-slider="slick">

                    <div>
                        <img class="modal-work__foto" src="images/works/Rocket/2.png" alt="Rocket">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Игра Ракета</h3>
                    <div class="modal-work__info">
                        Categoriy<span class="modal-work__info-span">|</span> 2022
                    </div>
                </div>

                <div class="modal-work__client">
                    <div class="modal-work__client-title">Посмотреть:</div>
                    <div class="modal-work__client-company"><a target="_blink" href="https://floyd-88.github.io/Rocket/blocs.html">Ссылка на игру</a></div>
                </div>
                <div class="modal-work__text">
                    <p>Игра делалась для мобильных экранов, поэтому не адаптирована под большие мониторы. Писалась на JS, затем была собрана через приложение Android Studio в apk. Протестирована на нескольких смартфонах, работоспособна.
                    </p>
                </div>
                <div class="modal-work__footer">
                    <button class="modal-work_btn modal-work_btn--back slickBack" type="button">
                        <img src="images/next.png" height="12px" alt="back">
                        Back
                    </button>
                    <button class="modal-work_btn modal-work_btn--next slickNext" type="button">
                        Next
                        <img src="images/next.png" height="12px" alt="next">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="previews6">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>
        <div class="modal-work">
            <div class="modal-work__previews">
                <div data-slider="slick">

                    <div>
                        <img class="modal-work__foto" src="images/works/calc/1.png" alt="Calc">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Калькулятор</h3>
                    <div class="modal-work__info">
                        Categoriy<span class="modal-work__info-span">|</span> 2022
                    </div>
                </div>

                <div class="modal-work__client">
                    <div class="modal-work__client-title">Посмотреть:</div>
                    <div class="modal-work__client-company"><a target="_blink" href="https://floyd-88.github.io/calc/calc.html">Ссылка на веб-версию калькулятора</a></div>
                </div>
                <div class="modal-work__text">
                    <p>Калькулятор написан на JS для мобильных смартфонов на операционной системе андройд. Приложение протестировано на нескольких смартфонах, работоспособно.
                    </p>
                </div>
                <div class="modal-work__footer">
                    <button class="modal-work_btn modal-work_btn--back slickBack" type="button">
                        <img src="images/next.png" height="12px" alt="back">
                        Back
                    </button>
                    <button class="modal-work_btn modal-work_btn--next slickNext" type="button">
                        Next
                        <img src="images/next.png" height="12px" alt="next">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="resume">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>

        <div class="modal__content">
            <h3 class="modal__title" style="text-align: center;">Резюме</h3>
            <div class="text__center">
                <a class="btn btn--thin" href="#">Скачать PDF</a>
                <a class="btn btn--thin" href="#">Распечатать</a>
            </div>

            <div class="timeline">
                <div class="timeline__col timeline__col--left">
                    <h4 class="timeline__title">
                        опыт работы
                    </h4>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">07.2011 - 11.2011</div>
                        <div class="timeline__sublime">ООО "Эверест"</div>
                        <div class="timeline__position">Программист</div>
                        <div class="timeline__text">

                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">12.2011 - 2013</div>
                        <div class="timeline__sublime">Газпром Трансгаз Ставрополь</div>
                        <div class="timeline__position">Техник ЛЭС</div>
                        <div class="timeline__text">

                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2013 - 2018</div>
                        <div class="timeline__sublime">АО «ГК «ЭнергоГазИнжиниринг»</div>
                        <div class="timeline__position">Помощник Главного инженера проекта</div>
                        <div class="timeline__text">

                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2019 - 2022</div>
                        <div class="timeline__sublime">РТК СК</div>
                        <div class="timeline__position">Главный специалист</div>
                        <div class="timeline__text">

                        </div>
                    </div>
                </div>
                <div class="timeline__col timeline__col--right">
                    <h4 class="timeline__title">
                        образование
                    </h4>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2005 - 2010</b>
                        </div>
                        <div class="timeline__sublime">Геология нефти и газа</div>
                        <div class="timeline__position">Северо-Кавказский Государственный Технический Университет </div>
                        <div class="timeline__text">Специальность горный инженер</div>
                    </div>
                    <!-- <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2005 - 2010</b>
                        </div>
                        <div class="timeline__sublime">Геология нефти и газа</div>
                        <div class="timelime__position">СевКавГТУ</div>
                        <div class="timeline__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ex iste, dolorum pariatur fuga accusamus ad. Reiciendis atque dolore, cumque dolorem iste ad mollitia libero, iusto officia corrupti voluptatibus animi.</div>
                    </div> -->
                    <h4 class="timeline__title">Навыки</h4>
                    <div class="progress-bar">
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    HTML
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 80%;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    CSS, препроцессор LESS
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 50%;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    Адаптивная верстка под мобильные устройства
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 80%;">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    JavaScript
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 70%;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    Основы работы с GIT
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 70%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="timeline__title">Курсы</h4>
                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime">Stepik - JavaScript для начинающих</div>
                        <div class="timeline__position">Завершил с отличием</div>
                        <div class="timeline__text">Сертификат можно посмотреть
                            <a href="https://stepik.org/cert/1383215">по ссылке</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime">Stepik - Веб-разработка для начинающих: HTML и CSS</div>
                        <div class="timeline__position">Завершил с отличием</div>
                        <div class="timeline__text">Сертификат можно посмотреть
                            <a href="https://stepik.org/cert/1404917">по ссылке</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> FreeCodeCamp - JavaScript Algorithms and Data Structures</div>
                        <div class="timeline__position">Basic JavaScript, ES6, Debugging, Basic Data Structures, Basic Algorithm Scripting, Object Oriented Programming, Functional Programming, Intermediate Algorithm Scripting</div>
                        <div class="timeline__text"><a target="_blank" href="https://www.freecodecamp.org/Floyd_88">Ссылка на профиль</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> FreeCodeCamp - Responsive Web Design
                        </div>
                        <div class="timeline__position">Basic HTML and HTML5, Basic CSS, Applied Visual Design, Applied Accessibility</div>
                        <div class="timeline__text"><a target="_blank" href="https://www.freecodecamp.org/Floyd_88">Ссылка на профиль</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> FreeCodeCamp - Responsive Web Design
                        </div>
                        <div class="timeline__position">Basic HTML and HTML5, Basic CSS, Applied Visual Design, Applied Accessibility</div>
                        <div class="timeline__text"><a target="_blank" href="https://www.freecodecamp.org/Floyd_88">Ссылка на профиль</a></div>
                    </div>

                    <div class="timeline__sublime">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> Codewars
                        </div>
                        <div class="timeline__position">Алгоритмические задачи по JS </div>
                        <div class="timeline__text"><a target="_blank" href="https://www.codewars.com/users/Floyd_88">Ссылка на профиль</a></div>
                    </div>
                </div>

            </div>
            <div class="text__center">
                <button class="btn" data-btn="contact" onclick="showModal(this)">Мои контакты</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="contact">
    <div class="modal__dialog modal__dialog--sm">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>

        <div class="contact">
            <div class="contact__left">
                <h3 class="modal__title mb-0">контакты</h3>
                <div class="modal__subtitle">Позвонить или написать мне</div>

                <ul class="contact_info">
                    <li class="contact_info-item">
                        <img class="contact_info-icon" style="width: 20px;" src="images/phone.png" alt="phone"> 8-905-411-06-92
                    </li>
                    <li class="contact_info-item">
                        <img class="contact_info-icon" style="width: 20px;" src="images/email.png" alt="email"> ilasaz1968@gmail.com
                    </li>
                </ul>

                <form>

                    <input type="hidden" name="project_name" value="My profile">
                    <input type="hidden" name="admin_email" value="mail@it-floyd.site">
                    <input type="hidden" name="form_subject" value="Contacts form">

                    <div class="form__group">
                        <label class="form__label" for="input-email">Адрес e-mail</label>
                        <input class="form__input" type="text" name="input_email" id="input-email" placeholder="Адрес e-mail">
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="input-text">Запрос</label>
                        <textarea class="form__textarea" placeholder="Введите ваше сообщение..." name="input_text" id="input-text"></textarea>
                    </div>
                    <div class="text__right"> <button class="btn" type="submit">Отправить</button></div>
            </div>

            </form>

            <div class="contact__right">
            </div>
        </div>

    </div>
</div>
</div>
<script src="slick.min.js"></script>
<script src="app.js"></script>
<script src="main.js"></script>
<script src="add_news.js"></script>
</body>

</html>