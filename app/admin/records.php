<?php
	$page = "Записи";
	include("header.php");
?>
<main class="admin-main admin-main_long">
	<h1 class="section-title">Все записи</h1>
	<table class="services-table">
		<tr>
			<th>Имя клиента</th>
			<th>Номер телефона</th>
			<th>Email</th>
			<th>Услуга</th>
			<th>Опция</th>
			<th>Дата</th>
			<th>Время</th>
		</tr>
		<?php $query = mysqli_query($con, "SELECT * FROM records ORDER BY date DESC");
			while($row = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><div class="record__del" data-del_rec="<?php echo $row["id"]; ?>"></div><?php echo $row["name"]; ?></td>
			<td><?php echo $row["phone"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["service"]; ?></td>
			<td><?php echo $row["opt"]; ?></td>
			<td><?php if (strlen($row["date"]) == 5) { $date = substr_replace($row["date"], ".", 1, 0); $date = substr_replace($date, ".", 4, 0); } else { $date = substr_replace($row["date"], ".", 2, 0); $date = substr_replace($date, ".", 5, 0); } echo $date; ?></td>
			<td><?php echo substr_replace($row["time"], ":", 2, 0); ?></td>
		</tr>
		<?php } ?>
	</table>
	<h2 class="section-title">Записи на сегодня</h2>
	<?php
		$curr_date = date('j').date('m').date('y'); $query = mysqli_query($con, "SELECT * FROM records WHERE date='$curr_date' ORDER BY time ASC");
		if(mysqli_num_rows($query) == 0) { echo "<div style='text-align: center; margin-top: 35px;'>Нет записей.</div>"; }
		else {
	?>	
	<table class="services-table">
		<tr>
			<th>Имя клиента</th>
			<th>Номер телефона</th>
			<th>Email</th>
			<th>Услуга</th>
			<th>Опция</th>
			<th>Дата</th>
			<th>Время</th>
		</tr>
		<?php
			while($row = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><div class="record__del" data-del_rec="<?php echo $row["id"]; ?>"></div><?php echo $row["name"]; ?></td>
			<td><?php echo $row["phone"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["service"]; ?></td>
			<td><?php echo $row["opt"]; ?></td>
			<td><?php if (strlen($row["date"]) == 5) { $date = substr_replace($row["date"], ".", 1, 0); $date = substr_replace($date, ".", 4, 0); } else { $date = substr_replace($row["date"], ".", 2, 0); $date = substr_replace($date, ".", 5, 0); } echo $date; ?></td>
			<td><?php echo substr_replace($row["time"], ":", 2, 0); ?></td>
		</tr>
		<?php } } ?>
</main>
<?php include("footer.php"); ?>