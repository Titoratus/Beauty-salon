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