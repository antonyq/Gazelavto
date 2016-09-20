<?php
if (array_key_exists('fb-message', $_POST)) {
    $to = 'antonyq@ukr.net';
    $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
    $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
    $message = "Имя: ".$_POST['fb-name']."\nEmail: ".$_POST['fb-mail']."\nPhone: ".$_POST['fb-phone']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['fb-message'];
    $headers = 'Content-type: text/plain; charset="utf-8"';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: ".date('D, d M Y h:i:s O') ."\r\n";
    mail($to, $subject, $message, $headers);
    echo "yeah !!!";
}
?>