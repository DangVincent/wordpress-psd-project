<section class="images-text">
    <div class="images-text__textContainer">
        <?php if(get_field('title')): ?>
            <h2 class="images-text__subheading"><?php the_field('title'); ?></h2> 
        <?php endif; ?>   

        <?php if(get_field('content')): ?>
            <?php the_field('content'); ?>
        <?php endif; ?>

        <?php $link = get_field('link'); ?>
        <?php if($link): ?>
            <a class="images-text__link" href="<?php echo $link['url']; ?>" target="<?php  echo $link['target']; ?>">
                <?php echo $link['title'] ?>
            </a>
        <?php endif; ?>
    </div> 
    <div class="images-text__imageContainer">
        <?php $image = get_field('image');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'large');
        } ?>
    </div>
</section>