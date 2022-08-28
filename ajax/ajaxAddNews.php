<?php
require_once('../Connection.php');

// Кол-во элементов
//$limit = 3;

//// Подключение к БД
$db = new Connection();
$arr = $db->get_news_ajax();

foreach ($arr as $key => $elem_news) {
    ?>
    <div class="articles_col">
        <div class="articles_item">
            <div class="articles_header">
                <!-- <div class="articles_date">04 <br> апреля</div> -->
                <div class="articles_foto">
                    <a target="_blank" href="/redirect.php?id=<?php echo $elem_news['id'] ?>"> <img
                                src="<?php echo $elem_news['img'] ?>" alt="<?php echo $elem_news['alt_img'] ?>"></a>
                </div>
            </div>
            <div class="articles_content">
                <h4 class="articles_title">
                    <a target="_blank"
                       href="/redirect.php?id=<?php echo $elem_news['id'] ?>"><?php echo $elem_news['title'] ?></a>
                </h4>
                <div class="articles_cat_views">
                    <div class="articles_cat"><?php echo $elem_news['categorie_name'] ?></div>

                    <div class="snp-topview-view" title="<?php echo $elem_news['views'] ?> просмотров">
                        <img height="16" width="25" src="/images/icon_count.png" alt="count">
                        <span><?php echo $elem_news['views'] ?></span>
                    </div>
                </div>
                <div class="articles_text"><?php echo $elem_news['text'] ?></div>
            </div>
        </div>
        <a target="_blank" class="btn btn--sm btn--sm--n" href="/redirect.php?id=<?php echo $elem_news['id'] ?>">Подробнее</a>
    </div>
    <?php
}
?>
