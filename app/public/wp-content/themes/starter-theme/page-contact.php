<!-- 
    Template Name: Contact 
-->

<div class="contact__header">
  <?php get_header(); ?>
</div>

<div class="contact wrapper">
    <div class="contact__content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h1 class="contact__heading"><?php the_title(); ?></h1>
            <div class="contact__imageContainer">
                <?php echo wp_get_attachment_image(
                    get_post_thumbnail_id(),
                    'large',
                    false,
                    array('class'=>'featured-image')
                ); ?>
            </div>
            <?php the_content(); ?>
        <?php endwhile; // end the loop?>
    </div>
</div>

<?php get_footer(); ?>