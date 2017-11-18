<?php
	$page = "Услуги";
	include("header.php");
?>
<main class="admin-main">
	<h1 class="section-title">Список всех услуг</h1>
	<table class="services-table">
		<tr>
			<th>Название услуги</th>
			<th>Категория</th>
			<th>Опции</th>
			<th>Стоимость</th>
		</tr>
		<?php
			$query = mysqli_query($con, "SELECT * FROM services");
			while($row = mysqli_fetch_array($query)){		
				$serv = $row["s_name"];
				$opt = mysqli_query($con, "SELECT * FROM options WHERE service='$serv'");
				$opt_num = mysqli_num_rows($opt);
				$k=0;
				while($option = mysqli_fetch_array($opt)){
					$k++;
					if($k == 1){ ?>
		<tr>
			<td class="service-name" rowspan="<?php echo $opt_num; ?>"><?php echo $row["s_name"]; ?><a data-del_serv="<?php echo $row["ID"]; ?>" class="del_serv"></a></td>
			<td rowspan="<?php echo $opt_num; ?>"><?php switch($row["category"]) {
									case "women":
										echo "Женск.";
										break;
									case "men":
										echo "Мужск.";
										break;		
									case "kids":
										echo "Детск.";
										break;																		
									case "olders":
										echo "Пенсионер";
										break;										
								} ?>							
				</td>		
					<td class="option"><?php echo $option["o_name"]; if ($opt_num > 1) {?><a data-del_opt="<?php echo $option['o_id']; ?>" class="del_opt"></a><?php } ?></td>
					<td><?php echo $option["price"]; ?></td>
					</tr>				
				<?php } else { ?>
					<tr>			
					<td class="option"><?php echo $option["o_name"]; if ($opt_num > 1) {?><a data-del_opt="<?php echo $option['o_id']; ?>" class="del_opt"></a><?php } ?></td>
					<td><?php echo $option["price"]; ?></td></tr>
				<?php } ?>
		<?php } } ?>
	</table>
	<form action="" method="POST" id="create-service">
		<label for="s-name" class="c-label">Новая услуга</label>
		<input id="s-name" name="s-name" type="text" class="c-input">
		<label for="serv-type" class="c-label">Категория</label>
		<select name="serv-type" class="c-select" id="serv-type">
			<option value="women">Женский зал</option>
			<option value="men">Мужской зал</option>
			<option value="kids">Детский зал</option>
			<option value="olders">Для пенсионеров</option>
		</select>
		<div class="options-block">
			<div class="c-input_small c-input_nomargin">
				<label for="opt-1" class="c-label">Опция 1</label>
				<input id="opt-1" name="opt-1" type="text" class="c-input">
			</div>
			<div class="c-input_small">
				<label for="price-1" class="c-label">Стоимость</label>
				<input type="text" class="c-input" id="price-1" name="price-1">				
			</div>
		</div>
		<input type="button" class="add-c-input" value="Добавить опцию">
		<input type="submit" value="Добавить услугу" class="c-input-save">
	</form>
</main>
<?php include("footer.php"); ?>