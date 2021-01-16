<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css\animate.min.css">
    <link rel="stylesheet" href="css\animate.css">
    <title>О игре</title>
</head>

<body>
    <nav class='navigation'>
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a class="menu-link" href="index.php">Главная</a>
                <a class="menu-link" href="game.php">О игре</a>
                <a class="menu-link" href="#promo">Скачать</a>
                <a class="menu-link" href="policy.php">Политика конфиденциальности</a>
            </ul>
        </div>
    </nav>
    <main class="main">
        <section class="section about">
            <div class="container">
                <div class="about-bg"></div>
                <!-- /.about-bg -->
                <div class="about-content">
                    <h2 class="about-title wow fadeIn" data-wow-delay="0.5s">История ресторана<br>будущего!</h2>
                    <p class="about-subtitle wow fadeIn" data-wow-delay="1s">Действие игры происходит в 2077 году, человечество нашло способ полноценно
                        жить в космосе и люди убедились что они не одни во вселенной… И теперь человечество живёт в
                        гармонии с пришельцами. Главный герой игры – пришелец, который увидел людские рестораны и
                        загорелся желанием открыть свой космический ресторан, с целью охватить весь космос и накормить
                        всех обитателей вселенной вкусной едой.</p>
                </div>
                <!-- /.about-content -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section about -->
        <section class="section special">
            <div class="container">
                <div class="special-wrap">
                    <div class="special-content">
                        <h2 class="special-title wow fadeInLeft" data-wow-delay="0.5s">Интересные механики!</h2>
                        <p class="special-subtitle wow fadeInLeft" data-wow-delay="1s">Покупка в магазине украшений и улучшений для вашего ресторана, заказ
                            рекламы для привлечения больших посетителей, а также обслуживание ваших клиентов не заставит
                            вас заскучать!</p>
                        <a href="#promo"><button class="special-button button wow fadeInLeft" data-wow-delay="1.5s">Играть бесплатно</button></a>
                    </div>
                    <!-- /.special-content -->
                    <div class="special-bg wow fadeIn" data-wow-delay="2.5s">
                        <img class="special-image" style="transform: scaleX(-1);" src="img/2.png" width="450px"
                            alt="game-screenshot">
                    </div>
                    <!-- /.special-bg -->
                </div>
                <!-- /.special-wrap -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section special -->
        <section class="section info">
            <div class="container">
                <div class="info-wrap">
                    <div class="info-bg wow fadeIn" data-wow-delay="2.5s">
                        <img class="info-image" style="transform: scaleX(1);" src="img/3.png" width="500px"
                            alt="game-screenshot">
                    </div>
                    <!-- /.info-bg -->
                    <div class="info-content">
                        <h2 class="info-title wow fadeInRight" data-wow-delay="0.5s">Прокачивайте известность!</h2>
                        <p class="info-subtitle wow fadeInRight" data-wow-delay="1s">Чем больше известность вашего ресторана, тем больше возможностей у вас
                            появляется! Последовательная разблокировка ресторанных вещиц и украшений, а также повышение
                            посещаемости ресторана.</p>
                        <a href="#promo"><button class="info-button button wow fadeInRight" data-wow-delay="1.5s">Играть бесплатно</button></a>
                    </div>
                    <!-- /.info-content -->
                </div>
                <!-- /.info-wrap -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section info -->
        <section class="carousel-section">
            <h2 class="section-title carousel-title">Скриншоты игры</h2>
            <div class="carousel">
                <input type="checkbox" class="faux-ui-facia"> 
                <div class="slide" slide="6" annot="Скриншот магазина">
                  <img src="img/screens/5.jpg" width="230px" alt="Slide 6">
                </div>

                <input type="checkbox" class="faux-ui-facia"> 
                <div class="slide" slide="5" annot="Скриншот магазина">
                  <img src="img/screens/4.jpg" width="230px" alt="Slide 5">
                </div>
                
                <input type="checkbox" class="faux-ui-facia"> 
                <div class="slide" slide="4" annot="Скриншот магазина">
                  <img src="img/screens/3.jpg" width="230px" alt="Slide 4">
                </div>
              
                <input type="checkbox" class="faux-ui-facia"> 
                <div class="slide" slide="3" annot="Скриншот магазина">
                  <img src="img/screens/2.jpg" width="230px"  alt="Slide 3">
                </div>
              
                <input type="checkbox" class="faux-ui-facia">
                <div class="slide" slide="2" annot="Скриншот кухни">
                  <img src="img/screens/6.jpg" width="230px"  alt="Slide 2">
                </div>
              
                <input type="checkbox" class="faux-ui-facia">
              
                <div class="slide" slide="1" annot="Скриншот ресторана">
                  <img src="img/screens/1.jpg" width="230px" alt="Slide 1">
                </div>
               
              </div>
        </section>
        <!-- /.section carousel -->
        <section class="section promo" id="promo">
            <div class="promo-content">
                <h2 class="section-title promo-title">Скачать APK файл игры</h2>
                <div class="promo-link">
                    <a href="https://dropmefiles.com/tvxuc" class="download-link">
                        <button class="download-game">Скачать APK</button>
                    </a>
                </div>
                <img class="promo-image" src="img/1.png" alt="astronaut" width="300px">
                <img class="promo-image2" src="img/1.png" alt="astronaut" width="300px">
            </div>
            <!-- /.promo-content -->
        </section>
    </main>
    <!-- /.main -->
    <footer class="footer">
        <div class="container">
            <div class="footer-block">
                <div class="footer-main">
                    <h2 class="footer-title">Future Cafe</h2>
                    <p class="footer-subtitle">Играйте бесплатно на мобильном устройстве Android</p>
                    <span class="footer-copyright">© Future Cafe</span>
                </div>
                <!-- /.footer-main -->
                <div class="footer-info">
                    <a href="mailto:futurecafe@mail.ru" class="footer-email">E-mail: futurecafe@gmail.com</a>
                    <span class="footer-date">Все права защищены, 2021г.</span>
                </div>
                <!-- /.footer-info -->
            </div>
            <!-- /.footer-block -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>