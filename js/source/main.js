require(['jquery', 'plugins/retinafy', 'plugins/imagesLoaded', 'plugins/jquery.history', 'plugins/slideshow', 'plugins/log'], function ($) {
	
	var main = {

		$body: $('body'),

		$navLinks: $('#nav a, .logo a'),

		$main: $('#main'),

		currentPage: location.pathname,

		clickEvent: (Modernizr.touch) ? 'touchend': 'click',

		pageCache: {},

		init: function () {

			main.pageCache[main.currentPage] = main.$main;

			main.loadHistory();

			main.bindEvents();

			main.retinafyImages();

			main.fadeInBackgroundImage();

			console.log('Main initiated.');

		},

		loadHistory: function () {

			var History = window.History;

			if (History.enabled === false) {

				return false;

			}

			History.replaceState(null, document.title, main.currentPage);

			console.log('Current page: ', main.currentPage);

			History.Adapter.bind(window, 'statechange', function () {

				main.currentPage = location.pathname;

				console.log('Current page: ', main.currentPage);

				// main.analytics.update(main.currentPage);

				main.loadPage(main.currentPage);

				main.changeNavState(main.currentPage);
				
			});

		},

		bindEvents: function () {

			main.$navLinks.on(main.clickEvent, function (e) {

				e.preventDefault();

				var $this = $(this);

				History.pushState(null, $this.data('page-title'), $this.attr('href'));

				return false;

			});

		},

		retinafyImages: function () {

			main.$body.retinafy();

		},

		fadeInBackgroundImage: function () {

			$('.background-image').imagesLoaded(function () {

				$('.main-header').addClass('loaded');

			});

		},

		loadPage: function (href) {

			var $buffer,
				$main,
				cached = false;

			if (typeof main.pageCache[href] !== 'undefined') {

				$main = main.pageCache[href];

				cached = true;

				console.log('Page cache being used on load: ', $main, cached);

				main.$main.replaceWith($main);

				main.$main = $main;

			} else {

				$buffer = $('<div/>').load(href + ' #main', function () {

					$main = $buffer.find('#main');

					console.log('Page cache not being used on load: ', $main, cached);

					main.$main.replaceWith($main);

					main.$main = $main;

					main.$main.retinafy();

					main.pageCache[href] = $main;

				});

			}

		},

		changeNavState: function (href) {

			var hrefSplit = href.split('/'),
				pageName = hrefSplit[hrefSplit.length - 1];

			if (pageName !== '') {

				main.$navLinks.removeClass('active').filter('.' + pageName + '-link').addClass('active');

			} else {

				main.$navLinks.removeClass('active');

			}

		}

	};

	$(document).ready(function () {

		console.log('Hello World.');

		main.init();

	});

});