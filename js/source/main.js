require(['jquery', 'plugins/retinafy', 'plugins/log'], function ($) {
	
	var main = {

		init: function () {

			$('body').retinafy();

			console.log('Main initiated.');

		}

	};

	$(document).ready(function () {

		console.log('Hello World.');

		main.init();

	});

});