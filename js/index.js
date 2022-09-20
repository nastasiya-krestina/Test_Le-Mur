window.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 50,
        centeredSlides: true,
        loop: true,
        autoHeight: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
            },
        },
    
        scrollbar: {
          hide: true,
        },
    });

    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {    
            center: [59.927739, 30.326846],
            zoom: 12,
            type: 'yandex#map'
        });

        var myPlacemarkOne = new ymaps.Placemark([59.929853, 30.369012], {}, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.svg',
            iconImageSize: [30, 38],
            iconImageOffset: [-3, -42]
        });

        var myPlacemarkTwo = new ymaps.Placemark([59.960951, 30.301433], {}, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.svg',
            iconImageSize: [30, 38],
            iconImageOffset: [-3, -42]
        });

        // Размещение геообъекта на карте.
        myMap.geoObjects.add(myPlacemarkOne);
        myMap.geoObjects.add(myPlacemarkTwo);
    }
});

var selector = document.querySelector("input[type='tel']");
var im = new Inputmask("+7 (999) 999-99-99");

im.mask(selector);

$(document).ready(function(){   
    $("#btn-send").click(function () {
        var name = $("#name").val().trim();
        //var tel = $("#tel").val().trim();
        var email = $("#email").val().trim();
        var text = $("#text").val().trim();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var address = $("#email").val();

        if(name.length < 2) {
            $("#error").text("Ошибка! Длина имени не может быть меньше 2 символов.");
            return false;
        } else if(tel.length < 10) {
            $("#error").text("Ошибка! Введите корректный телефон.");
            return false;
        } else if(reg.test(address) == false) {
            $("#error").text("Ошибка! Введите email.");
            return false;
        } 

        $("#error").text("");

        $.ajax({
            type: 'POST', //метод передачи данных
            url: '/ajax/main.php', //обработчик php
            cache: false,
            data: {'name': name, 'tel': tel, 'email': email, 'text': text},//передаваемые данные
            dataType: 'html',

            beforeSend: function() {
                $("#btn-send").prop("disabled", true);
            },

            success: function(data) { //получение результата
                alert(data);
                if(!data) 
                    alert("Сообщение не отправлено.");
                else 
                    $("#formSend").trigger("reset");

                $("#btn-send").prop("disabled", false);

                var old = $('.modal-header').html();//получаем содежимое div
                $('.modal-header').html(old); //добавляем сообщение об отправке
            },
        });
    });
});      