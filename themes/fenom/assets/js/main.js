// Определяем переменную для экономии памяти.
var $doc = $(document);

$doc
	.on('click', '[data-target-self]', function (e) {
		// Псевдо-ссылки 2.0
		// для открытия "ссылки" в текущем окне
		var url = $(this).data('targetSelf');
		if (e.metaKey || e.ctrlKey || e.button === 1) {
			window.open(url);
		}
		else {
			location = url;
		}
	})
	.on('click', '[data-target-blank]', function () {
		// Псевдо-ссылки 2.0
		// для открытия "ссылки" в новом окне
		window.open($(this).data('targetBlank'));
	})
	.on('click', '[data-click-target]', function (e) {
		// Эмулируем клик по другому элементу
		e.preventDefault();
		$($(this).data('clickTarget')).trigger('click');
	});

jQuery(document).ready(function($) {
	// Одинаковая высота блоков
	$('.equal').matchHeight();

	// Липкий блок
	$(".sticky").stick_in_parent();

	$.simpleMobileNav({
		navBlock: '.left-nav',
		navContainer: '.mobile-nav',
		navWrapper: '.mobile-nav-wrapper',
		// Колбэки раскомментировать при необходимости
		onInit: function (nav) {
			console.log($(nav).html());
			var $ul = $(nav).find('.left-nav');

			$ul.removeClass('left-nav');
		},
		// onNavToggle: function (nav) {
		// 	console.log('onNavToggle: ', this, nav);
		// },
		// beforeNavOpen: function (nav) {
			// console.log('beforeNavOpen: ', this, nav);
		// },
		// beforeNavClose: function (nav) {
		// 	console.log('beforeNavClose: ', this, nav);
		// }
	});


});

// Эмодзи в тексте
emojify.setConfig({
	img_dir: '/themes/fenom/assets/images/emoji/basic/',
	blacklist: {
		elements: ['script', 'textarea', 'a', 'pre', 'code'],
		classes: ['nosmile', 'no-emojify'],
	},
});
emojify.run();