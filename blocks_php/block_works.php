<?php require_once "Connection.php" ?>

<div class="works" id="works">
    <div class="container">
        <div class="works__nav">
            <a class="works_nav-link" data-link="all" href="">Все</a>
            <a class="works_nav-link" data-link="2" href="">Приложения</a>
            <a class="works_nav-link" data-link="1" href="">Сайты</a>
            <a class="works_nav-link" data-link="3" href="">Interaction</a>

        </div>

        <div class="portfolio" id="showMoreWorks-list">
            <?php
            $db = new Connection();
            $arr_works = $db->show_works();

            foreach ($arr_works as $key => $work) { ?>
                <div class="portfolio__col" data-work="<?php echo $work["category_id"]; ?>">
                    <div class="work" data-btn="previews<?php echo $work["id"]; ?>" onclick="showModal(this)">
                        <img class="work__image" src="<?php echo $work["title_image"]; ?>" alt="">
                        <div class="work__content">
                            <div class="work__cat">
                                CATEGORY: <?php echo $work["title"]; ?>
                            </div>
                            <div class="work__title">
                                <?php echo $work["name_work"]; ?>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="text__center"><a data-page="1" data-max="<?php echo $db->count_works(); ?>"
                                     id="showmore-works-button" class="btn btn--sm" href="">Загрузить больше</a></div>
    </div>
</div>

