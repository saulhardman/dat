define(['jquery'], function ($) {
	
	var slideshow = {

		$background: $('.background-image'),

		$header: $('.main-header'),

		count: config.imageCount,

		index: config.imageIndex,

		path: config.imagePath,

		fadeInterval: 1000,

		interval: 5000,

		running: false,

		start: function () {

			slideshow.running = true;

			slideshow.setLoop();

			console.log('Slideshow started.');

		},

		stop: function () {

			slideshow.running = false;

			clearTimeout(slideshow.loop);

			slideshow.$header.removeClass('loaded');

			setTimeout(function () {

				slideshow.$background.css('background-image', 'none');

			}, slideshow.fadeInterval);

			console.log('Slideshow stopped.');

		},

		setLoop: function () {

			if (slideshow.running === true) {

				slideshow.loop = setTimeout(function () {

					slideshow.iterate(slideshow.loop);

				}, slideshow.interval);

			}

		},

		iterate: function () {

			var nextIndex = ((slideshow.index + 1) > slideshow.count) ? 1 : slideshow.index + 1;

			slideshow.$header.removeClass('loaded');

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

				slideshow.$header.addClass('loaded');

				slideshow.setLoop();

			});

		}

	};

	return slideshow;

});