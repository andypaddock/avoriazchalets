<?php
/**
 * ============== Template Name: International Property
 *
 * 
 */
get_header();?>

<div class="container container__narrow mt5 mb5">

    <div class="row">

        <div class="col-mobile-12 room-copy">
            <?php the_field('main_property_details');?>
        </div>
    </div>


</div>

<div class="container mt5 mb5">





    <?php if( have_rows('rooms') ): ?>
    <?php while( have_rows('rooms') ): the_row(); 
        $image = get_sub_field('image');
        ?>
    <div class="row int-room mb3">
        <div class="col-mobile-8 room-gallery">
            <div class="owl-carousel rooms-carousel">
                <?php $images = get_sub_field('room_gallery');
							if( $images ):
							foreach( $images as $image ): ?>
                <div class="background-image">
                    <img src="<?php echo $image['sizes']['large']; ?>" />
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
        </div>
        <div class="col-mobile-4 room-content">
            <h1 class="heading heading__3"><?php the_sub_field('room_title'); ?></h1>
            <?php the_sub_field('room_description'); ?>
            <a href="<?php the_permalink(); ?>">
                Find Out More <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    <?php echo wp_get_attachment_image( $image, 'full' ); ?>


    <?php endwhile; ?>

    <?php endif; ?>








</div>
<div class="container container__narrow mb5">
    <?php get_template_part('template-parts/fixed-gallery');?>
</div>
<?php get_template_part('template-parts/things-to-do');?>
<?php get_template_part('template-parts/inter-footermap');?>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>