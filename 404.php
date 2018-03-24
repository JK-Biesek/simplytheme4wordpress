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
		<div class="row" id="primary">
			<main class="error-404 not-found col-sm-8">
				<div class="page-content">
					<h2>I will get you out of here !</h2>
					<h3>Maybe you can take a look at some of the categories?</h3>
						<div class="widget widget_categories">
							<h4>Most used categories</h4>
							<ul>
								<?php wp_list_categories(array(
									'orderby' => 'count',
									'order' 	=> 'DESC',
									'show_count' => '1',
									'title_li' => '',
									'number' => '10',
								) ); ?>
							</ul>
						</div>
						<!--Archive section-->
						<h4>Archives</h4>
						<?php the_widget('WP_Widget_Archives','title=The Archives'); ?>
						<h4>Maybe take a look at home page</h4>
						<p>Click here to go back <a href="<?php echo esc_url(home_url('/') ); ?>">Take me Home</a></p>
				</div>
			</main><!-- #main -->
			<!-- SIDEBAR
		 ================================================== -->
			 <aside class="col-sm-4">
				 <?php get_sidebar(); ?>
			 </aside>
		</div><!-- #primary -->
	</div>
<?php
get_footer();
