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
	if($(this).attr("data-enroll") == null) { return false; }
	else {
		$.ajax({
			type: "post",
			url: "functions.php",
			data: data,
			success: function(data) {
				$(".l-services").html(data);
			}
		});
	}
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

var input_num = 1;
$(document).on("click", ".add-c-input", function(){
	input_num++;
	$(".options-block").append("<div class='c-input_small c-input_nomargin'><label for='opt-"+input_num+"' class='c-label'>Опция "+input_num+"</label><input id='opt-"+input_num+"' name='opt-"+input_num+"' type='text' class='c-input'></div><div class='c-input_small'><label for='price-"+input_num+"' class='c-label'>Стоимость</label><input type='text' class='c-input' id='price-"+input_num+"' name='price-"+input_num+"'></div>");
});

//Добавление услуги
$(document).on("submit", "#create-service", function(e){
	$.ajax({
		type: "post",
		url: "functions.php",
		data: $("#create-service").serialize()+"&opt_num="+input_num,
		success: function(data) {
			alert("Услуга успешно добавлена!");
			window.location.href="services";
		}
	});
	e.preventDefault();
});

$(document).on("click", ".free", function(){
	$(".time_active").removeClass("time_active");
	$(this).addClass("time_active");
	$(".time-blocks").show();
	$(".enroll__date").attr("data-date", $(this).attr("data-date"));
});

$(document).on("click", ".sel-time", function(){
	$(".sel-time_active").removeClass("sel-time_active");
	$(this).addClass("sel-time_active");
	$(".enroll_disabled").removeClass("enroll_disabled");
	$(".enroll__time").attr("data-time", $(this).attr("data-time"));
});


//Записаться после выбора времени
$(document).on("click", ".enroll-info .enroll:not(.enroll_disabled)", function(){
	$.ajax({
		type: "post",
		url: "functions.php",
		data: "service="+$(".enroll__title").attr("data-service")+"&option="+$(".enroll__opt").attr("data-option")+"&date="+$(".enroll__date").attr("data-date")+"&time="+$(".enroll__time").attr("data-time"),
		success: function(data) {
			$(".l-services").html(data);
		}
	});
});

//Окончательная запись
$(document).on("click", ".enroll_end", function(){
	var client = $("#record").serialize();
	var all_info = client+"&c_service="+$(".enroll__title").attr("data-service")+"&c_opt="+$(".enroll__opt").attr("data-option")+"&c_date="+$(".enroll__date").attr("data-date")+"&c_time="+$(".enroll__time").attr("data-time");
	$.ajax({
		type: "post",
		url: "functions.php",
		data: all_info,
		success: function(data) {
			$(".l-services").html("<div style='text-align: center;'>Вы успешно записаны!<br><a class='link_back' href='services'>Назад к услугам</a></div>");
		}
	});
});

//Удаление записи
$(document).on("click", ".record__del", function(){
	if(confirm("Уверены, что хотите удалить запись?")){
		$.ajax({
			type: "post",
			url: "functions.php",
			data: "del_rec="+$(this).attr("data-del_rec"),
			success: function(data) {
				window.location.href = "records";
			}
		});
	}
	else return false;
});