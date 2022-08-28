<div class="modal" id="contact">
    <div class="modal__dialog modal__dialog--sm">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>

        <div class="contact">
            <div class="contact__left">
                <h3 class="modal__title mb-0">контакты</h3>
                <div class="modal__subtitle">Позвонить или написать мне</div>

                <ul class="contact_info">
                    <li class="contact_info-item">
                        <img class="contact_info-icon" style="width: 20px;" src="images/phone.png" alt="phone">
                        8-905-411-06-92
                    </li>
                    <li class="contact_info-item">
                        <img class="contact_info-icon" style="width: 20px;" src="images/email.png" alt="email">
                        ilasaz1988@gmail.com
                    </li>
                </ul>

                <form id="form_contact" action="">
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
                        <label class="form__label" for="input-text">Сообщение</label>
                        <textarea class="form__textarea" placeholder="Введите ваше сообщение..." name="input_text"
                                  id="input-text">  <?php if (!empty($_POST['input_text'])) echo $_POST['input_text'] ?> </textarea>
                    </div>
                    <div class="text__right">
                        <button class="btn" type="submit">Отправить</button>
                    </div>
                </form>

            </div>
            <div class="contact__right">
            </div>
        </div>

    </div>
</div>
