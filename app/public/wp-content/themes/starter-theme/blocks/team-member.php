<?php

// The Queries
$leadership_args = array(
    'post_type' => 'team_members',
    'posts_per_page' => '-1',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'team',
            'field' => 'slug',
            'terms' => 'leadership'
        )
    )
);
$development_args = array(
    'post_type' => 'team_members',
    'posts_per_page' => '-1',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'team',
            'field' => 'slug',
            'terms' => 'development'
        )
    )
);
$design_args = array(
    'post_type' => 'team_members',
    'posts_per_page' => '-1',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'team',
            'field' => 'slug',
            'terms' => 'design'
        )
    )
);

$leadership_query = new WP_Query( $leadership_args ); 
$development_query = new WP_Query( $development_args ); 
$design_query = new WP_Query( $design_args ); ?>

<div class="team-members">
    <div class="team-members__container">
        <h2 class="team-members__heading">our team</h2>
        <?php
        // The Loop
        if ( $leadership_query->have_posts() ) : ?>
            <h2 class="team-members__subheading">leadership</h2>
            <ul class="team-members__list">
            <?php while ( $leadership_query->have_posts() ) :
            $leadership_query->the_post(); ?>
                <li class="team-members__item">
                    <a class="team-members__link" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('square-large'); ?>
                        <p class="team-members__text"><?php the_title(); ?></p>
                        <?php if(get_field('job_title', get_the_id())) : ?>
                            <p class="team-members__text"><?php echo get_field('job_title', get_the_id()); ?></p>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
            
            <? /* Restore original Post Data */
            wp_reset_postdata();
        else : ?>
            <!-- no posts found -->
            <p>There are no posts</p>
        <?php endif; ?>
    </div>
    <div class="team-members__container">
        <?php
        // The Loop
        if ( $development_query->have_posts() ) : ?>
            <h2 class="team-members__subheading">development team</h2>
            <ul class="team-members__list">
            <?php while ( $development_query->have_posts() ) :
            $development_query->the_post(); ?>
                <li class="team-members__item">
                    <a class="team-members__link" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('square-large'); ?>
                        <p class="team-members__text"><?php the_title(); ?></p>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
    
            <? /* Restore original Post Data */
            wp_reset_postdata();
        else : ?>
            <!-- no posts found -->
            <p>There are no posts</p>
        <?php endif; ?>
    </div>
    <div class="team-members__container">
        <?php
        // The Loop
        if ( $design_query->have_posts() ) : ?>
            <h2 class="team-members__subheading">design team</h2>
            <ul class="team-members__list">
            <?php while ( $design_query->have_posts() ) :
            $design_query->the_post(); ?>
                <li class="team-members__item">
                    <a class="team-members__link" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('square-large'); ?>
                        <p class="team-members__text"><?php the_title(); ?></p>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
    
            <? /* Restore original Post Data */
            wp_reset_postdata();
        else : ?>
            <!-- no posts found -->
            <p>There are no posts</p>
        <?php endif; ?>
    </div>
</div>