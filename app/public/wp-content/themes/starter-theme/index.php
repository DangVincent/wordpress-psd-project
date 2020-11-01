<?php //index.php is the last resort template, if no other templates match ?>
<div class="blog__header">
  <?php get_header(); ?>
</div>

<div class="blog wrapper">
  <div class="blog__content">
      <h1 class="blog__heading"><?php echo get_the_title(13); ?></h1>
      <div class="blog__imageContainer">
          <?php echo wp_get_attachment_image(
              get_post_thumbnail_id(13),
              'large',
              false,
              array('class'=>'featured-image')
          ); ?>
      </div>
      <form class="blog__form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
          <?php wp_dropdown_categories(); ?>
          <input class="blog__formSubmit" type="submit" name="submit" value="Go" />
      </form>
      <?php get_template_part( 'loop');	?>
  </div> <!--/.content -->

</div> 

<?php get_footer(); ?>