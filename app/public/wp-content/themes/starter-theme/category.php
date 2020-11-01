<div class="blog__header">
  <?php get_header(); ?>
</div>

<div class="category wrapper">
  <div class="category__content">
    <h1 class="category__heading">Category: <?php single_cat_title(); ?></h1>
    <?php
      $category_description = category_description();
      if ( ! empty( $category_description ) )
        echo '' . $category_description . '';
        get_template_part( 'loop', 'category' );
      ?>
  </div> <!-- /.content -->
</div>

<?php get_footer(); ?>