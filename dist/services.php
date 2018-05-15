<?php
	$page = "Услуги";
	include("header.php");
?>

<div class="l-services">
	<div class="l-container">
		<div class="services" data-aos="fade-up">
			<h1 class="section-title">Наши услуги</h1>
		  <ul class="services__menu">
		    <li class="hall"><a class="nomargin hall__link hall__link_active hall__women" href="#tabs-1">Женский зал</a></li>
		    <li class="hall"><a class="hall__link hall__men" href="#tabs-2">Мужской зал</a></li>
		    <li class="hall"><a class="hall__link" href="#tabs-3">Детский зал</a></li>
		    <li class="hall"><a class="hall__link hall__old" href="#tabs-4">Для пенсионеров</a></li>
		  </ul>
		  <div id="tabs-1">
		  	<?php
		  		$query = mysqli_query($con, "SELECT * FROM services WHERE category='women'");
		  		while($row = mysqli_fetch_array($query)){
		  	?>
		  	<div class="service">
		  		<h2 class="service__title"><?php echo $row["s_name"]; ?></h2>
		  		<table class="opt">
		   		<?php
		   			$serv = $row["s_name"]; $opt = mysqli_query($con, "SELECT * FROM options WHERE service='$serv'");
		   			while($option = mysqli_fetch_array($opt)){
		   		?>
						<tr>
							<td class="opt__elem opt__name"><?php echo $option["o_name"]; ?></td>
							<td class="opt__elem opt__price"><?php echo $option["price"]." руб."; ?></td>
							<td class="opt__elem"><div class="enroll" data-enroll="<?php echo $option["o_id"]; ?>">Записаться</div></td>
						</tr>
		   		<?php } ?>
		   	</table>
		   	</div>
		    <?php } ?>
		  </div>
		  <div id="tabs-2">
		  	<?php
		  		$query = mysqli_query($con, "SELECT * FROM services WHERE category='men'");
		  		while($row = mysqli_fetch_array($query)){
		  	?>
		  	<div class="service">
		  		<h2 class="service__title"><?php echo $row["s_name"]; ?></h2>
		  		<table class="opt">
		   		<?php
		   			$serv = $row["s_name"]; $opt = mysqli_query($con, "SELECT * FROM options WHERE service='$serv'");
		   			while($option = mysqli_fetch_array($opt)){
		   		?>
						<tr>
							<td class="opt__elem opt__name"><?php echo $option["o_name"]; ?></td>
							<td class="opt__elem opt__price"><?php echo $option["price"]." руб."; ?></td>
							<td class="opt__elem"><div class="enroll" data-enroll="<?php echo $option["o_id"]; ?>">Записаться</div></td>
						</tr>
		   		<?php } ?>
		   	</table>
		   	</div>
		    <?php } ?>
		  </div>
		  <div id="tabs-3">
		  	<?php
		  		$query = mysqli_query($con, "SELECT * FROM services WHERE category='kids'");
		  		while($row = mysqli_fetch_array($query)){
		  	?>
		  	<div class="service">
		  		<h2 class="service__title"><?php echo $row["s_name"]; ?></h2>
		  		<table class="opt">
		   		<?php
		   			$serv = $row["s_name"]; $opt = mysqli_query($con, "SELECT * FROM options WHERE service='$serv'");
		   			while($option = mysqli_fetch_array($opt)){
		   		?>
						<tr>
							<td class="opt__elem opt__name"><?php echo $option["o_name"]; ?></td>
							<td class="opt__elem opt__price"><?php echo $option["price"]." руб."; ?></td>
							<td class="opt__elem"><div class="enroll" data-enroll="<?php echo $option["o_id"]; ?>">Записаться</div></td>
						</tr>
		   		<?php } ?>
		   	</table>
		   	</div>
		    <?php } ?>
		  </div>
		  <div id="tabs-4">
		  	<?php
		  		$query = mysqli_query($con, "SELECT * FROM services WHERE category='olders'");
		  		while($row = mysqli_fetch_array($query)){
		  	?>
		  	<div class="service">
		  		<h2 class="service__title"><?php echo $row["s_name"]; ?></h2>
		  		<table class="opt">
		   		<?php
		   			$serv = $row["s_name"]; $opt = mysqli_query($con, "SELECT * FROM options WHERE service='$serv'");
		   			while($option = mysqli_fetch_array($opt)){
		   		?>
						<tr>
							<td class="opt__elem opt__name"><?php echo $option["o_name"]; ?></td>
							<td class="opt__elem opt__price"><?php echo $option["price"]." руб."; ?></td>
							<td class="opt__elem"><div class="enroll" data-enroll="<?php echo $option["o_id"]; ?>">Записаться</div></td>
						</tr>
		   		<?php } ?>
		   	</table>
		   	</div>
		    <?php } ?>
		  </div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>