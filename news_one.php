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

    <section class="news-one">
        <div class="container news__container">
            <div class="title news__title">
                <svg class="title-marker" width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H14C21.732 0 28 6.26801 28 14H14C6.26801 14 0 7.73199 0 0Z" fill="#018ABE"/>
                </svg>
                <h2 class="heading news__heading">
                    Новый формат сеансов
                </h2>
                <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28 0H14C6.26801 0 0 6.26801 0 14H14C21.732 14 28 7.73199 28 0Z" fill="#018ABE"/>
                </svg>
            </div>
            <div class="news-one__contain">
                <p class="news__data news-one__data">
                    13.02.2022
                </p>
                <h3 class="news-one__contain-title">
                    Новый формат сеансов
                </h3>
                <p class="news-one__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget massa vitae tempus at pretium lacus viverra. Vitae libero vivamus quis enim quam vitae dictumst nulla duis. Sed nisl nibh et morbi tristique suspendisse morbi. Consequat facilisi tortor consectetur magnis odio. Risus, aenean tortor cras consectetur lacus, ut erat ac et. Fermentum aliquam ac egestas eget risus a. Maecenas sed pellentesque bibendum vitae at praesent sed. Amet pretium arcu gravida arcu ut dui sem quis id. Tristique in leo donec proin odio eget. Neque ut in egestas lacus sit nunc, nec. Proin mattis augue sit leo sagittis nam id accumsan. Pulvinar nunc fermentum vulputate ultrices pulvinar sed ultrices quis.
                </p>
                <p class="news-one__text">
                    Tempor facilisis tellus ac, odio. A amet congue tristique nibh malesuada lectus. Purus quam dapibus rhoncus iaculis amet tristique. Mattis fusce lorem fames mauris orci rhoncus, amet fringilla. Quis integer vitae at vitae urna etiam sed eu sit.
                </p>
                <p class="news-one__text">
                    Vitae turpis ullamcorper habitant fermentum aliquet volutpat. 
                </p>
            </div>
            <div class="news-one__img">
                <img src="img/news.png" alt="Новый формат сеансов">
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