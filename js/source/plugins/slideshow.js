define(['jquery', 'plugins/imagesLoaded'], function ($) {
	
	var slideshow = {

		$background: $('.background-image'),

		count: config.imageCount,

		index: config.imageIndex,

		path: config.imagePath,

		fadeInterval: 1000,

		interval: 5000,

		init: function () {

			slideshow.setLoop();

			return slideshow;

		},

		setLoop: function () {

			slideshow.loop = setTimeout(function () {

				slideshow.iterate(slideshow.loop);

			}, slideshow.interval);

		},

		iterate: function () {

			var nextIndex = ((slideshow.index + 1) > slideshow.count) ? 1 : slideshow.index + 1;

			$('.main-header').removeClass('loaded');

			setTimeout(function () {

				slideshow.setImage(nextIndex);

				slideshow.index = nextIndex;

			}, slideshow.fadeInterval);

		},

		setImage: function (index) {

			var imagePath = slideshow.path + index + '.jpg';

			slideshow.$background.css('background-image', 'url(' + imagePath + ')').imagesLoaded(function () {

				$('.main-header').addClass('loaded');

				slideshow.setLoop();

			});

		}

	};

	return slideshow.init();

});