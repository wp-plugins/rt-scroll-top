jQuery(document).ready(function($){
	$(window).scroll(function(){
        if ($(this).scrollTop() < 200) {
			$('#rtscrolltop') .fadeOut();
        } else {
			$('#rtscrolltop') .fadeIn();
        }
    });
	$('#rtscrolltop').on('click', function(){
		$('html, body').animate({scrollTop:0}, 2000);
		return false;
		});
});
