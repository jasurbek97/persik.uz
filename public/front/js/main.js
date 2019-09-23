$( () => {
	
	//On Scroll Functionality
	$(window).scroll( () => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
		windowTop > 100 ? $('ul').css('top','100px') : $('ul').css('top','160px');
	});




	$(window).scroll( () => {
		var windowTop = $(window).scrollTop();
		windowTop > 30 ? $('.tss--close').addClass('white') : $('.tss--close').removeClass('white');
	});

	
	//Click Logo To Scroll To Top
	$('#logo').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		},500);
	});
	

    var swiper = new Swiper('.swiper-container', {
        // swiperPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.myswiper-button-next',
            prevEl: '.myswiper-button-prev',
        },
    });

	
	//Smooth Scrolling Using Navigation Menu
	$('a.anim').on('click', function(e){
		$('html,body').animate({
			scrollTop: $($(this).attr('.anim')).offset().top - 100
		},500);
		e.preventDefault();
	});
	
});
	var config = {
	elementID: 'touchSideSwipe',
            elementWidth: 300, //px
            elementMaxWidth: 0.8, // *100%
            sideHookWidth: 44, //px
            moveSpeed: 0.5, //sec
            opacityBackground: 0.5,
            shiftForStart: 50, // px
            windowMaxWidth: 1024, // px
        };
        var touchSideSwipe = new TouchSideSwipe(config);

        $(document).on("click", ".custom-input-number .cin-increment", function(e) {
        	let $input = $(this).siblings(".cin-input"),
        	val = parseInt($input.val()),
        	max = parseInt($input.attr("max")),
        	step = parseInt($input.attr("step"));

        	let temp = val + step;
        	$input.val(temp <= max ? temp : max);
        	console.log(temp);
        	return false;
        });
        $(document).on("click", ".custom-input-number .cin-decrement", function(e) {
        	let $input = $(this).siblings(".cin-input"),
        	val = parseInt($input.val()),
        	min = parseInt($input.attr("min")),
        	step = parseInt($input.attr("step"));

        	let temp = val - step;
        	$input.val(temp >= min ? temp : min);

        	console.log(temp);
        	return false;
        });



