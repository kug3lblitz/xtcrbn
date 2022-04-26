<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package xtcrbn
 */

get_header();
?>

	<nav class="navbar navbar-dark bg-dark static-top main-navigation">
		<ul class="menu">
			<li class="nav-item" style="max-width: 200px;">
				<a class="nav-link active" aria-current="page" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/XTCrbn-Logo-Primary.png" alt="" srcset="" /></a>
			</li>
		</ul>
	</nav>

	<main id="primary" class="site-main">

		<div class="container text-center">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 style="font-size: 5em";>404 - Page Not Found</h1>
					<section class="jumboImage" style="background-image: url('<?php echo get_template_directory_uri()?>/img/thescream.jpg'); background-position: bottom;"></section>
				</header><!-- .page-header -->

				<div class="page-content">
					<br>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div>


	</main><!-- #main -->

<?php
get_footer();
