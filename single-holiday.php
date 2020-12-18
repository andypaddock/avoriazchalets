<?php
/**
 * ============== Template Name: Holiday
 *
 * 
 */
get_header();?>

<div class="container container__narrow mt5 mb5">
    <div class="holiday-text text-block">
        <?php the_field('holiday_text'); ?>
    </div>
</div>
<div class="other-properties">
    <div class="container container__full">
        <h4 class="heading heading__4">Gallery</h4>
    </div>
</div>
<div class="container container__narrow mt5 mb5">

    <?php get_template_part('template-parts/fixed-gallery');?>
</div>
<div class="other-properties">
    <div class="container container__full">
        <h4 class="heading heading__4">Other Ski Holiday Types</h4>
    </div>
</div>
<div class="container holiday-page mt5">

    <?php get_template_part('template-parts/holiday-feed');?>

</div>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>