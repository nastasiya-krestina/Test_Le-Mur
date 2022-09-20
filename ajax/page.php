<?php
    //получаем данные пришедшие post
    $name=$_POST[name];
    $tel=$_POST[tel];
    $email=$_POST[email];
    $text=$_POST[text];

    $subject = "=?utf-8?B".base64_encode("Сообщение с сайта")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    $success = mail("stasy2403@yandex.ru", $subject, $message, $headers);
    echo $success;
    
?>