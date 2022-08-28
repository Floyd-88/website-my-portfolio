<div class="modal" id="add-new-reviews">
    <div class="modal__dialog modal__dialog--sm">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>

        <div class="contact">
            <div class="contact__left contact__left-reviews">
                <!--                <h3 class="modal__title mb-0">Напишите отзыв</h3>-->
                <!--                <div class="modal__subtitle">Позвонить или написать мне</div>-->

                <form id="form_reviews" action="">
                    <div class="form__group">
                        <label class="form__label" for="input-name">Ваше имя</label>
                        <input class="form__input" type="text" name="input_name" id="input-name"
                               placeholder="Укажите Ваше имя"
                               value="<?php if (!empty($_POST['input_name'])) echo $_POST['input_name'] ?>">
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="input-email">Адрес e-mail</label>
                        <input class="form__input" type="text" name="input_email" id="input-email"
                               placeholder="Адрес e-mail"
                               value="<?php if (!empty($_POST['input_email'])) echo $_POST['input_email'] ?>">
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="input-name-project">Название проекта</label>
                        <input class="form__input" type="text" name="input_name_project" id="input-name-project"
                               placeholder="Название проекта"
                               value="<?php if (!empty($_POST['input_name_project'])) echo $_POST['input_name_project'] ?>">
                    </div>
                    <div class="form__group">
                        <p class="form__label" for="rating">Ваша оценка</p>
                        <div class="rating-area">
                            <input type="radio" id="star-5" name="rating" value="5">
                            <label for="star-5" title="Оценка «5»"></label>
                            <input type="radio" id="star-4" name="rating" value="4">
                            <label for="star-4" title="Оценка «4»"></label>
                            <input type="radio" id="star-3" name="rating" value="3">
                            <label for="star-3" title="Оценка «3»"></label>
                            <input type="radio" id="star-2" name="rating" value="2">
                            <label for="star-2" title="Оценка «2»"></label>
                            <input type="radio" id="star-1" name="rating" value="1">
                            <label for="star-1" title="Оценка «1»"></label> <br>
                        </div>
                        <label id="rating-error" class="error" for="rating"></label>
                    </div>
                    <div class="form__group">
                        <label class="form__label" for="input-reviews">Ваш отзыв</label>
                        <textarea class="form__textarea" placeholder="Оставьте Ваш отзыв о работе"
                                  name="input_reviews"
                                  id="input-reviews-text"><?php if (!empty($_POST['input_reviews'])) echo $_POST['input_reviews'] ?></textarea>
                    </div>
                    <div class="text__right">
                        <button class="btn" type="submit">Отправить</button>
                    </div>
                </form>

            </div>
            <div class="contact__right contact__right-reviews"></div>
        </div>

    </div>
</div>