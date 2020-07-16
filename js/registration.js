/*Авторизация*/

$('.login-btn').click(function (e){

		e.preventDefault();
		let full_name = $('.full_name').val(), 
					password = $('.password').val();

					$.ajax({
						url: '../../vendoor/authorization.php',
						type: 'POST',
						dataType: 'json',
						data: {
							full_name: full_name,
							password: password
						},
						success: function (data){




							if (data.status) {
								document.location.href = 'user_profile.php';
							}	
							else {

									if (data.type === 1) {
										data.fields.forEach(function(field){

										$(`input[name="${field}"]`).addClass('error');		


										});
									}
								
								$('.msg').removeClass('none').text(data.message);
							
							}
						}
					});



});

/*Получение автарки с поля*/
let avatar = false;

$('input[name="avatar"]').change(function(e){
	avatar = e.target.files[0];
});


/*Регистрация*/

$('.register-btn').click(function (e){

		e.preventDefault();
		let full_name = $('.full_name').val(), 
			email = $('.email').val(),
			phone_number = $('.phone_number').val(),
			password_confirm = $('.password_confirm').val(),
					password = $('.password').val();


					let formData = new FormData();
					formData.append('full_name', full_name);
					formData.append('password', password);
					formData.append('phone_number', phone_number);
					formData.append('avatar', avatar);
					formData.append('email', email);
					formData.append('password_confirm', password_confirm);

					$.ajax({
						url: '../../vendoor/signup.php',
						type: 'POST',
						dataType: 'json',
						processData: false,
						contentType: false,
						cache: false,
						data: formData,
						success: function (data){




							if (data.status) {
								document.location.href = 'signin.php';
							}	
							else {

									if (data.type === 1) {
										data.fields.forEach(function(field){

										$(`input[name="${field}"]`).addClass('error');		


										});
									}
								
								$('.msg').removeClass('none').text(data.message);
							
							}
						}
					});



});



