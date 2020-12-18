<?php get_header();
/**
 * Default Page Template
 *
 * @package avoriazchalets
 */
?>
<?php if ( have_posts() ) :?>
<?php woocommerce_content(); ?>
<?php endif; ?>
<?php get_footer();?>
