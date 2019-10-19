<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo.png" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <title>Ремонт квартир</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-block">
                <div class="navbar-block__logo">
                    <a href="index.html">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <!-- /.navbar-block__logo -->
                <div class="navbar-block__info">
                    <div class="navbar-block__contacts">
                        <span class="navbar-block__address">Калуга, Москва, МО</span>
                        <a href="tel:+7(495)42-251-31" class="navbar-block__phone">+7 (495) 42-251-31</a>
                    </div>
                    <!-- /.navbar__contacts -->
                    <div class="btn">
                        <a href="#" class="button navbar-block__button" id="button">Перезвоните мне</a>
                    </div>
                </div>
                <!-- /.navbar_info -->
            </div>
            <!-- /.navbar-block -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-block">
                    <div class="hero-text">
                        <h1 class="hero-text__title">
                            Внутренняя отделка помещений "под ключ"
                        </h1>
                        <span class="hero-text__subtitle">
                            с гарантией качества, прописанной в договоре
                        </span>
                        <ul class="hero-list">
                            <li class="hero-list__item">
                                <div class="hero-list__image">
                                    <img src="img/hero/clock.png" alt="clock">
                                </div>
                                <span class="hero-list__text">Точно соблюдаем сроки</span>
                            </li>
                            <li class="hero-list__item">
                                <div class="hero-list__image">
                                    <img src="img/hero/calculator.png" alt="calculator">
                                </div>
                                <span class="hero-list__text">Рассчитаем смету на работы<br>и материалы в день обращения</span>
                            </li>
                            <li class="hero-list__item">
                                <div class="hero-list__image">
                                    <img src="img/hero/paint-board.png" alt="paint-board">
                                </div>
                                <span class="hero-list__text">Предложим более 100 вариантов исполнения дизайна Вашего жилья</span>
                            </li>
                        </ul>
                    </div>
                    <!-- /.hero-text -->
                    <div class="hero-image">
                        <img src="img/hero/hero-image.png" alt="План квартиры">
                    </div>
                    <!-- /.hero-image -->
                </div>
                <!-- /.hero-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.hero -->
        <section class="offer section">
            <div class="container">
                <div class="offer-block">
                    <h2 class="section-title offer-block__title">Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
                    <!-- /.section-title -->
                    <span class="section-subtitle offer-block__subtitle">Оставьте заявку на разработку бесплатного дизайн-проекта!</span>
                    <!-- /.section-subtitle -->
                    <form action="mail.php" method="POST" class="form offer-block__form" id="offer-form">
                        <div class="form offer-block__window">
                            <input type="text" name="username" class="input offer-block__input" id="offer-name" placeholder="Ваше имя">
                            <input type="tel" name="phone" class="input offer-block__input" id="offer-phone" placeholder="Ваш телефон">
                        </div>
                        <button class="button offer-block__button">Получить бесплатный дизайн-проект</button>
                    </form>
                    <div class="offer-block__info">
                        <div class="offer-block__info-description">
                            <span class="offer-block__info-manager">Наш менеджер перезвонит Вам в течение 60 секунд</span>
                        </div>
                        <div class="offer-block__info-contact">
                            <span class="offer-block__info-contacts">или перезвоните нам сами</span>
                            <a href="tel:+7(495)42-251-31" class="offer-block__info-phone">+7 (495) 42-251-31</a>
                        </div>
                    </div>
                    <!-- /.form offer__form -->
                </div>
                <!-- /.offer-block -->
            </div>
            <!-- /.container -->
        </section>
        
        <section class="section portfolio">
            <div class="container">
                    <h2 class="section-title portfolio__title">Работая с 2007 года, <br>мы сделали более 500 ремонтов в квартирах и домах</h2>
                <div class="slider">
                    <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt=""></div>
                    <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt=""></div>
                    <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt=""></div>
                    <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt=""></div>
                    <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt=""></div>
                    <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt=""></div>
                </div>
                <div class="arrows portfolio__arrows">
                    <div class="arrows__left">
                        <img src="img/portfolio/left-arrow.png" alt="">
                    </div>
                    <div class="arrows__right">
                        <img src="img/portfolio/right-arrow.png" alt="">
                    </div>
                </div>
                <!-- /.slider -->
            </div>
            <!-- /.container -->
        </section>
        
        <section class="section price">
            <div class="container">
                <h2 class="section-title price__title">У нас очень гибкая система скидок<br>на комплексные работы!</h2>
                <!-- /.section-title price__title -->
                <span class="section-subtitle price__subtitle">Прайс на наши услуги</span>
                <!-- /.section-subtitle price__subtitle -->
                <div class="cards">
                    <div class="card price__card">
                        <a href="#" class="card__ref">
                            <div class="card__image">
                                <img src="img/price/bathroom.jpg" class="card__img" alt="">
                            </div>
                        </a> 
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт ванных комнат и с/у</h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card">
                        <a href="#" class="card__ref">
                            <div class="card__image">
                                <img src="img/price/living.jpg" class="card__img" alt="">
                            </div>
                        </a>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт комнат и квартир</h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card">
                        <a href="#" class="card__ref">
                            <div class="card__image">
                                <img src="img/price/office.jpg" class="card__img" alt="">
                            </div>
                        </a>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Отделка офисных помещений</h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card">
                        <a href="#" class="card__ref">
                            <div class="card__image">
                                <img src="img/price/buildings.jpg" class="card__img" alt="">
                            </div>
                        </a>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт в новостройках</h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card">
                        <a href="#" class="card__ref">
                            <div class="card__image">
                                <img src="img/price/kitchen.jpg" class="card__img" alt="">
                            </div>
                        </a>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт кухонь</h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card">
                        <a href="#" class="card__ref">
                            <div class="card__image">
                                <img src="img/price/house.jpg" class="card__img" alt="">
                            </div>
                        </a>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт дач и коттеджей</h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.cards -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section price -->

        <section class="section steps">
            <div class="container">
                <h2 class="section-title steps__title">Наши специалисты готовы выехать на замер<br>в любое удобное для Вас время</h2>
                <!-- /.section-title steps__title -->
                <span class="section-subtitle steps__subtitle">5 шагов до ремонта</span>
                <!-- /.section-subtitle steps__subtitle -->
                <div class="steps-block">
                    <div class="step">
                        <div class="step__image-request">
                            <img src="img/steps/woman-with-headset.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Вы звоните нам<br>или оставляете заявку</p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/wall-clock.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Согласуем удобное<br>для Вас время выезда специалиста на замер</p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/money.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Рассчитываем смету согласовываем<br>с Вами</p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/folded-document-icon.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Подписываем договор закупаем материал<br>по оптовым ценам</p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/calendar.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Выполняем ремонт<br>в указанные сроки</p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                </div>
                <!-- /.steps-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section steps -->

        <section class="section info">
            <div class="info-block">
                <h2 class="section__title info-block__title">Ремонт обойдется Вам дешевле, так как<br>мы используем качественные материалы по оптовым ценам</h2>
            </div>
            <div class="container">
                <div class="descriptions">
                    <div class="description info-description">
                        <h3 class="description__title">Поможем закупить все материалы<br>по оптовым ценам у проверенных поставщиков</h3>
                        <img class="description__image" src="img/info/material.png" alt="">
                    </div>
                    <div class="description info-description">
                        <p class="description__title">Мы дадим Вам <span class="description__text">максимальные скидки</span> у наших партнеров для закупки материалов оптом</p>
                        <img class="description__image" src="img/info/tool.png" alt="">
                    </div>
                    <div class="description info-description">
                        <p class="description__title">Все, что не сможете найти в городе - поможем заказать <span class="description__text"> у проверенных поставщиков</span></p>
                        <img class="description__image" src="img/info/laminate.png" alt="">
                    </div>
                </div>
                <!-- /.descriptions -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section info -->

        <section class="section guarantee">
            <div class="container">
                <h2 class="section__title guarantee__title">Все наши гарантийные обязательства<br>подробно и прозрачно описаны в договоре</h2>
                <div class="contracts">
                    <div class="contract guarantee-contact">
                        <div class="contract__box">
                            <div class="contract__frame">
                                <a data-fancybox="gallery" href="img/guarantee/contract-1-big.jpg">
                                    <img class="contract__image" src="img/guarantee/contract-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <p class="contract__text">Гарантия на качество<br>выполняемых работ</p> 
                    </div>
                    <div class="contract guarantee-contact">
                        <div class="contract__box">
                            <div class="contract__frame">
                                <a data-fancybox="gallery" href="img/guarantee/contract-1-big.jpg">
                                    <img class="contract__image" src="img/guarantee/contract-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <p class="contract__text">Гарантия на фиксированные цены<br>Виды работ и цены на них<br>прописаны в договоре</p>
                    </div>
                    <div class="contract guarantee-contact">
                        <div class="contract__box">
                            <div class="contract__frame">
                                <a data-fancybox="gallery" href="img/guarantee/contract-1-big.jpg">
                                    <img class="contract__image" src="img/guarantee/contract-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <p class="contract__text">Гарантия на точное соблюдение<br>сроков и ответственность за<br> их невыполнение</p>
                    </div>
                </div>
            </div>
        </section>


        <div class="section brif">
            <div class="container">
                <div class="brif-block">
                    <div class="interview brif__interview">
                        <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость<br>работы и материалов по телефону</h3>
                        <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
                        <ul class="interview-list">
                            <li class="interview-list__item">
                                <span class="interview-list__counter">1</span>
                                <span class="interview-list__text">Какова площадь помещения?</span>
                            </li>
                            <li class="interview-list__item">
                                <span class="interview-list__counter">2</span>
                                <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span>
                            </li>
                            <li class="interview-list__item">
                                <span class="interview-list__counter">3</span>
                                <span class="interview-list__text">Где находится помещение, в котором будет производиться ремонт?</span>
                            </li>
                            <li class="interview-list__item">
                                <span class="interview-list__counter">4</span>
                                <span class="interview-list__text">Назначение помещения?</span>
                            </li>
                        </ul>
                    </div>
                    <!-- /.interview brif__interview -->
                    <div class="shape brif__block">
                        <h3 class="shape__heading">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
                        <span class="shape__subtitle">Для этого заполните форму ниже</span>
                        <form action="mail.php" method="POST" class="form brif__form" id="brif-form">
                            <div class="form brif__window">
                                <input type="text" name="username" class="input brif__input" id="brif-name" placeholder="Ваше имя">
                            </div> 
                            <div class="form brif__window">
                                <input type="tel" name="phone" class="input brif__input" id="brif-phone" placeholder="Ваш телефон">
                            </div>
                                <button class="button brif__button">Рассчитать стоимость</button>
                            <span class="shape__description">Мы перезвоним Вам в течение 60 секунд</span>
                        </form>
                    </div>
                    <!-- /.form brif__form -->
                </div>
                <!-- /.brif-block -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section brif -->
        <!-- /.offer -->  
    </main>

    <footer class="footer">
        <div class="footer-block">
            <div class="maps">
                <div class="ymap-container">
                    <div class="loader loader-default"></div>
                    <div id="map-yandex"></div>
                </div><!-- .ymap-container -->
            </div>
            <div class="container">
                <div class="contacts-block">
                    <div class="contacts">
                        <h3 class="contacts__title">Приезжайте к нам в гости! Проконсультируем Вас<br>по всем вопросам ремонта</h3>
                        <ul class="contacts-list">
                            <li class="contacts-list__item">
                                <span class="contacts-list__icon">
                                    <img src="img/footer/map.png" alt="">
                                </span>
                                <span class="contacts-list__title">г. Москва</span> 
                                <span class="contacts-list__subtitle">ул. Ленинга, д. 10, корпус 2, оф. 308</span>
                            </li>
                            <li class="contacts-list__item">
                                <span class="contacts-list__icon">
                                    <img src="img/footer/clock.png" alt="">
                                </span>
                                <span class="contacts-list__title">Режим работы: </span>
                                <span class="contacts-list__subtitle">с 9:00 до 18:00</span>
                            </li>
                            <li class="contacts-list__item">
                                <span class="contacts-list__icon">
                                    <img src="img/footer/phone.png" alt="">
                                </span>
                                <span class="contacts-list__title">Телефон: </span>
                                <a href="tel:+7(495)42-251-31" class="contacts-list__phone">+ 7 (495) 42-251-31</a>
                            </li>
                        </ul>
                        <!-- /.contacts-list -->
                    </div>
                    <!-- /.contacts -->
                </div>
                <!-- /.container-block -->
            </div>
        </div>
    </footer>


    <div class="modal" id="modal">
        <div class="modal-dialog">
            <button class="modal-dialog__close" id="close">&times;</button>
            <h2 class="modal-dialog__title">Узнайте точную стоимость ремонта по телефону!</h2>
            <span class="modal-dialog__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
            <form action="mail.php" method="POST"  class="form modal-dialog__form" id="modal-form">
                <div class="form modal-dialog__window">
                    <input type="text" name="username" class="input modal-dialog__input" id="modal-name" placeholder="Ваше имя">
                </div>
                <div class="form modal-dialog__window">
                    <input type="tel" name="phone" class="input modal-dialog__input" id="modal-phone" placeholder="Ваш телефон">
                </div>
                <button class="button modal-dialog__button">Узнать стоимость</button>
            </form>
            <span class="modal-dialog__contacts">Или Вы можете перезвонить нам сами по телефону:</span>
            <a href="tel:+7(8182)42-51-31" class="modal-dialog__contacts-phone">+7 (8182) 42-51-31</a>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Кнопка Наверх -->
    <div class="button-main" id="upbutton">
        <button class="back-button">Наверх</button>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/modal.js"></script>
    <script src="js/button-back.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slider-slick.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/map.js"></script>

</body>
</html>