<?php
require_once "../Connection.php";

//Для начала проверим есть ли данные в полях name и email, что бы не слать совсем пустые формы :)
//Если всё в порядке, то работаем дальше
if (isset($_POST["input_name"]) && isset($_POST["input_email"]) && isset($_POST["input_text"])) {

//Принимаем данные POST-запроса и записываем значения в переменные
    $name = test_form($_POST['input_name']);
    $email = test_form($_POST['input_email']);
    $text = test_form($_POST['input_text']);

//Теперь давайте настроим куда отправляем и откуда

    $my_email = 'mail@it-floyd.site'; // Куда отправляем
    $sender_email = '<robot@mysite.ru>'; // От кого отправляем
    $title = "Заголовок сообщения";

//Сообщение, которое приходит на почту со всеми нужными нам данными:

    $mes = "
 Имя: $name\n
  E-mail: $email\n
 Текст: $text\n
";

//Всё, теперь можно отправлять письмо на почту
    $send = mail($my_email, $title, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$sender_email");


//Отправка в БД
    $db = new Connection();
    $db->despatchMessage($name, $email, $text);
}

function test_form($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


