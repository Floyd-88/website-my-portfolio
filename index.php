<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:wght@100;400&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
            integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
    <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>My portfolio</title>
</head>

<body>
<!-- block header -->
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="user">
                <div class="user__avatar">
                    <img src="https://pixelbox.ru/wp-content/uploads/2021/05/ava-vk-animal-91.jpg" alt="">
                </div>
                <div class="user__content">
                    <div class="user__name">Илья <br>Сазонов</div>
                    <div class="user__prof">frontend developer</div>
                </div>
            </div>
            <div class="nav" id="nav">
                <a class="nav__link active" href="#works">Работы</a>
                <a class="nav__link" href="#aboutMe">Обо мне</a>
                <a class="nav__link" href="#news">Новости</a>
                <!-- <a class="nav__link" href="#">Контакты</a> -->
                <a class="nav__link nav__link--btn" data-btn="contact" href="#" onclick="showModal(this)">Мои
                    контакты</a>
            </div>
            <button class="burger" id="burger" type="button">
                <img class="burger__icon" src="images/burger.png" alt="">
            </button>
        </div>
    </div>
</header>

<!-- block intro -->
<?php require_once "blocks_php/block_intro.php"?>

<!-- block works -->
<?php require_once "blocks_php/block_works.php" ?>

<!-- block about me -->
<?php require_once "blocks_php/block_about_me.php"?>

<!-- block reviews -->
<?php require_once "blocks_php/block_reviews.php"; ?>

<!-- block news -->
<?php require_once 'blocks_php/block_news.php'; ?>

<!-- block footer -->
<?php require_once "blocks_php/block_footer.php"?>

<!-- Modals -->
<!--modal window previews work-->
<?php require_once "modals_windows_php/modal_previews.php" ?>

<!--modal window resume-->
<?php require_once "modals_windows_php/modal_resume.php" ?>

<!--modal window contacts-->
<?php require_once "modals_windows_php/modal_contacts.php" ?>

<!--modal window add reviews-->
<?php require_once "modals_windows_php/modal_reviews.php" ?>

</div>

<script src="slick.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script src="form/validate_contact.js"></script>
<script src="form/validate_reviews.js"></script>
<script src="ajax/add_news.js"></script>
<script src="ajax/add_works.js"></script>

</body>
</html>