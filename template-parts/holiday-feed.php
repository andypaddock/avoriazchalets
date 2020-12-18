<div class="row"><?php
$loop = new WP_Query(
    array(
        'post_type' => 'holiday', // This is the name of your post type - change this as required,
        'posts_per_page' => -1,
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
$mainImage = get_the_post_thumbnail_url(get_the_ID(),'large');
// The content you want to loop goes in here:
?>

    <div class="col-mobile-12 col-desktop-4 add-block property-block">
        <div class="property-image" style="background-image: url(<?php echo $mainImage;?>">
        </div>

        <div class="prop-links">
            <h1 class="heading heading__4"><?php the_title(); ?></h1>
            <a class="arrow-link" href="<?php the_permalink(); ?>">
                Find Out More
            </a>
        </div>
    </div>

    <?php endwhile;
wp_reset_postdata();
?>
</div>