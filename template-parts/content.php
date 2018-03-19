<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_SimplyTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="post-details">
              <span class="fa fa-user"></span><?php the_author(); ?>
              <span class="fa fa-calendar"></span><?php the_date(); ?>
              <span class="fa fa-folder"></span><?php the_category(' , '); ?>
              <span class="fa fa-tag"></span><?php the_tags(' ',',',' '); ?>
              <div class="post-comments-badge">
                <a href="<?php comments_link(); ?>"><span class="fa fa-comments"></span><?php comments_number(0,1,'%'); ?></a>
              </div>
									<?php edit_post_link('Edit',' <i class="fa fa-pencil"></i>',''); ?>
            </div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium_large" );
		if(has_post_thumbnail() ) : echo '
			<div class="post-images">
				<img src="'.$thumbnail[0].'" alt="Blog image" >
			</div>';
		endif; ?>
	<div class="post-excerpt">
		<p><?php the_excerpt(); ?></p>
	</div>

	<footer class="entry-footer">
		<?php simplytheme4wordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
