$(document).ready(function () {
    $('button[type="submit"]').click(function () {

        /*Валидация полей формы*/
        $('#form_contact').validate({
            //Правила валидации
            rules: {
                input_name: {
                    required: true,
                },
                input_email: {
                    required: true,
                    email: true,
                },
                input_text: {
                    required: true,
                    minlength: 5,
                },

            },
            //Сообщения об ошибках
            messages: {
                input_name: {
                    required: "Пожалуйста, введите ваше имя",
                },
                input_email: {
                    required: "Пожалуйста, введите адрес вашей электронной почты",
                    email: "Введите корректный email",
                },
                input_text: {
                    required: "Введите сообщение",
                    minlength: "Напишите сообщение",
                },
            },

            /*Отправка формы в случае успеха валидации*/
            submitHandler: function () {
                sendAjaxForm('form_contact', 'form/form_contact.php'); //Вызываем функцию отправки формы
                return false;
            }
        });
    });

    function sendAjaxForm(form_contact, url) {
        $.ajax({
            url: url, //url страницы
            type: "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#" + form_contact).serialize(),  // Сеарилизуем объекты формы
            success: function (response) { //Данные отправлены успешно

                //Ваш код если успешно отправлено
                alert('Успешно отправлено!');
                setTimeout(function () {
                    // Done Functions
                    $('#form_contact')[0].reset()
                }, 1000);
            },
            error: function (response) { // Данные не отправлены

                //Ваш код если ошибка
                alert('Ошибка отправления');
            }
        });

    }
});