<?php 
session_start();
if (!$_SESSION['user']) {
  header('Location: signin.php');
}
 ?>
<!DOCTYPE html>
<html ng-app="beingZeroApp" ng-controller="beingZeroCtrl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/registration.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/user_profile.css">
<!-- <link rel="stylesheet" type="text/css" href="css/media.css"> -->


<link rel="stylesheet" type="text/css" href="../../css/fonts.css">

</head>
<body>
	<!-- это все не правильно, то что все в форме -->





<!------ Include the above in your HEAD tag ---------->

<!-- HEADER -->

<nav class="navbar navbar-expand-md navbar-light sticky-top" id="nav_menu">
  	  	<div class="container-fluid" >

  		
  		
  		<a href="../../index.html" class="navbar-brand"><h3 class="logo">Leader <span>.uz</span></h3></a>
  		
  		</div>  

  </nav> 

<!-- HEADER -->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="<?=$_SESSION['user']['avatar'] ?>" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?=$_SESSION['user']['full_name'] ?>
					</div>
					<div class="profile-usertitle-job">
						<?=$_SESSION['user']['email'] ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active user_menu">
							<a href="#" class="user_menu_a">
							<i class="far fa-chart-bar"></i>
							Рейтинг </a>
						</li>
						<li class="user_menu">
							<a href="#!add_participant" class="user_menu_a">
							<i class="fas fa-user-plus"></i>
							Добавить участника </a>
						</li>
						<li class="user_menu">
							<a href="#" class="user_menu_a">
							<i class="fas fa-users-cog"></i>
							Настройки </a>
						</li>
						<li class="user_menu">
							<a href="../../vendoor/logout.php" class="logout">
							<i class="fas fa-sign-out-alt"></i>
							Выход </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
            	<div ng-view></div>
            </div>
		</div>
	</div>
</div>
<center>
<strong>Powered by <a href="" target="_blank"></a></strong>
</center>
<br>
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script type="text/javascript" src="../../js/spa.js"></script>


</body>
</html>
