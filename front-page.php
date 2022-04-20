<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xtcrbn
 */

get_header();
?>

<main id="primary" class="site-main">
	<header class="masthead">
		<video autoplay="autoplay" loop="loop" muted class="position-absolute">
			<source src="<?php echo get_template_directory_uri(); ?>/img/xtcrbn-hero-video.mp4" type="video/mp4" />
		</video>
		<div class="container position-relative">
			<div class="row justify-content-center">
				<div class="col-sm-10 text-center brandimg"><img src="<?php echo get_template_directory_uri(); ?>/img/XTCrbn-Logo-Primary.png" alt="" srcset="" /></div>
				<div class="col-xl-10">
					<div class="text-center text-white">
						<!-- Page heading-->
						<h1 class="visually-hidden">Carbon Fiber Wakeboard towers strong light cool awesome</h1>
						<h2 class="mb-5">Revolutionizing the tower industry</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center" style="margin: 5%;">
				<div class="buttonContainer col-xl-2 mx-0 text-center">
					<div class="border"></div>
					<a href="#firstContent" style="text-decoration: none;">
						<div class="button">
							<p>Get Started</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</header>
	<section class="text-center about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 my-5">
					<h2 id="firstContent" class="orange primaryfont">About XTCrbn</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, omnis! Eligendi inventore facilis voluptatem nisi non corrupti quos laudantium neque earum sequi. Ullam praesentium exercitationem maxime ipsa laborum nobis quaerat.</p>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias natus eaque asperiores expedita nemo voluptatem, tempora sunt numquam iure quisquam eligendi deleniti officiis quia eius magnam exercitationem, mollitia id nulla?</p>
				</div>
			</div>
		</div>
	</section>
	<section class="showcase bg-dark">
		<div class="container-fluid p-0">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<div class="row justify-content-center showcaseHeader">
						<h2 class="lightondark secondaryFont col-sm-10 col-lg-5 text-end">
							<span class="orange">700</span>
							% Stronger
						</h2>
						<h2 class="lightondark secondaryFont col-sm-10 col-lg-5 text-start">
							<span class="orange">500</span>
							% Lighter
						</h2>
					</div>
					<div class="row justify-content-center">
						<h5 class="lightondark secondaryFont">Compared to towers on the water today</h5>
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
				<div class="patrickLogo"><img src="https://clipground.com/images/placeholder-logo-5.png" alt="" srcset="" /></div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sunt quae nihil odit. Deleniti impedit accusamus laudantium vero ipsam cupiditate aliquid eveniet beatae fuga expedita architecto, eligendi tempore unde consequatur!</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptatibus voluptates alias enim facilis sit sint quibusdam iure eius consequuntur maxime veritatis adipisci doloribus, expedita aspernatur consectetur similique quas quos?</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="smLogo col-md-2 col-sm-6"><img src="https://clipground.com/images/placeholder-logo-5.png" alt="" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="https://clipground.com/images/placeholder-logo-5.png" alt="" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="https://clipground.com/images/placeholder-logo-5.png" alt="" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="https://clipground.com/images/placeholder-logo-5.png" alt="" srcset="" /></div>
				<div class="smLogo col-md-2 col-sm-6"><img src="https://clipground.com/images/placeholder-logo-5.png" alt="" srcset="" /></div>
			</div>
		</div>
	</section>
	<section class="jumboImage" style="background-image: url('https://images.pexels.com/photos/1603455/pexels-photo-1603455.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=627&w=1200');"></section>
	<!-- Call to Action-->
	<section class="call-to-action text-center" style="background-image:url(<? echo get_template_directory_uri(); ?>/img/wave-background.svg)">
		<div class="container position-relative">
			<div class="row">
				<div class="col-xl-5 col-sm-12 beforeMessage text-start">
					<h2 class="mb-4 orange primaryfont">Start a conversation</h2>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, quasi! Eos quos nulla odit nesciunt eligendi atque doloribus tenetur labore, fugiat esse illum amet aliquam iste possimus! Itaque, nobis laudantium.</p>
					<ul class="list mb-0 social">
						<li class="list-item me-4">
							<p style="margin-bottom: 0;">Other ways to get in touch</p>
						</li>
						<li class="list-item me-4">
							<a href="tel:+14043759762"><i class="bi-telephone-fill fs-4">&nbsp;(404) 375-9762</i></a>
						</li>
						<li class="list-item me-4">
							<a href="mailto:info@xtcrbn.com"><i class="bi-mailbox2 fs-4">&nbsp;info@xtcrbn.com</i></a>
						</li>
						<li class="list-item">
							<a href="#!"><i class="bi-map fs-4">&nbsp;412 N Cedar Bluff Rd. Ste 108 Knoxville, TN, USA</i></a>
						</li>
					</ul>
				</div>
				<div class="col-xl-6 col-sm-12 messageForm">
					<!-- Email address input-->
					<div class="row formrow"><input type="text" placeholder="Name" /></div>
					<div class="row formrow"><input type="email" placeholder="Email" /></div>
					<div class="row formrow"><input type="text" placeholder="Subject" /></div>
					<div class="row formrow"><textarea placeholder="Message"></textarea></div>
					<div class="row formrow"><button class="btn btn-orange btn-lg primaryfont" id="submitButton" type="submit">Submit</button></div>
				</div>
			</div>
		</div>
	</section>
	<!-- jobs-->
	<section class="finalcontent bg-light text-center">
		<div class="container position-relative">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<h2 class="mb-4 primaryfont orange">Join the team</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea possimus obcaecati quia aspernatur est ipsa accusamus eveniet quos enim autem modi, eos quam mollitia provident tempora quas culpa voluptatem dicta.</p>
					<a href="<? echo get_home_url(); ?>/careers" style="text-decoration: none;">
						<buttonbtn class="btn-dark btn-lg primaryfont">Browse Jobs</buttonbtn>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
