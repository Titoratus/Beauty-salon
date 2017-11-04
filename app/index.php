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
			<a href="#" class="block__link">Записаться</a>
		</div>
		<div class="block block_image block-1"></div>
		<div class="block block_black" data-aos="fade-up">
			<h3 class="block__title">Макияж</h3>
			<a href="#" class="block__link">Записаться</a>			
		</div>
		<div class="block block_image block-2"></div>
		<div class="block block_image block-3"></div>
		<div class="block block_white">
			<h3 class="block__title">Волосы</h3>
			<a href="#" class="block__link">Записаться</a>			
		</div>
		<div class="block block_image block-4"></div>
		<div class="block block_purple">
			<h3 class="block__title">Ногти</h3>
			<a href="#" class="block__link">Записаться</a>			
		</div>
	</div>
</section>
<section class="reviews">
	<div class="l-container" data-aos="fade-up">
		<h2 class="section-title reviews__title">Отзывы</h2>
		<div class="owl-carousel owl-drag owl-theme">
			<div class="review">
				<p class="review__text">Это отзыв. Кликните здесь, чтобы отредактировать и написать хороший отзыв о вашей компании и услугах. Пусть клиенты порекомендуют вас посетителям сайта.</p>
				<span class="review__author">Полина Белова, стилист</span>
			</div>
			<div class="review">
				<p class="review__text">Приветус</p>
				<span class="review__author">Полина Белова, стилист</span>				
			</div>
			<div class="review">
				<p class="review__text">Это отзыв. Кликните здесь, чтобы отредактировать и написать хороший отзыв о вашей компании и услугах. Пусть клиенты порекомендуют вас посетителям сайта.</p>
				<span class="review__author">Полина Белова, стилист</span>				
			</div>
			<div class="review">
				<p class="review__text">Самый замечательный салон красоты!</p>
				<span class="review__author">Анаа Каренина, педагог</span>				
			</div>				
		</div>
	</div>
</section>
<section id="contacts" class="message">
	<form class="message__form" action="" data-aos="fade-up">
		<h2 class="section-title form__title">Приходите</h2>
		<address class="c-address">г. Петрозаводск, ул.Энтузиастов, д. 15</address>
		<span class="c-email">ludigolf@mail.ru</span> \
		<span class="c-phone">8 (911) 051-96-92</span>
		<h5 class="c-worktime">ЧАСЫ РАБОТЫ</h5>
		<span class="c-hours">ПН—ПТ: 7:00—22:00  \  ​​СБ: 8:00–22:00  \  ВС: 8:00–23:00</span>
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