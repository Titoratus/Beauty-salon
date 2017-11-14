<?php
$page = "Отзывы";
include("header.php");
?>
<main class="admin-main">
			<h1 class="section-title">Отзывы</h1>
			<?php
				$query = mysqli_query($con, "SELECT * FROM reviews");
				while($review = mysqli_fetch_array($query)){
			?>
			<div class="review_admin">
				<div class="review__text_admin"><?php echo $review["message"]; ?></div>
				<a href='<?php echo $review["link"]; ?>' target="_blank" class="review__author_admin"><?php echo $review["author"]; ?></a>
				<span class="review-del" data-id="<?php echo $review['ID']; ?>">Удалить</span>
			</div>
			<?php } ?>
			<form class="review-create" method="POST" action="">
				<label for="rev-msg" class="c-label">Сообщение</label>
				<textarea id="rev-msg" name="rev-msg" class="c-input" placeholder="Введите текст отзыва" rows="6"></textarea>
				<label for="rev-author" class="c-label">Автор</label>
				<input type="text" id="rev-author" name="rev-author" class="c-input" placeholder="Имя автора">				
				<label for="rev-link" class="c-label">Ссылка на автора</label>
				<input type="text" id="rev-link" name="rev-link" class="c-input" placeholder="Вконтакте, Facebook, Одноклассники...">					
				<input type="submit" value="Добавить" class="c-input-save">
			</form>
</main>
<?php include("footer.php"); ?>