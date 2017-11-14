//Анимация
AOS.init({
  duration: 1100,
  delay: 300,
  once: true
});


//Галлерея
$('#aniimated-thumbnials').lightGallery({
    thumbnail:true
}); 

//Карусель
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
  	autoplay: 1500,
  	loop: true,
  	dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200: {
        	items:2
        }
    }
  });
});

$(function(){
	$(".services").tabs();
});

$(document).on("click", ".hall__link", function(){
	$(".hall__link_active").removeClass("hall__link_active");
	$(this).addClass("hall__link_active");
});

//Меню на маленьких экранах
var show = false;
$(document).on("click", ".pull", function(){
	if(show == false){
		$(".menu").show();
		$(".pull").css({"color":"#a1128a"});
		show = true;
	}
	else {
		$(".menu").hide();
		$(".pull").css({"color":"#000"});
		show = false;
	}
});

//Админка
//Вход
$(document).on("submit", "#login", function(e){
	$.ajax({
		type: "post",
		url: "functions.php",
		data: $("#login").serialize(),
		success: function(data) {
		   if($.trim(data) == "no_error") { location.href = "main_info.php"; }
		   else { $(".error").html("Неверный логин или пароль"); $(".error").fadeIn(); }
			}
	});
	e.preventDefault(); 
});

//Общая информация
$(".c-input").attr("required", "");
$(".c-input").attr("autocomplete", "off");
$(document).on("submit", ".info", function(e){
	$.ajax({
		type: "post",
		url: "functions.php",
		data: $(".info").serialize(),
		success: function(data) {
		  if($.trim(data) == "no_error") $(".success-msg").html("Всё успешно сохранено!");
		  else if("error") $(".success-msg").html("Не удалось добавить данные!");

		  $(".success-msg").hide();
		  $(".success-msg").fadeIn(500);
		}
	});
	e.preventDefault(); 
});

//Удаление отзыва
$(document).on("click", ".review-del", function(){
	if(confirm("Вы уверены, что хотите удалить этот отзыв?")){
		$rev_id = "rev-del="+$(this).attr("data-id");
		$.ajax({
			type: "post",
			url: "functions.php",
			data: $rev_id,
			success: function(data) {
				window.location.href= "reviews";
			}
		});		
	}
	else return false;
});

//Добавление отзыва
$(document).on("submit", ".review-create", function(e){
	$.ajax({
		type: "post",
		url: "functions.php",
		data: $(".review-create").serialize(),
		success: function(data) {
			window.location.href= "reviews";
		}
	});

	e.preventDefault();
});

//Записаться
$(document).on("click", ".enroll", function(){
	var data = "enroll="+$(this).attr("data-enroll");
	$.ajax({
		type: "post",
		url: "functions.php",
		data: data,
		success: function(data) {
			$(".l-services").html(data);
		}
	});
});

//Удаление опции
$(document).on("click", ".del_opt", function(){
	if(confirm("Уверены, что хотите удалить эту опцию?")){
		var data = "del_opt="+$(this).attr("data-del_opt");
		$.ajax({
			type: "post",
			url: "functions.php",
			data: data,
			success: function(data) {
				window.location.href="services";
			}
		});
	}
	else return false;
});

//Удаление услуги
$(document).on("click", ".del_serv", function(){
	if(confirm("Все опции услуги полностью удалятся, вы уверены?")){
		var data = "del_serv="+$(this).attr("data-del_serv");
		$.ajax({
			type: "post",
			url: "functions.php",
			data: data,
			success: function(data) {
				window.location.href="services";
			}
		});
	}
	else return false;
});