<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_SimplyTheme
 */

get_header();
?>
<section class="feature-image feature-image-default-alt" data-type="background" data-speed="4">
	<h1 class="page-title">Uuuupss Page not Found :( </h1>
</section>
	<div class="container">
		<div class="col-sm-8" id="primary">
			<div class="error-404 not-found">
				<div class="page-content">
					<h2>I will get you out of here !</h2>
					<h3>Maybe you were looking for some of the information</h3>
					<div class="">
						<?php while ($loop->have_posts() ) : $loop->the_post();
						
						?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
