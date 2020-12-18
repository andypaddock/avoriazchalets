<?php
/**
 * ============== Template Name: Holidays
 *
 * @package avoriazchalets
 */
get_header();?>

<div class="container holiday-page mt5">

    <?php get_template_part('template-parts/holiday-feed');?>

</div>

<?php get_template_part('template-parts/special-offers');?>
<?php get_template_part('template-parts/map-component');?>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>