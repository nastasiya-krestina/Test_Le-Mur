<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RitmStyle</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles/style_news.css">

</head>
<body>
    <?php
        include('form.php');
    ?>

    <?php
        include('header.php');
    ?>

    <section class="news">
        <div class="container news__container">
            <div class="title news__title">
                <svg class="title-marker" width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H14C21.732 0 28 6.26801 28 14H14C6.26801 14 0 7.73199 0 0Z" fill="#018ABE"/>
                </svg>
                <h2 class="heading news__heading">
                    Новости
                </h2>
                <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28 0H14C6.26801 0 0 6.26801 0 14H14C21.732 14 28 7.73199 28 0Z" fill="#018ABE"/>
                </svg>
            </div>
            <div class="news__item news__item-one">
                <p class="news__data">
                    13.02.2022
                </p>
                <a href="news_one.php">
                    <h2 class="news__card-title">
                        Новый формат сеансов
                    </h2>
                </a>
                
            </div>
            <div class="news__item news__item-two">
                <p class="news__data">
                    13.02.2022
                </p>
                <a href="#">
                    <h2 class="news__card-title">
                        Новый формат сеансов
                    </h2>
                </a>
            </div>
            <div class="news__item news__item-three">
                <p class="news__data">
                    13.02.2022
                </p>
                <a href="#">
                    <h2 class="news__card-title">
                        Новый формат сеансов
                    </h2>
                </a>
            </div>
            <div class="news__item news__item-four">
                <p class="news__data">
                    13.02.2022
                </p>
                <a href="#">
                    <h2 class="news__card-title">
                        Новый формат сеансов
                    </h2>
                </a>
            </div>
            <div class="news__item news__item-five">
                <p class="news__data">
                    13.02.2022
                </p>
                <a href="#">
                    <h2 class="news__card-title">
                        Новый формат сеансов
                    </h2>
                </a>
            </div>
            <div class="news__item news__item-six">
                <p class="news__data">
                    13.02.2022
                </p>
                <a href="#">
                    <h2 class="news__card-title">
                        Новый формат сеансов
                    </h2>
                </a>
            </div>  

        </div>
    </section>

    <?php
        include('footer.php');
    ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" defer></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=вашAPI-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="js/inputmask.min.js" defer></script>
    <script src="js/just-validate.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    <script src="js/index.js" defer></script>
</body>
</html>