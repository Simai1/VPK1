<meta http-equiv='refresh'>
<meta charset="UTF-8" />

<?php

$name = $_POST['name'];
$Phone_Number= $_POST['Namber'];
$email = $_POST['mail'];
$my_mail='moodbok@gmail.com';
$header = "Сообщение с сайта Extreme Group";

$mes= "ФИО: $name \nНомер телефона: $Phone_Number \nПочта отправителя: $email";
$send = mail($my_mail, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

if ($send == 'true') {
      echo "Сообщение отправлено!";
}

else {echo "Ой, что-то пошло не так";}


?>