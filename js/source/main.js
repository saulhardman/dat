require(['jquery', 'plugins/bigVideo', 'plugins/swipe', 'plugins/imagesLoaded', 'plugins/log'], function ($) {
	
	var main = {

		init: function () {

			console.log('Main initiated.');

		}

	};

	$(document).ready(function () {

		console.log('Hello World.');

		main.init();

	});

});