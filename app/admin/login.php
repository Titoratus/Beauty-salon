<?php
	$page = "Вход";
	include("header.php");
	if(isset($_SESSION["admin"])) header("Location: main_info");
?>
<form id="login" class="login" method="POST" action="">
	<div class="error"></div>
	<h1 class="login__title">La Bouclette</h1>
	<input type="text" name="nick" class="login__nick" required autocomplete="off">
	<input type="password" name="pass" class="login__pass" required>
	<input type="submit" value="Войти" class="login__submit">
	<a class="login__forgot" href="#">Забыли пароль?</a>
</form>
<?php include("footer.php"); ?>