<section class="title-text">
    <div class="title-text__content">
        <?php if(get_field('title')): ?>
            <h2 class="title-text__subheading"><?php the_field('title'); ?></h2> 
        <?php endif; ?>

        <?php if(get_field('content')): ?>
            <?php the_field('content'); ?>
        <?php endif; ?>
    </div>
</section>