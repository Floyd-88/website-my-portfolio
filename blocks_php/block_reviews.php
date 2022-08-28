<?php
require_once 'Connection.php';
?>

<div class="reviews" id="reviews">-->
    <div class="container">


        <div data-slider="reviews" class="slide--parent">
            <?php
           $db = new Connection();
            $arr_reviews = $db->show_reviews();
            foreach ($arr_reviews as $key => $review) {
                ?>
            <div class="reviews__item parent--el">
                <div class="two--col">
                    <div class="is-item has--content">
                        <div class="is-item--inner">
                            <div class="reviews__text" data-slider="reviews">
                                <p>
                                    <?php echo $review['reviews'] ?>
                                </p>
                            </div>
                            <div class="reviews__author">
                                <img class="reviews__foto"
                                     src="https://www.meme-arsenal.com/memes/b877babd9c07f94b952c7f152c4e264e.jpg"
                                     alt="ava">
                                <div class="reviews__name"><?php echo $review['name'] ?></div>
                                <div class="reviews__company"><?php echo $review['name_project'] ?></div>

                                <div class="rating">
                                    <?php
                                    $n = 1;
                                    while($n<= $review['rating'] ) {?>
                                        <div class="star"></div>
                                    <?php $n++; } ?>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
        <div class="block-btn-reviews">
            <button class="btn btn-reviews" data-btn="add-new-reviews" onclick="showModal(this)">Добавить отзыв</button>
        </div>

    </div>
</div>