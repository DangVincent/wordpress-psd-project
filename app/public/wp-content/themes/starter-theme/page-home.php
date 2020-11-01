<!-- 
    Template Name: Home 
-->

<div class="home__header">
    <?php get_header(); ?>
</div>

<!-- The Loop -->
<?php if( have_posts()) while(have_posts()) : the_post(); ?>
    <!-- The Main Section -->
    <section class="home-hero">
        <div class="wrapper">
            <div class="home__textContainer">
                <h1 class="home__heading"><?php the_title(); ?></h1>
                <p class="home__text"><?php the_field('home_hero_text'); ?></p>
                <?php $hero_link = get_field('home_hero_link'); ?>
                <a 
                    class="home__link"
                    href="<?php echo $hero_link['url']?>" 
                    target="<?php echo $hero_link['target']; ?>"
                    >
                    <?php echo $hero_link['title']; ?>
                </a>
            </div>
            <div class="home__imageContainer">
                <?php echo wp_get_attachment_image(
                    get_post_thumbnail_id(),
                    'large',
                    false,
                    array('class'=>'featured-image')
                ); ?>
            </div>
        </div>
    </section>
    <!-- The About Us Section -->
    <section class="home__aboutUs wrapper">
        <div class="home__content">
            <div class="home__textContainer">
                <?php if(get_field('about_title')): ?>
                    <h2 class="home__subheading"><?php the_field('about_title'); ?></h2>
                <?php endif; ?>
                <?php if(get_field('about_content')):
                    the_field('about_content');
                endif; ?>
                
                <?php $about_link = get_field('about_link'); ?>
                <?php if($about_link): ?>
                    <a
                        class="home__link"
                        href="<?php echo $about_link['url']; ?>"
                        target="<?php echo $about_link['target']; ?>"
                    >
                    <?php echo $about_link['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="home__imageContainer">
                <?php $about_image = get_field('about_image');
                    echo wp_get_attachment_image(
                        $about_image,
                        'large'
                    );
                ?>
            </div>
        </div>
    </section>

    <?php $employee = get_field('featured_employee'); ?>
    <?php if ($employee): ?>
        <!-- The Featured Employee Section -->
        <section class="home__featuredEmployee wrapper">
            <div class="home__content">
                <div class="home__textContainer">
                    <h3 class="home__subheading2"><?php the_field('featured_employee_title'); ?></h3>
                    <h2 class="home__subheading"><?php echo $employee->post_title; ?></h2>
                    <p class="home__text"><?php echo wp_trim_words($employee->post_content, 50, "😁"); ?></p>
                </div>
                <div class="home__imageContainer">
                    <?php 
                        $employee_id = $employee->ID;
                        echo get_the_post_thumbnail(
                            $employee_id,
                            'large'
                        )
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
<?php endwhile; // end the loop?>
<?php get_footer(); ?>