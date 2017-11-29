<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$to = "hn@wnstudio.ru";
$subject = "Заявка на аудит";
$text =  "Написал(а): $name\n Контактный телефон - $phone\n\n email: $email\n";
$header.= "Content-type: text/html; charset=utf-8\r\n";
$header .= "MIME-Version: 1.0\r\n";
$mail = mail($to, $subject, $text, $headers);
if($mail){
   echo "success";
} else {
        echo "errorMSG";
    }
?>
