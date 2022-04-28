<?php

get_header();
?>

<nav id="site-navigation" class="navbar navbar-dark bg-dark static-top main-navigation">
	<div class="container justify-content-center">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
	?>
</nav>

<main id="primary" class="site-main">
	<header class="masthead" style="background-image: url(<?php echo get_template_directory_uri();?>/img/hero-poster.jpg);">
		<video autoplay="autoplay" loop="loop" muted class="position-absolute">
			<source src="<?php echo get_template_directory_uri(); ?>/img/xtcrbn-hero-video.mp4" type="video/mp4" />
		</video>
		<div class="container position-relative">
			<div class="row justify-content-center">
				<div class="col-sm-10 text-center brandimg"><img src="<?php echo get_template_directory_uri(); ?>/img/xtcrbn.svg" alt="" srcset="" /></div>
				<div class="col-xl-10">
					<div class="text-center text-white">
						<!-- Page heading-->
						<h1 class="mb-5">Revolutionizing the tower industry</h1>
					</div>
				</div>
			</div>
			<div class="row justify-content-center" style="margin: 5%;">
				<div class="buttonContainer col-xl-2 mx-0 text-center">
					<div class="border"></div>
					<a href="#firstContent" style="text-decoration: none;">
						<div id="getStarted" class="button">
							<p>Get Started</p>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div style="display: flex; justify-content: center;">
			<a href="#firstContent" aria-label="to content">
				<svg class="arrows">
					<path class="a1" d="M0 0 L30 32 L60 0"></path>
					<path class="a2" d="M0 20 L30 52 L60 20"></path>
					<path class="a3" d="M0 40 L30 72 L60 40"></path>
				</svg>
			</a>
		</div>

	</header>
	<section class="text-center about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 my-5">
					<h2 id="firstContent" class="orange secondaryfont">About XTCrbn</h2>
					<p>XTCrbn uses advanced composite technology to provide boat builders and OEMs with state-of-the-art carbon fiber wakeboard towers.
					The technology behind XTCrbn’s carbon fiber wakeboard tower is revolutionizing the marine industry and allows significantly more precision, strength, and durability than other materials on the market.
					Increased durability, decreased weight, and simplified installation are just a few of the reasons XTCrbn chooses carbon fiber to craft the future of wakeboard towers.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="showcase bg-dark">
		<div class="container-fluid p-0">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<div id="timer" class="row justify-content-center showcaseHeader">
						<p class="lightondark secondaryFont col-sm-10 col-lg-5 text-end">
							<span class="orange timer count-title count-number" data-to="700" data-speed="1500">0</span>
							% Stronger <span id="slash">/</span>
						</p>
						<p class="lightondark secondaryFont col-sm-10 col-lg-5 text-start">
							<span class="orange timer count-title count-number" data-to="500" data-speed="1500">0</span>
							% Lighter
						</p>
					</div>
					<script>
					const waypoint = new Waypoint({
						element: document.getElementById('getStarted'),
						handler: function(direction) {

							(function ($) {
								$.fn.countTo = function (options) {
									options = options || {};
									
									return $(this).each(function () {
										// set options for current element
										var settings = $.extend({}, $.fn.countTo.defaults, {
											from:            $(this).data('from'),
											to:              $(this).data('to'),
											speed:           $(this).data('speed'),
											refreshInterval: $(this).data('refresh-interval'),
											decimals:        $(this).data('decimals')
										}, options);
										
										// how many times to update the value, and how much to increment the value on each update
										var loops = Math.ceil(settings.speed / settings.refreshInterval),
											increment = (settings.to - settings.from) / loops;
										
										// references & variables that will change with each update
										var self = this,
											$self = $(this),
											loopCount = 0,
											value = settings.from,
											data = $self.data('countTo') || {};
										
										$self.data('countTo', data);
										
										// if an existing interval can be found, clear it first
										if (data.interval) {
											clearInterval(data.interval);
										}
										data.interval = setInterval(updateTimer, settings.refreshInterval);
										
										// initialize the element with the starting value
										render(value);
										
										function updateTimer() {
											value += increment;
											loopCount++;
											
											render(value);
											
											if (typeof(settings.onUpdate) == 'function') {
												settings.onUpdate.call(self, value);
											}
											
											if (loopCount >= loops) {
												// remove the interval
												$self.removeData('countTo');
												clearInterval(data.interval);
												value = settings.to;
												
												if (typeof(settings.onComplete) == 'function') {
													settings.onComplete.call(self, value);
												}
											}
										}
										
										function render(value) {
											var formattedValue = settings.formatter.call(self, value, settings);
											$self.html(formattedValue);
										}
									});
								};
			
								$.fn.countTo.defaults = {
									from: 0,
									to: 0,
									speed: 1000,
									refreshInterval: 100,
									decimals: 0,
									formatter: formatter,
									onUpdate: null,
									onComplete: waypoint.destroy()
								};
								
								function formatter(value, settings) {
									return value.toFixed(settings.decimals);
								}
							}(jQuery));

							jQuery(function ($) {
							// custom formatting example
							$('.count-number').data('countToOptions', {
								formatter: function (value, options) {
								return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
								}
							});
							
							// start all the timers
							$('.timer').each(count);  
							
							function count(options) {
								var $this = $(this);
								options = $.extend({}, options || {}, $this.data('countToOptions') || {});
								$this.countTo(options);
							}
							});

						}
					})
					</script>
					<div class="row justify-content-center">
						<span class="lightondark secondaryFont">Compared to towers on the water today</span>
					</div>
				</div>
			</div>
			<div class="container buttonrows">
				<div class="row justify-content-center">
					<p class="orangeLabel lightondark text-center col-md-5 col sm-12">Improved fuel efficiency</p>
					<p class="orangeLabel lightondark text-center col-md-5 col sm-12">Long-lasting &amp; durable</p>
				</div>
				<div class="row justify-content-center">
					<p class="orangeLabel lightondark text-center col-md-5 col sm-12">Increased passenger count</p>
					<p class="orangeLabel lightondark text-center col-md-5 col sm-12">Fewer quality issues</p>
				</div>
				<div class="row justify-content-center">
					<p class="orangeLabel lightondark text-center col-md-5 col sm-12">Easier installation</p>
					<p class="orangeLabel lightondark text-center col-md-5 col sm-12">No unsightly welds</p>
				</div>
			</div>
		</div>
	</section>
	<section class="aboutbrand text-center bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="patrickLogo col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/patrick-logo.svg" alt="Patrick Industries Logo" srcset="" /></div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>XTCrbn is proud to be part of the Patrick Industries Marine Fabrication group alongside other reputable marine industry companies like XTP, SEI, and GG Schmitt & Sons.
					Through partnerships with sister companies, XTCrbn is able to bring industry-leading finishes, engineering, and more to our carbon fiber wakeboard towers.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="smLogo col-md-2 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/img/sei-logo.png" alt="SEI Manufacturing Logo" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/img/gg-schmitt-logo.png" alt="GG Schmitt Logo" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/img/xtp-logo.png" alt="XTP Logo" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/img/coyote-logo.png" alt="Coyote Logo" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="<?php echo get_template_directory_uri(); ?>/img/em&c-logo.png" alt="EM&C Logo" srcset="" /></div>
			</div>
		</div>
	</section>
	<section class="jumboImage" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/xtcrbn-photo-1.jpg); background-position: center;"></section>
	<!-- Call to Action-->
	<section id="contact" class="call-to-action text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/wave-background.svg);">
		<div class="container position-relative">
			<div class="row">
				<div class="col-xl-5 col-sm-12 beforeMessage text-start">
					<h2 class="mb-4 orange secondaryfont">Start a conversation</h2>
					<p>For unlimited design potential and technology, XTCrbn is the clear choice for your carbon fiber marine products. Reach out today with your next project and find out why top boat builders choose carbon fiber solutions from XTCrbn.</p>
					<ul class="list mb-0 social">
						<li class="list-item me-4">
							<p style="margin-bottom: 0; text-transform: uppercase;">Other ways to get in touch</p>
						</li>
						<li class="list-item me-4">
							<a href="tel:+14043759762"><i class="bi-telephone-fill fs-4">&nbsp;(404) 375-9762</i></a>
						</li>
						<li class="list-item me-4">
							<a href="mailto:info@xtcrbn.com"><i class="bi-envelope-fill fs-4">&nbsp;info@xtcrbn.com</i></a>
						</li>
						<li class="list-item">
							<a href="#!"><i class="bi-house-door-fill fs-4">&nbsp;1651 Riverwalk Rd. Bishop, GA 30621</i></a>
						</li>
					</ul>
				</div>
				<div class="col-xl-6 col-sm-12 messageForm">
					<?php echo do_shortcode('[contact-form-7 id="34" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- jobs-->
	<section id="careers" class="finalcontent text-center" style="background: linear-gradient(rgba(255, 255, 255, .75),rgba(255, 255, 255, .75)), url(<?php echo get_template_directory_uri(); ?>/img/xtcrbn-photo-2.jpg);">
		<div class="container position-relative">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<h2 class="mb-4 secondaryfont orange">Join the team</h2>
					<p>At XTCrbn, we value individual expertise, a passion for innovation, and an ambitious drive in our team members. Do you have what it takes? Apply today!</p>
					<a href="<?php echo get_home_url(); ?>/careers" style="text-decoration: none;">
						<buttonbtn class="btn-dark ctabtn btn-lg secondaryfont">Browse Jobs</buttonbtn>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
