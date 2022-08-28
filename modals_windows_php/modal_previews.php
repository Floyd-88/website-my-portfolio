<?php require_once "Connection.php" ?>

<?php
$db = new Connection();
$arr_prewies = $db->show_All_works();
foreach ($arr_prewies as $key => $prewies_elem) { ?>
    <div class="modal" id="previews<?php echo $prewies_elem["id"] ?>">
        <div class="modal__dialog">
            <button class="modal-close" type="button">
                <img src="../images/close.png" alt="close">
            </button>
            <div class="modal-work">
                <div class="modal-work__previews">
                    <div data-slider="slick">
                        <?php $arr_prewies_image = $db->show_image_modal_previews($prewies_elem["id"]);
                        foreach ($arr_prewies_image as $key => $prewies_image_elem) { ?>
                            <div>
                                <img class="modal-work__foto" src="<?php echo $prewies_image_elem["image_link"] ?>" alt="resturant">
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="modal-work__content">
                    <div class="modal-work__header">
                        <h3 class="modal-work__title"><?php echo $prewies_elem["name_work"] ?></h3>
                        <div class="modal-work__info">
                            <?php echo $prewies_elem["title"] ?><span
                                    class="modal-work__info-span">|</span> <?php echo $prewies_elem["date"] ?>
                        </div>
                    </div>

                    <div class="modal-work__client">
                        <div class="modal-work__client-title">Посмотреть:</div>
                        <div class="modal-work__client-company"><a target="_blink"
                                                                   href="<?php echo $prewies_elem["links_work"] ?>">Ссылка
                                на сайт</a></div>
                    </div>
                    <div class="modal-work__text">
                        <p><?php echo $prewies_elem["description_works"] ?>
                        </p>
                    </div>
                    <div class="modal-work__footer">
                        <button class="modal-work_btn modal-work_btn--back slickBack" type="button">
                            <img src="../images/next.png" height="12px" alt="back">
                            Back
                        </button>
                        <button class="modal-work_btn modal-work_btn--next slickNext" type="button">
                            Next
                            <img src="../images/next.png" height="12px" alt="next">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>