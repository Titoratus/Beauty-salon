//Анимация
AOS.init({
  duration: 1100,
  delay: 300,
  once: true
});


//Карусель
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
  	autoplay: 1000,
  	loop: true,
  	dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1200: {
        	items:3
        }
    }
  });
});

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

$(window).scroll(function(event){
	if($(event.target).attr("class") == "review"){
		$(".review").addClass("animated");
		$(".review").addClass("fadeInUp");
	}
});