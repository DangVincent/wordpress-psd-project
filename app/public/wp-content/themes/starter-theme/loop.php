<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<div class="posts">
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="posts__content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="posts__imageContainer">
				<?php the_post_thumbnail('medium') ?> 
			</div>
			<div class="posts__textContainer">
				<h2 class="posts__heading entry-title">
					<a class="posts__link" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
					<?php the_title(); ?>
					</a>
				</h2>
				<p class="posts__text">
				<?php the_author(); ?> - <?php echo get_the_date('d/m/Y'); ?> 
				</p>
				<?php the_category(); ?>
				<?php the_excerpt(); ?>
			</div>
		</article><!-- #post-## -->
	<?php endwhile; // End the loop. Whew. ?>
</div>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<div class="posts__pageLinks">
		<?php next_posts_link('&laquo; Prev'); ?>
		<?php previous_posts_link('Next &raquo;'); ?>
	</div>
<?php endif; ?>
