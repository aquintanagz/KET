(function($) {
	"use strict";



	/*
	|----------------------------------------------------------------------------
	| for preloader
	|----------------------------------------------------------------------------
	*/
	$(window).load(function () {
	    $('.preloader').fadeOut('slow');
	});
	


	/*
	|----------------------------------------------------------------------------
	| for navbar
	|----------------------------------------------------------------------------
	*/
    $('.navbar-nav>li>a').on('click', function(){
	    $('.navbar-collapse').collapse('hide');
	});

    // add class in navbar
    $(window).on('scroll',function() {
        if ($(this).scrollTop() > 10){  
            $('.navbar').addClass("color-set");
            $('.navbar-brand img').attr('src', 'images/logo-black.png');
        }
        else{
            $('.navbar').removeClass("color-set");
            $('.navbar-brand img').attr('src', 'images/logo.png');
        }
    });



	/*
	|----------------------------------------------------------------------------
	| for wow animations
	|----------------------------------------------------------------------------
	*/
    
 	new WOW().init();


	
	/*
	|----------------------------------------------------------------------------
	| for video play
	|----------------------------------------------------------------------------
	*/
	$('.play-btn').on('click', function(e){
	    e.preventDefault();
	    $('.video-overlay').addClass('open');
	    $(".video-overlay").append('<iframe width="60%" height="60%" src="https://www.youtube.com/embed/1S0GJPzRmd4?version=3&loop=1&autoplay=1&modestbranding=0&showinfo=0&rel=0&end=78" frameborder="0" allowfullscreen></iframe>');
	    /* Replace Your video Link */
	});

	$(".nav-pills li a").click(function() {   
	    var listItems = $(".nav-pills li a"); 
	    for (let i = 0; i < listItems.length; i++) { 
	        listItems[i].classList.remove("active-nav-link"); 
	    } 
	    this.classList.add("active-nav-link"); 
	});

	$('.video-overlay, .video-overlay-close').on('click', function(e){
	 	e.preventDefault();
	 	close_video();
	});

	$(document).keyup(function(e){
	    if(e.keyCode === 27) { close_video().click; }
	});

	function close_video() {
	    $('.video-overlay.open').removeClass('open').find('iframe').remove();
	};



	/*
	|----------------------------------------------------------------------------
	| for subscribe
	|----------------------------------------------------------------------------
	*/
	$('#mc-form').ajaxChimp({
        url: 'https://xyz.us15.list-manage.com/subscribe/post?u=a26d8d38db8b11ffd3352f889&amp;id=d60b8b0444'
            /* Replace Your AjaxChimp Subscription Link */
    });
	
		
		
	
})(window.jQuery);