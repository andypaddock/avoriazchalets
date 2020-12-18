<?php
/**
 * ============== Template Name: Gallery Page
 *
 * @package avoriazchalets
 */
get_header();?>

<div class="container container__full mb5">
    <?php get_template_part('template-parts/filtered-gallery');?>
</div>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>