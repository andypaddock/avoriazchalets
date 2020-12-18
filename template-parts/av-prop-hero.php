<?php $heroImage = get_the_post_thumbnail_url(); ?>


<div class="hero">
    <div class="hero__background background-image" style="background-image: url(<?php echo $heroImage;?>">
    </div>
    <div class="container mt3">
        <div class="row">
            <div class="col-mobile-4 col-desktop-2">
                <?php if( get_field('show_360_link') ): ?>
                <div class="full-360-link no-mob">
                    <?php 
$link = get_field('full_360_link');
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                    <a target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/360.svg" />
                        <?php echo esc_html( $link_title ); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-mobile-12 col-desktop-8">
                <h1 class="heading heading__2"><span>Chalet</span> <?php the_title(); ?></h1>
                <div class="features-icons">
                    <?php if( have_rows('chalet_features') ): ?>
                    <?php while( have_rows('chalet_features') ): the_row(); ?>
                    <?php $featureImage = get_sub_field('feature_image');
 ?>
                    <div class="feature">
                        <div class="feature-image"><img src="<?php echo $featureImage['url'];?>" /></div>
                        <div class="feature-text"><?php the_sub_field('feature_text');?></div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <article><?php the_field('hero_copy');?></article>
            </div>
            <div class="col-mobile-4 col-desktop-2 special-wrapper">
                <?php if( get_field('show_special_offer_tab') ): ?>
                <div class="special-offer no-mob">

                    <div class="text">
                        <h2 class="heading heading__4"><?php the_field('offer_icon_text' ,'options');?></h2>
                    </div>
                    <?php $offerImage = get_field('offer_icon', 'options');
 ?>
                    <img src="<?php echo $offerImage['url'];?>" />
                </div>
                <div id="shadow" class="no-mob"></div>
                <?php endif; ?>


            </div>
        </div>

    </div>
</div>