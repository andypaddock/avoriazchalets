<?php
/**
 * ============== Template Name: Property
 *
 * 
 */
get_header();?>

<?php get_template_part('template-parts/horizontal-info');?>
<div class="other-properties mt8 mb8">
    <div class="container container__full">
        <h4 class="heading heading__4">Other Chalets </h4>
    </div>
    <div class="container mt3">
        <?php get_template_part('template-parts/home-property-feed-av');?>
    </div>

</div>
<?php get_template_part('template-parts/map-component');?>
<?php get_footer();?>