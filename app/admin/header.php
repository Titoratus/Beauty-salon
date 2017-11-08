<?php
	session_start();
	$con = mysqli_connect("localhost", "root", "", "salon");
	$query = mysqli_query($con, "SET NAMES UTF8");
	$query = mysqli_query($con, "SET CHARACTER SET UTF8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page; ?></title>
	<script src="../js/font-loader.js"></script>
	<link rel="stylesheet" href="../css/libs.min.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body <?php if($page == "Вход") echo "class='admin'"; ?>>
<?php if(isset($_SESSION["admin"])) { ?>
<nav class="admin-menu">
	<a href="../index"><div class="admin-logo"></div></a>
	<ul class="menu">
		<li class="admin-menu__elem"><a class="elem__link admin-records" href="#">Записи</a></li>
		<li class="admin-menu__elem"><a class="elem__link admin-services" href="#">Услуги</a></li>
		<li class="admin-menu__elem"><a class="elem__link admin-reviews <?php echo $page == 'Отзывы' ? 'elem__link_active' : '' ?>" href="reviews">Отзывы</a></li>
		<li class="admin-menu__elem"><a class="elem__link admin-contacts <?php echo $page == 'Контакты' ? 'elem__link_active' : '' ?>" href="main_info">Контакты</a></li>
	</ul>
</nav>
<?php } ?>	