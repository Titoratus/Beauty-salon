<?php
	$page = "Контакты";
	include("header.php");
?>
<main class="admin-main">
	<h1 class="section-title">Контакты</h1>
	<div class="success-msg"></div>
	<form class="info" action="" method="POST">
		<label class="c-label" for="addr">Адрес</label>
		<input class="c-input" id="addr" name="addr" type="text" value="<?php $info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM info")); echo $info["address"]; ?>">
		<label class="c-label" for="hours">Часы работы</label>
		<input class="c-input" id="hours" name="hours" type="text" value="<?php echo $info["hours"]; ?>">
		<div class="c-input_small c-input_nomargin">
			<label class="c-label" for="email">Email</label>
			<input class="c-input" id="email" name="email" type="text" value="<?php echo $info["email"]; ?>">		
		</div>
		<div class="c-input_small">
			<label class="c-label" for="phone">Телефон</label>
			<input class="c-input" id="phone" name="phone" type="text" value="<?php echo $info["phone"]; ?>">			
		</div>
		<div class="c-input_small c-input_nomargin">
			<label class="c-label" for="vk">Вконтакте</label>
			<input class="c-input" id="vk" name="vk" type="text" value="<?php echo $info["vk"]; ?>">			
		</div>
		<div class="c-input_small">
			<label class="c-label" for="inst">Instagramm</label>
			<input class="c-input" id="inst" name="inst" type="text" value="<?php echo $info["inst"]; ?>">			
		</div>
		<label class="c-label" for="fb">Facebook</label>
		<input class="c-input" id="fb" name="fb" type="text" value="<?php echo $info["fb"]; ?>">			
		<input class="c-input-save" type="submit" value="Сохранить">
	</form>
</main>
<?php include("footer.php"); ?>