<?php
/**
 * ============== Template Name: Guide Two Column Page
 *
 * @package avoriazchalets
 */
get_header();?>


<div class="outer-container mb10">
    <div class="container container__guide">
        <div class="guide-menu">
            <?php wp_nav_menu(array(
                    'theme_location'  => 'guide-menu',
                    'container_class' => 'guide-menu'
                ));?>
        </div>
        <div class="container">
            <?php if ( get_field( 'weather_feed' ) ): ?>
            <div class="row mb3">
                <div class="col-mobile-12">
                    <div class="weather-feed">

                        <iframe
                            src="https://www.meteoblue.com/en/weather/widget/three/avoriaz_france_3035648?geoloc=fixed&nocurrent=0&noforecast=0&days=7&tempunit=CELSIUS&windunit=MILE_PER_HOUR&layout=image"
                            frameborder="0" scrolling="NO" allowtransparency="true"
                            sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox"
                            style="width: 100%; height: 620px"></iframe>
                        <div>
                            <!-- DO NOT REMOVE THIS LINK --><a
                                href="https://www.meteoblue.com/en/weather/week/avoriaz_france_3035648?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget"
                                target="_blank">meteoblue</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-mobile-12 col-desktop-6">


                    <?php if( have_rows('guide_media') ): ?>
                    <?php while( have_rows('guide_media') ): the_row(); ?>
                    <?php if( get_row_layout() == 'advert' ): 
                        $advertImage = get_sub_field('background_image');?>
                    <div class="advert-block guide-block"
                        style="background-image: url(<?php echo $advertImage['url'];?>">
                        <div class="advert-header">
                            <h1 class="heading heading__4"><?php the_sub_field('image_cta_text'); ?></h1>
                            <?php the_sub_field('image_cta_para'); ?>
                        </div>
                        <?php if(get_sub_field('ex_int_link') == 'external'): ?>
                        <?php 
$link = get_sub_field('external_link');
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>

                        <a class="dark-link" target="<?php echo esc_attr( $link_target ); ?>"
                            href="<?php echo esc_url( $link_url ); ?>">
                            <?php echo esc_html( $link_title ); ?><i class="fas fa-external-link-alt"></i>
                        </a>
                        <?php else: ?>
                        <a class="dark-link" href="<?php the_sub_field('internal_link');?>">
                            <?php the_sub_field('internal_link_label');?><i class="fas fa-chevron-right"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php elseif( get_row_layout() == 'image' ): 
            $image = get_sub_field('guide_image');
            ?>
                    <div class="guide-block guide-block__image">

                        <a class="image-popup" href="<?php echo $image['url'];?>"
                            title="<?php echo $image['caption'];?>">
                            <img src="<?php echo $image['url'];?>">
                        </a>


                    </div>

                    <?php elseif( get_row_layout() == 'video' ): 
            $placeHolder = get_sub_field('video_placeholder_image');
            $guideVideo = get_sub_field('video_file');
            ?>
                    <?php if(get_sub_field('select_video_type') == 'file'): ?>
                    <div class="guide-block guide-block__video">

                        <video controls muted poster="<?php echo $placeHolder['url'];?>" width="x" height="y">
                            <source src="<?php echo $guideVideo['url'];?>" type="video/mp4">
                        </video>


                    </div>
                    <?php else: ?>
                    <div class="guide-block guide-block__video embed-container">
                        <?php the_sub_field('youtube_link'); ?>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>



                    <?php endwhile; ?>
                    <?php endif; ?>



                </div>
                <div class="col-mobile-12 col-desktop-6">
                    <div class="guide-text text-block">
                        <?php the_field('guide_text'); ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php get_template_part('template-parts/map-component');?>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>