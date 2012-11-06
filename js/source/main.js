/*global _gaq*/

require(['jquery', 'plugins/slideshow', 'plugins/retinafy', 'plugins/imagesLoaded', 'plugins/jquery.history', 'analytics', 'plugins/log'], function ($, slideshow) {
	
	var main = {

		config: config,

		width: $(window).width(),

		$body: $('body'),

		$navLinks: $('#nav a, .logo a'),

		$main: $('#main'),

		$newsletter: $('#newsletter'),

		currentPage: location.pathname,

		clickEvent: (Modernizr.touch) ? 'touchend': 'click',

		touchMoved: false,

		pageCache: {},

		init: function () {

			main.pageCache[main.currentPage] = main.$main;

			main.loadHistory();

			main.bindEvents();

			main.retinafyImages();

			main.initSlideshow();

			main.analytics.init();

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

				main.loadPage(main.currentPage);

				main.changeNavState(main.currentPage);

				main.analytics.update(main.currentPage);
				
			});

		},

		bindEvents: function () {

			main.$navLinks.on(main.clickEvent, function (e) {

				e.preventDefault();

				if (main.touchMoved === false) {

					var $this = $(this);

					History.pushState(null, $this.data('page-title'), $this.attr('href'));

				}

				return false;

			});

			if (Modernizr.touch === true) {

				main.$navLinks.on('click', function (e) {

					e.preventDefault();

					return false;

				});

			}

			$(window).on('touchmove', function () {

				main.touchMoved = true;

			}).on('touchend', function () {

				main.touchMoved = false;

			}).on('resize', function () {

				if (slideshow.running === true && $(window).width() < 768) {

					slideshow.stop();

				} else if (slideshow.running === false && $(window).width() >= 768) {

					slideshow.start();

				}

			});

			if (Modernizr.touch === true) {

				main.$navLinks.on('touchstart', function (e) {

					e.preventDefault();

					return false;

				});

			}

			main.$newsletter.on('submit', function (e) {

				e.preventDefault();

				main.storeEmail(main.$newsletter.find('.email').val());

				return false;

			});

		},

		retinafyImages: function () {

			main.$body.retinafy();

		},

		initSlideshow: function () {

			if (main.width >= 768) {

				slideshow.start();

				$('.background-image').imagesLoaded(function () {

					$('.main-header').addClass('loaded');

				});

			}

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

		},

		analytics: {

			init: function () {

				if (main.config.debugMode === false) {

					main._gaq = _gaq || [];

					main._gaq.push(['_setAccount', main.config.ga]);

					main._gaq.push(['_trackPageview']);

					main._gaq.push(['_trackPageLoadTime']);

				}

			},

			update: function (page) {

				if (main.config.debugMode === false) {

					main._gaq.push(['_trackPageview', page]);

					main._gaq.push(['_trackPageLoadTime']);

				}

			}

		},

		storeEmail: function (email) {

			var data = {

					email: email

				};

			console.log('Data: ', data);

			$.post(main.$newsletter.attr('action'), data, function (response) {

				response = JSON.parse(response);

				console.log('Response: ', response);

				if (response.success === 0) {

					// fail

					main.$newsletter.find('.email').focus();

					main.$newsletter.find('.validation').addClass('error');

				} else {

					// success

					main.$newsletter.find('.email').val('');

					main.$newsletter.find('.validation').addClass('success');

				}

				setTimeout(function () {

					main.$newsletter.find('.validation').removeClass('error success');

				}, 2000);

			});

		}

	};

	$(document).ready(function () {

		console.log('Hello World.');

		main.init();

	});

});