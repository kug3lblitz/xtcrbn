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

	<nav class="navbar navbar-dark bg-dark static-top main-navigation">
		<ul class="menu">
			<li class="nav-item" style="max-width: 200px;">
				<a class="nav-link active" aria-current="page" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/XTCrbn-Logo-Primary.png" alt="" srcset="" /></a>
			</li>
		</ul>
	</nav>


	<main id="primary" class="site-main">

		<div class="container">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );


			endwhile; // End of the loop.
			?>

		</div>

	</main><!-- #main -->
	<br>

<?php
get_footer();
