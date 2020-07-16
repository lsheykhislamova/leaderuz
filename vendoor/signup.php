<?php 

session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `full_name` = '$full_name'");
if (mysqli_num_rows($check_login)>0) {
	$response = [
		"status" => false,
		"message" => "Пользователь с таким именем уже существует",
		"fields" => ['full_name'] 
	];

	echo  json_encode($response);

	die();
	
 
}


$error_fields = [];


if ($full_name === '') {

	$error_fields[] = 'full_name';

}
if ($password === '') {

	$error_fields[] = 'password';
	
}
if ($phone_number === '') {

	$error_fields[] = 'phone_number';
	
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

	$error_fields[] = 'email';
	
}
if ($password_confirm === '') {

	$error_fields[] = 'password_confirm';
	
}
if (!$_FILES['avatar']) {

	$error_fields[] = 'avatar';
	
}

if (!empty($error_fields)) {

	$response = [
		"status" => false,
		"type" => 1,
		"message" => "Проверьте правильность полей",
		"fields" => $error_fields 
	];

	echo  json_encode($response);

	die();
	
} 




	if ($password === $password_confirm) {
		//$_FILES['avatar']['name']
		$path = 'uploads/' . time() . $_FILES['avatar']['name'];
		
		if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
			$response = [
		"status" => false,
		"type" => 2,
		"message" => "ошибка при загрузке аватарки",
		
	];

	echo  json_encode($response);

		}


		$password = md5($password);

		mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `phone`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$phone_number', '$email', '$password', '$path')");

		$response = [
		"status" => true,
		"message" => "Регистрация прошла успешно!"
		 
	];

	echo  json_encode($response);

		
	} else {
		$response = [
		"status" => false,
		"message" => "Пароли не совпадают!"
		 
	];

	echo  json_encode($response);
		
	}

 ?>