<div class="row">
    <?php
$loop = new WP_Query(
    array(
        'post_type' => 'property', // This is the name of your post type - change this as required,
        'posts_per_page' => -1,
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
$thumbnail = get_the_post_thumbnail_url();
// The content you want to loop goes in here:
?>

    <div class="col-mobile-12 col-desktop-6 add-block property-block">
        <div class="av-property-image" style="background-image: url(<?php echo $thumbnail ;?>);">
        </div>

        <div class="prop-links">
            <h1 class="heading heading__4"><span>Chalet</span> <?php the_title(); ?></h1>
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