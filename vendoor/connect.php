<?php 

//mysqli_connect

$connect = mysqli_connect('localhost', 'root', '', 'leader');

if (!$connect) {
	die('Error connect to DataBase');
}

 ?>