<div class="row">
    <?php
$loop = new WP_Query(
    array(
        'post_type' => 'property', // This is the name of your post type - change this as required,
        'posts_per_page' => -1,
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
$mainImage = get_the_post_thumbnail_url(get_the_ID(),'large');
// The content you want to loop goes in here:
?>

    <div class="col-mobile-12 col-tablet-6 col-desktop-4 add-block property-block">
        <div class="property-image" style="background-image: url(<?php echo $mainImage;?>">
        </div>
        <div class="features-icons">
            <?php if( have_rows('chalet_features') ): ?>
            <?php $count = 0; ?>
            <?php while( have_rows('chalet_features') ): the_row(); ?>
            <?php $count++; ?>
            <?php if ($count < 4) : ?>
            <?php $featureImage = get_sub_field('feature_image');
 ?>
            <div class="feature">
                <div class="feature-image"><img src="<?php echo $featureImage['url'];?>" /></div>
                <div class="feature-text"><?php the_sub_field('feature_text');?></div>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="prop-links">
            <h1 class="heading heading__3"><span>Chalet</span> <?php the_title(); ?></h1>
            <?php the_field('hero_copy'); ?>
            <span class="divider"></span>
            <a class="arrow-link" href="<?php the_permalink(); ?>">
                Find Out More
            </a>
        </div>
    </div>
    <?php endwhile;
wp_reset_postdata();
?>
</div>