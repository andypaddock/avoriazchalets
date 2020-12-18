<?php
$loop = new WP_Query(
    array(
        'post_type' => 'offer', // This is the name of your post type - change this as required,
        'posts_per_page' => -1,
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
$specialImage = get_field('offer_image');
$arrowImage = get_field('offer_icon');
 ?>


<div class="container specials">
    <div class="specials__highlight">
        <div class="specials__icon">
            <img src="<?php echo $arrowImage['url'];?>" title="<?php echo $arrowImage['title'];?>"
                alt="<?php echo $arrowImage['alt'];?>" />
            <div class="text">
                <h2 class="heading heading__4"><?php the_field('offer_icon_text');?></h2>
            </div>
        </div>
    </div>
    <div class="specials__offer">
        <h3 class="heading heading__4"><?php the_title(); ?></h3>
        <p><?php the_field('hero_copy');?></p>

        <?php if(get_field('offer_link') == 'external'): ?>
        <?php 
$link = get_field('external_link');
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>

        <a class="dark-link" target="<?php echo esc_attr( $link_target ); ?>"
            href="<?php echo esc_url( $link_url ); ?>">
            <?php echo esc_html( $link_title ); ?><i class="fas fa-external-link-alt"></i>
        </a>
        <?php else: ?>
        <a class="dark-link" href="<?php the_permalink(); ?>">
            <?php the_field('link_text');?><i class="fas fa-chevron-right"></i>
        </a>
        <?php endif; ?>
    </div>
    <div class="specials__image no-mob" style="background-image: url(<?php echo $specialImage['url'];?>"
        title="<?php echo $specialImage['title'];?>" alt="<?php echo $specialImage['alt'];?>">
    </div>
</div>



<?php endwhile;
wp_reset_postdata();
?>