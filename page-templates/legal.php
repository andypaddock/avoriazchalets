<?php
/**
 * ============== Template Name: Legal
 *
 * @package avoriazchalets
 */
get_header();?>


<div class="outer-container mb10">
    <div class="container container__left content">
        <div class="contact-details sub-menu">
            <?php wp_nav_menu(array(
                    'theme_location'  => 'legal-menu',
                    'container_class' => 'menu-mandatory-menu'
                ));?>
        </div>
        <div class="form-section">

            <?php the_field('copy');?>
        </div>
    </div>
</div>


<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>