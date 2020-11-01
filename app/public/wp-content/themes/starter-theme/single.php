<div class="blog__header">
  <?php get_header(); ?>
</div>

<div class="wrapper">
  <div class="post__content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post__topContainer">
          <div class="post__textContainer">

            <?php echo get_the_category_list(); ?>
              
            <h1 class="post__heading"><?php the_title(); ?></h1>
            <p class="post__text">By <?php the_author(); ?></p>
          </div>
          
          <div class="post__imageContainer">
            <?php the_post_thumbnail('large'); ?>
          </div>
        </div>

        <div class="post__bottomContainer">
          <?php the_content(); ?>
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div><!-- .entry-content -->
      </div><!-- #post-## -->

    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.content -->

</div>

<?php get_footer(); ?>