<?php 
session_start();

if ($_SESSION['user']) {
  header('Location: user_profile.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/registration.css">

<link rel="stylesheet" type="text/css" href="../../css/main.css">
<!-- <link rel="stylesheet" type="text/css" href="css/media.css"> -->


<link rel="stylesheet" type="text/css" href="../../css/fonts.css">

</head>

  <body>

  	<head>
  		<nav class="navbar navbar-expand-md navbar-light sticky-top" id="nav_menu">
  	  	<div class="container-fluid" >

  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="background-color: #fff;">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<a href="#" class="navbar-brand"><h3 class="logo">Leader <span>.uz</span></h3></a>
  		<div class="collapse navbar-collapse" id="navbarResponsive">
  			
  			<ul class="navbar-nav ml-auto">
  				<li class="nav-item active"><a href="#" class="nav-link">Главная</a></li>
  				<!-- <li class="nav-item"><a href="#" class="nav-link">О нас</a></li> -->
  				<!-- <li class="nav-item"><a href="#" class="nav-link">Услуги</a></li> -->
  				<li class="nav-item"><a href="#" class="nav-link">Мой профиль</a></li>
  				<li class="nav-item"><a href="signin.php" class="nav-link">Регистрация</a></li>
  			</ul>
  		</div>
  		</div>  

  </nav> 
  	</head>

  	<!-- Форма регистрации -->
<main class="reg-main">
  	<form class="form">
  		<label>Логин</label>
  		<input class="in-registr full_name" type="text" name="full_name" placeholder="Ваше имя или название компании">
  		<label>Мобильный номер</label>
  		<input class="in-registr phone_number" type="tel" name="phone_number" placeholder="98 123 45 67">
  		<label>Аватарка профиля</label>
  		<input class="in-registr avatar" type="file" name="avatar" placeholder="Загрузите изображение">
  		<label>Почта</label>
  		<input class="in-registr email" type="email" name="email" placeholder="Введите email ">
  		<label>Пароль</label>
  		<input class="in-registr password" type="password" name="password" placeholder="Введите пароль">
  		<label>Подтверждение пароля</label>
  		<input class="in-registr password_confirm" type="password" name="password_confirm" placeholder="Подтвердите пароль">
  		<button class="register-btn" type="submit">Зарегистрироваться</button>
  		<p>
  			У вас уже есть аккунт? <a href="signin.php" class="in-link">Авторизоваться</a>
  		</p>
  		<p class="msg none"> lorem</p>
  		
  	</form>
</main>
 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="../../js/registration.js"></script>
 </body>
 </html>