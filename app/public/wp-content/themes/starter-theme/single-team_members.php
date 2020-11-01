<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php 
    $job_title = get_field('job_title');
    $pizza_topping = get_field('favourite_pizza_topping');
    $band = get_field('favourite_band');
    $project = get_field('favourite_project'); ?>

<div class="wrapper">
    <div class="single-member__topContainer">
        <div class="single-member__textContainer">
            <h1 class="single-member__heading"><?php the_title(); ?></h1>
            <?php if(get_field('job_title', get_the_id())) : ?>
                <h2 class="single-member__subheading"><?php echo $job_title ?></h2>
            <?php endif; ?>
            <?php if($pizza_topping || $band || $project) : ?>
                <h3 class="single-member__subheading2">additional information:</h3>
                <?php if($pizza_topping) : ?>
                    <p class="single-member__text">favourite pizza topping: <span class="single-member__innerText"><?php echo $pizza_topping; ?></span></p>
                <?php endif; ?>
                <?php if($band) : ?>
                    <p class="single-member__text">favourite band: <span class="single-member__innerText"><?php echo $band; ?></span></p>
                <?php endif; ?>
                <?php if($project) : ?>
                    <p class="single-member__text">favourite project: <span class="single-member__innerText"><?php echo $project; ?></span></p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="single-member__imageContainer">
            <?php the_post_thumbnail('large'); ?>
        </div>
    </div>
    <div class="single-member__bottomContainer">
        <?php the_content(); ?>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>