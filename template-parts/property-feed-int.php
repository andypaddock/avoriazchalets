<div class="row">
    <?php
$loop = new WP_Query(
    array(
        'post_type' => 'intproperty', // This is the name of your post type - change this as required,
        'posts_per_page' => -1,
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
$mainImage = get_the_post_thumbnail_url(get_the_ID(),'large');
// The content you want to loop goes in here:
?>

    <div class="col-mobile-12 add-block property-block">
        <div class="property-image" style="background-image: url(<?php echo $mainImage;?>">
        </div>

        <div class="prop-links">
            <h1 class="heading heading__3"><?php the_title(); ?></h1>
            <h4 class="heading heading__5"><?php the_field('sub_header'); ?></h4>
            <?php the_field('hero_copy'); ?>
            <a href="<?php the_permalink(); ?>">
                Find Out More <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
    <?php endwhile;
wp_reset_postdata();
?>
</div>