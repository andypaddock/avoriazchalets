<?php
/**
 * ============== Template Name: Guide External Facilities
 *
 * @package avoriazchalets
 */
get_header();?>


<div class="outer-container mb10">
    <div class="container container__guideone">
        <div class="guide-menu">
            <?php wp_nav_menu(array(
                    'theme_location'  => 'guide-menu',
                    'container_class' => 'guide-menu'
                ));?>
        </div>
        <div class="guide-travel">
            <?php get_template_part('template-parts/external-interest');?>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/map-component');?>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>