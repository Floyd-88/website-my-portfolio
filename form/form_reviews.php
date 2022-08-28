<?php
require_once "../Connection.php";
$db = new Connection();
//Для начала проверим есть ли данные в полях name и email, что бы не слать совсем пустые формы :)
//Если всё в порядке, то работаем дальше
if (isset($_POST["input_name"]) && isset($_POST["input_email"]) && isset($_POST["input_name_project"]) && isset($_POST["rating"])) {

//Принимаем данные POST-запроса и записываем значения в переменные
    $name = test_form($_POST['input_name']);
    $email = test_form($_POST['input_email']);
    $name_project = test_form($_POST['input_name_project']);
    $rating = test_form($_POST['rating']);
    $reviews = test_form($_POST['input_reviews']);

//Отправка отзыва в БД
    $db->despatchReviews($name, $email, $name_project, $rating, $reviews);
}
function test_form($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


