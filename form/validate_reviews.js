$( document ).ready(function() {
	$('button[type="submit"]').click(function(){
console.log(111)
		/*Валидация полей формы*/
		jQuery.validator.setDefaults({
			debug: false,
			success: "valid",
			ignore: []

		});
		$('#form_reviews').validate({
			//Правила валидации
			rules: {
				input_name: {
					required: true,
				},
				input_email: {
					required: true,
					email: true,
				},
				input_name_project: {
					required: true,
				},
				rating: {
					required: true,
					range: [1, 5]
		},
				input_reviews: {
					maxlength: 650
				}
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
				input_name_project: {
					required: "Введите название проекта",
				},
				rating: {
					required: "Поставьте оценку",
				},
				input_reviews: {
					maxlength: "Вы превысели допустимое количество символов"
				}
			},

			/*Отправка формы в случае успеха валидации*/
			submitHandler: function(){
				sendAjaxForm('form_reviews', 'form/form_reviews.php'); //Вызываем функцию отправки формы
				return false;
			}
		});
	});

	function sendAjaxForm(form_reviews, url) {
		$.ajax({
			url: url, //url страницы
			type: "POST", //метод отправки
			dataType: "html", //формат данных
			data: $("#"+form_reviews).serialize(),  // Сеарилизуем объекты формы
			success: function(response) { //Данные отправлены успешно

				//Ваш код если успешно отправлено
				alert('Успешно отправлено!');
					setTimeout(function() {
						// Done Functions
						$('#form_reviews')[0].reset()
					}, 1000);
			},
			error: function(response) { // Данные не отправлены

				//Ваш код если ошибка
				alert('Ошибка отправления');
			}
		});

	}
});