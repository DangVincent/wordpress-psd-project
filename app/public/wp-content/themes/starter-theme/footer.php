</main>
<footer class="footer">
    <div class="wrapper">
        <div class="footer__linkContainer">
            <a class="footer__link" href="<?php echo site_url(); ?>">
                <?php the_field('logo', 'options'); ?>
            </a>
        </div>
        <div class="footer__socialContainer">
            <p class="footer__text"><?php the_field('follow_text', 'options')?></p>
            <?php wp_nav_menu( array(
            'theme_location' => 'social'
            )); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>