require(['jquery', 'plugins/retinafy', 'plugins/imagesLoaded', 'plugins/log'], function ($) {
	
	var main = {

		$body: $('body'),

		init: function () {

			main.retinafyImages();

			main.fadeInBackgroundImage();

			console.log('Main initiated.');

		},

		retinafyImages: function () {

			main.$body.retinafy();

		},

		fadeInBackgroundImage: function () {

			$('.background-image').imagesLoaded(function () {

				$('.main-header').addClass('loaded');

			});

		}

	};

	$(document).ready(function () {

		console.log('Hello World.');

		main.init();

	});

});