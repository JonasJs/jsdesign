$(document).ready(function(){
	$('.slider').slick({
		respondTo: 'window',
		mobileFirst: true,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
			autoplaySpeed: 3000,
			nextArrow: $('#sliderNext'),
			prevArrow: $('#sliderPrev'),
			responsive: [
				{
		        breakpoint: 520, 
		        settings: {
		            slidesToShow: 2, 
		            slidesToScroll: 1
		        }
			}
		]
	});
});