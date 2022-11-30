// Preloader
$(window).on('load', function() { // makes sure the whole site is loaded 
	$('#status').fadeOut(); // will first fade out the loading animation 
	$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
	$('body').delay(350).css({'overflow':'visible'});
	main();
});


function main() {
		console.log("main")
	
	   // Page scroll
		  $('a.page-scroll').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top - 80
				}, 900);
				return false;
			  }
			}
		  });
	
		$('body').scrollspy({ 
			target: '.navbar-default',
			offset: 200
		});
		
	
		// Scroll to top button
			$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
	
			var amountScrolled = 300;
	
			$(window).scroll(function() {
				if ( $(window).scrollTop() > amountScrolled ) {
					$('a.back-to-top').fadeIn('slow');
				} else {
					$('a.back-to-top').fadeOut('slow');
				}
			});
	
			$('a.back-to-top, a.simple-back-to-top').click(function() {
				$('html, body').animate({
					scrollTop: 0
				}, 700);
				return false;
			});
	}
	
	// main();