<?php
require_once('../Connection.php');
?>
<?php
//// Подключение к БД
$db = new Connection();
$arr = $db->get_works_ajax();
foreach ($arr as $key => $elem_work) { ?>
    <div class="portfolio__col" data-work="<?php echo $elem_work["category_id"]; ?>">
        <div class="work" data-btn="previews<?php echo $elem_work["id"]; ?>" onclick="showModal(this)">
            <img class="work__image" src="<?php echo $elem_work["title_image"]; ?>" alt="">
            <div class="work__content">
                <div class="work__cat">
                    CATEGORY: <?php echo $elem_work["title"]; ?>
                </div>
                <div class="work__title">
                    <?php echo $elem_work["name_work"]; ?>
                </div>

            </div>
        </div>
    </div>
<?php } ?>
