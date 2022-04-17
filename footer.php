<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xtcrbn
 */

?>

	<footer class="footer bg-dark site-footer">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 text-center brandimg"><img src="<?php echo get_template_directory_uri();?>/img/XTCrbn-Logo-Primary.png" alt="" srcset="" /></div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 h-100 my-5 text-center">
					<ul class="list-inline mb-0">
						<li class="list-inline-item me-4">
							<a href="#!"><i class="bi-facebook fs-3"></i></a>
						</li>
						<li class="list-inline-item me-4">
							<a href="#!"><i class="bi-twitter fs-3"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#!"><i class="bi-instagram fs-3"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="h-100 text-center text-lg-center my-auto">
					<ul class="list-inline mb-2">
						<li class="list-inline-item"><a href="#!">Terms &amp; Conditions</a></li>
						<li class="list-inline-item">|</li>
						<li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
					</ul>
					<p class="text-muted small mb-4 mb-lg-0">&copy; 2022 XTCRBN. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
