<!--=========== global =============-->
<div id="map-outer-wrapper" class="container container__full map-outer-wrapper no-mob open mt5 mb5">
    <div class="row">
        <div class="col-desktop-8">
            <div class="camp-map prop-map">
                <div class="positioning-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/intmap.png" />
                    <div id="container" class="marker-wrapper">
                        <?php
				$args = array(
				  'post_type'   => 'intproperty',
				 );

				$camps = new WP_Query( $args );
				if( $camps->have_posts() ) : while( $camps->have_posts() ) : $camps->the_post();
?>

                        <?php if( have_rows('map_marker') ):
					while ( have_rows('map_marker') ) : the_row();
					$markerPositionVert = get_sub_field('distance_from_top');
					$markerPositionHoriz = get_sub_field('distance_from_left');?>
                        <?php if (get_sub_field('distance_from_top')) {?>
                        <div id="<?php echo($post->post_name); ?>" class="marker mix"
                            style="top:<?php the_sub_field('distance_from_top');?>.001%; left: <?php the_sub_field('distance_from_left');?>.001%;">
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
        <div class="col-desktop-4 card-area">

            <?php
				$args = array(
				  'post_type'   => 'intproperty',
				 );

				$camps = new WP_Query( $args );
				if( $camps->have_posts() ) : while( $camps->have_posts() ) : $camps->the_post();
					$mapImage = get_the_post_thumbnail_url($post->ID, 'medium');?>

            <div class="prop-map__card <?php echo($post->post_name); ?>">
                <div class="content inner">
                    <?php echo $markerHigh;?>
                    <div class="img">
                        <img src="<?php echo $mapImage ?>" />
                        <!-- <i class="fas fa-times close-popup"></i> -->
                    </div>
                    <div class="text">
                        <a href="<?php echo $link; ?>">
                            <h2 class="heading heading__sm"><?php the_title();?>
                            </h2>
                        </a>
                        <?php the_field('hero_copy');?>
                        <a class="link" href="<?php the_permalink();?>">Find Out More <i
                                class="fas fa-chevron-right"></i></a>

                    </div>

                </div>
            </div>
            <!--card-->

            <!--marker-->


            <?php wp_reset_postdata();
				endwhile; endif;?>
        </div>
    </div>
</div>
</div>
</div>
<!--outer-wrapper-->