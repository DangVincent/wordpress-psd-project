<!-- 
  Template Name: About
 -->
<div class="about__header">
  <?php get_header(); ?>
</div>

<div class="wrapper">

  <div class="about__content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1 class="about__heading"><?php the_title(); ?></h1>
      <div class="about__imageContainer">
          <?php echo wp_get_attachment_image(
              get_post_thumbnail_id(),
              'large',
              false,
              array('class'=>'featured-image')
          ); ?>
      </div>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

</div>

<?php get_footer(); ?>