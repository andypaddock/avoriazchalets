<?php
/**
 * ============== Template Name: Avoriaz Properties
 *
 * @package avoriazchalets
 */
get_header();?>
<div class="other-properties mt8 mb8">
    <div class="container container__full mt5">
        <?php get_template_part('template-parts/home-property-feed-av');?>
    </div>
</div>
<?php get_template_part('template-parts/map-component');?>
<?php get_template_part('template-parts/double-links');?>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>