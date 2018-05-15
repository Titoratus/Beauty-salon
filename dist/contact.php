<?php $page = "contact"; include("header.php"); ?>
<main class="contact">
	<div class="l-container">
		<h1 class="section-title contact__title" data-aos="fade-up">Адрес</h1>
		<div class="contact__info" data-aos="fade-up" data-aos-delay="600">
			<address class="c-address"><?php echo $info["address"]; ?></address>
			<span class="c-email"><?php echo $info["email"]; ?></span> \
			<span class="c-phone"><?php echo $info["phone"]; ?></span>
			<h5 class="c-worktime">ЧАСЫ РАБОТЫ</h5>
			<span class="c-hours"><?php echo $info["hours"]; ?></span>
		</div>
	</div>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab0dce4054cfd45eb4d79e82339eab7950c28d4175810e5a42af896120f221ece&amp;source=constructor" width="100%" height="450px" frameborder="0"></iframe>	
</main>
<?php include("footer.php"); ?>