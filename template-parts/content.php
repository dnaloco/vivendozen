<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package r2gozen
 */

?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>

	<?php if (has_post_thumbnail()): ?>
	<figure class="featured-image index-image">
		<a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark">
		<?php the_post_thumbnail()?>
		</a>
	</figure>
<?php endif;?>


	<div class="post__content">
		<header class="entry-header">
			<?php r2gozen_the_category_list();?>
			<?php
if (is_singular()):
	the_title('<h1 class="entry-title">', '</h1>');
else:
	the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
endif;

if ('post' === get_post_type()): ?>
			<div class="entry-meta">
				<?php r2gozen_posted_on();?>
			</div><!-- .entry-meta -->
			<?php
endif;?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
the_excerpt();
?>
<!--
the_content(sprintf(
	wp_kses(
		/* translators: %s: Name of current post. Only visible to screen readers */
		__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'r2gozen'),
		array(
			'span' => array(
				'class' => array(),
			),
		)
	),
	get_the_title()
));

wp_link_pages(array(
	'before' => '<div class="page-links">' . esc_html__('Pages:', 'r2gozen'),
	'after' => '</div>',
));
?> -->
		</div><!-- .entry-content -->

		<div class="continue-reading">
		<?php $read_more_link = sprintf(
	wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'r2gozen'), array('span' => array('class' => array()))),
	the_title('<span class="screen-reader-text">"', '"</span>', false)
)?>
			<a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark">
				<?php echo $read_more_link; ?>
			</a>
		</div>

	</div> <!-- .post-content -->
</article><!-- #post-<?php the_ID();?> -->
