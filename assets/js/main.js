jQuery(document).ready(function ($) {
	// INITIALIZE AOS
	// AOS.init();
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll > 200) {
		  $(".header").addClass('header-box-shadow');
		}
		else {
		  $(".header").removeClass('header-box-shadow');
		}
	  });
	// INITIALIZE Fancybox
	Fancybox.bind('[data-fancybox]', {});

	// NAVBAR
	const toggleMobileNav = (() => {
		const header = document.querySelector('.header');
		const navbarIcon = header.querySelector('.navbar__icon');
		const navbarMobileList = header.querySelector('.navbar-mobile__list');
		const body = document.querySelector('body');

		const toggleClass = (element, stringClass) => {
			element.classList.toggle(stringClass);
		};

		navbarIcon.addEventListener('click', () => {
			toggleClass(header, 'navbar-mobile--show');
			toggleClass(body, 'overflow-hidden');
		});

		navbarMobileList.addEventListener('click', (event) => {
			if (event.target.classList.contains('navbar-mobile__item')) {
				toggleClass(header, 'navbar-mobile--show');
				
			}
		});
	})();

	// PRODUCT QUANTITY
	$('.woocommerce').on(
		'click',
		'.quantity-container .plus, .quantity-container .minus',
		function () {
			// Cache frequently used jQuery objects
			var qty = $(this).siblings('.quantity').children('.qty');
			var val = parseFloat(qty.val());
			var max = parseFloat(qty.attr('max'));
			var min = parseFloat(qty.attr('min'));
			var step = parseFloat(qty.attr('step'));
			// Check for max and min values, and update quantity
			if ($(this).is('.plus') && (!max || max > val)) {
				qty.val(val + step);
			} else if ($(this).is('.minus') && val > (min || 1)) {
				qty.val(val - step);
			}
			// Trigger change event and enable update cart button
			qty.trigger('change');
			$('.update-cart').prop('disabled', false);
		}
	);

	

	//tab
	function tabsManagement() {
		$('.section-tabs .nav-link').on('click', function () {
			$('.section-tabs .nav-link').removeClass('active');
			$(this).addClass('active');
			var id = $(this).attr('id');
			var classContent = '.section-tabs .tab-content .tab-item.' + id;
			var Img = '.section-tabs .box-img .tab-img#' + id;
			console.log(Img);
			$('.section-tabs .tab-content .tab-item').removeClass('active');
			$(classContent).addClass('active');
			$('.section-tabs .box-img .tab-img').removeClass('active');
			$(Img).addClass('active');
		});
	}
	tabsManagement();

	const options = {
		Toolbar: {
			display: {
				left: ['infobar'],
				middle: [
					'zoomIn',
					'zoomOut',
					'toggle1to1',
					'rotateCCW',
					'rotateCW',
					'flipX',
					'flipY',
				],
				right: ['slideshow', 'thumbs', 'close'],
			},
		},
	};
	$('.counter').countUp({
		  'time': 2000,
		  'delay': 10
		});
		

	// ------------- SLIDER -----------------
	const heroBannerSwiper = new Swiper(
		'.section-hero-banner .swiper-container',
		{
			loop: true,
			spaceBetween: 30,
			// autoHeight: true,
			// autoplay: {
			// 	delay: 6000,
			// 	disableOnInteraction: false,
			// },
			speed: 1000,
		}
	);
	const liveTheHigh = new Swiper(
		'.section-information .section-live-the-high .swiper-container',
		{
			loop:true,
			slidesPerView: 1.5,
			spaceBetween: 20,
			centeredSlides: true,
			breakpoints: {
				992: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},
		}
	);
	const hightLight = new Swiper(
		'.section-highlight .swiper-container',
		{
			slidesPerView: 1,
			spaceBetween: 30,
			breakpoints: {
				576: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				},
			},
		}
	);
	const gallery = new Swiper(
		'.section-gallery .swiper-container',
		{
			loop:true,
			slidesPerView: 1.5,
			spaceBetween: 0,
			centeredSlides: true,
			breakpoints: {
				576: {
					slidesPerView: 3.5,
				},
				992: {
					slidesPerView: 3.72,
					spaceBetween: 0,
				},
			},
		}
	);
	const instagram = new Swiper(
		'.section-instagram .swiper-container',
		{
			loop:true,
			slidesPerView: 1.5,
			spaceBetween: 20,
			autoHeight:true,
			centeredSlides: true,
			breakpoints: {
				576: {
					slidesPerView: 3.5,
				},
				992: {
					slidesPerView: 4.5,
					spaceBetween: 30,
				},
			},
		}
	);
	const slider = new Swiper(
		'.section-slider .swiper-container',
		{
			loop:true,
			slidesPerView: 1.5,
			spaceBetween: 20,
			centeredSlides: true,
			breakpoints: {
				576: {
					slidesPerView: 2.5,
					spaceBetween: 30,
				},
				992: {
					slidesPerView: 3.7,
					spaceBetween: 30,
				},
			},
			pagination: {
				el: ".section-slider .swiper-pagination",
			  },
		}
	);
	const ourServices = new Swiper(
		'.section-our-services .swiper-container',
		{
			slidesPerView: 1.5,
			spaceBetween: 20,
			breakpoints: {
				576: {
					slidesPerView: 2.5,
					spaceBetween: 30,
				},
				992: {
					slidesPerView: 2.5,
					spaceBetween: 30,
				},
			},
		}
	);
	function visit_time_popup(){
		var get_Cookies = Cookies.get('wp_visit_time_popup');
		if(!get_Cookies){
			$("#welcomeModal").modal('show');
		}
		$('#welcomeModal').on('click', '.close.close-btn', function (e) {
			var day_number = $("#welcomeModal").data('days');
			Cookies.set('wp_visit_time_popup', '1', { expires: day_number });
		});
	}
	visit_time_popup();
});
