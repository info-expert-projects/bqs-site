jQuery(document).ready(function($) {
	// For simple popup image
	$('.popup-image').magnificPopup({
		type: 'image'
	});

	// For popup image with gallery
	$('.popup-image-gallery').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [1, 2]
		}
	});
});