<!-- 
    Template Name: Services
-->
<div class="services__header">
    <?php get_header(); ?>
</div>

<div class="services wrapper">
    <?php if ( have_posts()) while(have_posts())
    : the_post(); ?>
        <h1 class="services__heading"><?php the_title(); ?></h1>
        <div class="services__imageContainer">
            <?php echo wp_get_attachment_image(
                get_post_thumbnail_id(),
                'large',
                false,
                array('class'=>'featured-image')
            ); ?>
        </div>
        <?php if(have_rows('services')): ?>
            <ul class="services__list" role="tablist">
            <?php while(have_rows('services')): the_row(); ?>
                <li id="<?php the_sub_field('name'); ?>" class="services__item" role="tab">
                    <h2 class="services__subheading"><?php the_sub_field('name'); ?></h2>
                </li>
            <?php endwhile; ?>
            </ul>
            <?php while(have_rows('services')): the_row(); ?>
                <div class="services__content" role="tabpanel" aria-labelledby="<?php the_sub_field('name'); ?>">
                    <?php the_sub_field('description'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>