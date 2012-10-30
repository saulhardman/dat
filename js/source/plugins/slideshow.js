define(['jquery'], function ($) {
	
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

			// replace this with an asynchronous image load

			$('<img/>').attr('src', imagePath).load(function () {

				slideshow.$background.css('background-image', 'url(' + imagePath + ')');

				$('.main-header').addClass('loaded');

				slideshow.setLoop();

			});

		}

	};

	return slideshow.init();

});