<?php
    //получаем данные пришедшие post
    $name=$_POST[name];
    $tel=$_POST[tel];
    $email=$_POST[email];
    $text=$_POST[text];

    $mess='name: '.$name.'tel: '.$tel.'email: '.$email.'; сообщение: '.$text;//сообщение
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";//кодировка 
    $headers .= "From: mail@email.ru";//откуда отправлено письмо
    //отправляем email админу
    if(mail('stasy2403@yandex.ru', 'Запись на сеанс', $mess, $headers)){
        echo 'Сообщение успешно отправлено!';
        } else{
            echo 'Ошибка! Сообщение не отправлено!';
    }
?>