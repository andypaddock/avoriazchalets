<div class="footer-wrapper">
    <?php if ( get_field('show_alternative') == true ) : ?>
    <?php get_template_part('template-parts/alt-cta');?>
    <?php else: ?>
    <?php get_template_part('template-parts/site-wide-cta');?>
    <?php endif;  ?>
</div>