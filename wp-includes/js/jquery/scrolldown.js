$(document).ready(fuction(){
	$("ouritems").on("click","a", fuction(event){
		event.preventDefault();
		var id = $(this).attr('href'),
		   top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 2000);
	});
});