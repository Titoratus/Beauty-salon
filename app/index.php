<?php $page = "main"; include("header.php"); ?>
<section class="title">
	<div class="l-container">
			<div class="title__align" data-aos="fade-up" data-aos-duration="1200">
				<h1 class="title__name">Ждём вас</h1>
				<p class="title__descr">в салоне красоты "La Bouclette"</p>
			</div>
		</div>
	</section>
	<section id="services" class="blocks">
		<div class="l-container">
		<div class="block block_purple" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
			<h3 class="block__title">Уход</h3>
			<a href="services" class="block__link">Записаться</a>
		</div>
		<div class="block block_image block-1"></div>
		<div class="block block_black" data-aos="fade-up">
			<h3 class="block__title">Макияж</h3>
			<a href="services" class="block__link">Записаться</a>			
		</div>
		<div class="block block_image block-2"></div>
		<div class="block block_image block-3"></div>
		<div class="block block_white">
			<h3 class="block__title">Волосы</h3>
			<a href="services" class="block__link">Записаться</a>			
		</div>
		<div class="block block_image block-4"></div>
		<div class="block block_purple">
			<h3 class="block__title">Ногти</h3>
			<a href="services" class="block__link">Записаться</a>			
		</div>
	</div>
</section>
<section class="gallery">
	<h2 class="section-title reviews__title form__title">Галлерея</h2>
	<div id="aniimated-thumbnials">
		<?php for($i=1; $i<=9; $i++){ ?>
		  <a href="img/salon/<?php echo $i; ?>.jpg">
		    <img src="img/salon/<?php echo $i; ?>.jpg" />
		  </a>
		<?php } ?> 
	</div>
</section>
<section class="reviews">
	<div class="l-container" data-aos="fade-up">
		<h2 class="section-title reviews__title">Отзывы</h2>
		<div class="owl-carousel owl-drag owl-theme">
			<?php
				$query = mysqli_query($con, "SELECT * FROM reviews");
				while($review = mysqli_fetch_array($query)){
			?>
			<div class="review">
				<div class="review__text"><?php echo $review["message"]; ?></div>
				<a href='<?php echo $review["link"]; ?>' target="_blank" class="review__author"><?php echo $review["author"]; ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<section id="contacts" class="message">
	<form class="message__form" action="" data-aos="fade-up">
		<h2 class="section-title form__title">Приходите</h2>
		<address class="c-address"><?php echo $info["address"]; ?></address>
		<span class="c-email"><?php echo $info["email"]; ?></span> \
		<span class="c-phone"><?php echo $info["phone"]; ?></span>
		<h5 class="c-worktime">ЧАСЫ РАБОТЫ</h5>
		<span class="c-hours"><?php echo $info["hours"]; ?></span>
		<div class="message__box">
			<div class="box__contact">
				<input type="text" class="box__input" placeholder="Имя" required>
				<input type="email" class="box__input" placeholder="Email" required>
				<input type="text" class="box__input" placeholder="Телефон">
			</div>
			<div class="box__contact">
				<textarea placeholder="Сообщение" class="box__input box__message" required></textarea>
			</div>
			<input class="box__submit" value="Отправить" type="submit">
		</div>
		<a href="contact.php" class="form__link">Посмотреть на карте</a>
	</form>
</section>
<?php include("footer.php"); ?>