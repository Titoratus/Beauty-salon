<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title>La Bouclette</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/font-loader.js"></script>
</head>
<body>
<header class="header">
	<div class="l-container">
		<div class="header__logo"></div>
		<nav class="header__menu">
			<div class="pull" style="display: none"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<ul class="menu">
				<li class="menu__elem"><a class="menu__link <?php echo $page == "main" ? "link_active" : "" ?>" href="index">Главная</a></li>
				<li class="menu__elem"><a class="menu__link" href="index#services">Услуги</a></li>			
				<li class="menu__elem"><a class="menu__link" href="">Онлайн-запись</a></li>
				<li class="menu__elem"><a class="menu__link <?php echo $page == "contact" ? "link_active" : "" ?>" href="contact">Контакты</a></li>
			</ul>
		</nav>
		<div class="header__socials">
			<span class="socials__link"><i class="fa fa-facebook" aria-hidden="true"></i></span>
			<span class="socials__link"><i class="fa fa-vk" aria-hidden="true"></i></span>
			<span class="socials__link"><i class="fa fa-instagram" aria-hidden="true"></i></span>
		</div>
	</div>
</header>