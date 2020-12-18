<!--=========== global =============-->
<div id="map-outer-wrapper" class="map-outer-wrapper open mt5">
    <div class="camp-map">
        <div class="positioning-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/mastermap.png" />
            <div id="Container" class="marker-wrapper">
                <?php
				$args = array(
				  'post_type'   => 'property',
				 );

				$camps = new WP_Query( $args );
				if( $camps->have_posts() ) : while( $camps->have_posts() ) : $camps->the_post();
					$mapImage = get_the_post_thumbnail_url($post->ID, 'medium');?>

                <?php if( have_rows('map_marker') ):
					while ( have_rows('map_marker') ) : the_row();
					$markerPositionVert = get_sub_field('distance_from_top');
					$markerPositionHoriz = get_sub_field('distance_from_left');?>
                <?php if (get_sub_field('distance_from_top')) {?>
                <div class="marker mix"
                    style="top:<?php the_sub_field('distance_from_top');?>.001%; left: <?php the_sub_field('distance_from_left');?>.001%;">
                    <div
                        class="popup no-mob camp-map__card <?php if ( $markerPositionVert < 40 ) {echo 'high';};?> <?php if ( $markerPositionHoriz < 10 ) {echo 'left';};?> <?php if ( $markerPositionHoriz > 89 ) {echo 'right';};?>">
                        <div class="content inner no-mob">
                            <?php echo $markerHigh;?>
                            <div class="img">
                                <img src="<?php echo $mapImage ?>" />
                                <!-- <i class="fas fa-times close-popup"></i> -->
                            </div>
                            <div class="text">
                                <a href="<?php echo $link; ?>">
                                    <h2 class="heading heading__sm">Chalet <?php the_title();?>
                                    </h2>
                                </a>
                                <?php the_field('hero_copy');?>

                                <a class="link" href="<?php the_permalink();?>">Find Out More <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--card-->
                </div>

                <!--marker-->
                <?php }?>
                <?php endwhile; endif;?>
                <?php wp_reset_postdata();
				endwhile; endif;?>
            </div>
            <!--marker-wrapper-->
        </div>
        <!--posn-wrapper-->
    </div>
    <!--camp-map-->
</div>
<!--outer-wrapper-->