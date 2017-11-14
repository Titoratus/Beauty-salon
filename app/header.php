<?php
	$con = mysqli_connect("localhost", "root", "", "salon");
	$query = mysqli_query($con, "SET NAMES UTF8");
	$query = mysqli_query($con, "SET CHARACTER SET UTF8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title><?php echo $page == "contact" ? "Контакты" : ($page == "services" ? "Услуги" : "La Bouclette") ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/font-loader.js"></script>
</head>
<body <?php echo $page == "Услуги" ? "class='section-services'" : "" ?>>
<header class="header">
	<div class="l-container">
		<div class="header__logo"></div>
		<nav class="header__menu">
			<div class="pull" style="display: none"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<ul class="menu">
				<li class="menu__elem"><a class="menu__link <?php echo $page == "main" ? "link_active" : "" ?>" href="index">Главная</a></li>
				<li class="menu__elem"><a class="menu__link" href="index#services">Услуги</a></li>			
				<li class="menu__elem"><a class="menu__link" href="services">Онлайн-запись</a></li>
				<li class="menu__elem"><a class="menu__link <?php echo $page == "contact" ? "link_active" : "" ?>" href="contact">Контакты</a></li>
			</ul>
		</nav>
		<div class="header__socials">
			<a href="<?php $info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM info")); echo $info["fb"]; ?>" target="_blank" class="socials__link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="<?php echo $info["vk"]; ?>" target="_blank" class="socials__link"><i class="fa fa-vk" aria-hidden="true"></i></a>
			<a href="<?php echo $info["inst"]; ?>" target="_blank" class="socials__link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
	</div>
</header>