<?php 

session_start();
require_once 'connect.php';


$full_name = $_POST['full_name'];
$password = $_POST['password'];

$error_fields = [];


if ($full_name === '') {

	$error_fields[] = 'full_name';

}
if ($password === '') {

	$error_fields[] = 'password';
	
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

$password = md5($password);

$check_users = mysqli_query($connect, "SELECT * FROM `users` WHERE `full_name` = '$full_name' AND `password` = '$password'");
if (mysqli_num_rows($check_users) > 0) {
	
		$user = mysqli_fetch_assoc($check_users);
		$_SESSION['user'] = [
			"id" => $user['id'],
			"full_name" => $user['full_name'],
			"avatar" => $user['avatar'],
			"email" => $user['email'],
			"phone_number" => $user['phone_number']

		];

		$response = [
				"status" => true 
		];
		
		echo json_encode($response);

} else{

	$response = [
				"status" => false,
				"message" => "Неправильный логин или пароль"
		];
	
	echo json_encode($response);
}

 ?>