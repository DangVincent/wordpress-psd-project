<section class="title-link">
    <div class="title-link__content">
        <?php if(get_field('title')): ?>
            <h2 class="title-link__subheading"><?php the_field('title'); ?></h2> 
        <?php endif; ?>   

        <?php $link = get_field('link'); ?>
        <?php if($link): ?>
            <a class="title-link__link" href="<?php echo $link['url']; ?>" target="<?php  echo $link['target']; ?>">
                <?php echo $link['title'] ?>
            </a>
        <?php endif; ?>
    </div>
</section>