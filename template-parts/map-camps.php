<?php
	
$args = array(
	'numberposts' => -1,
	'post_type'   => 'property'
);
$allCamps = get_posts( $args );
$camps = array();
foreach($allCamps as $camp) {
	$camps[$camp->post_name] = array(
		"title_camp"  => $camp->post_title,
		"link"        => get_permalink($camp->ID),
		"destination" => get_the_terms($camp->ID, 'location')[0]->name,
		"description" => substr(wp_strip_all_tags(get_field("hero_copy", $camp->ID), true), 0, 110) . "...",
		"image"       => wp_get_attachment_image_src( get_post_thumbnail_id($camp->ID), 'medium' )[0]
	);
}

?>

<div class="property-map camps mt5"
    <?php printf('camps="%s"', htmlspecialchars(json_encode($camps), ENT_QUOTES, 'UTF-8')); ?>>
    <div class="popup">
        <div class="content">
            <div class="img">
                <a href="<?php echo $link; ?>"></a>
                <i class="fas fa-times close-popup"></i>
            </div>
            <div class="pb2 pt1 pl2 pr2">

                <a href="<?php echo $link; ?>">
                    <h2 class="heading heading__sm slide-up"></h2>
                </a>

                <span></span>

                <p></p>

                <a class="button" href="http://desert---delta.local/camps/camp-moremi/">Read more</a>

            </div>

        </div>
        <div class="path-dotted"></div>
    </div>
    <div class="path-dotted-small"></div>
    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/mastermap.png" />


    <!-- MAP -->

    <!-- <div class="map-wrapper">

       

        <canvas id="map-canvas"></canvas>

        <?php get_template_part("template-parts/map/map-info"); ?>

    </div> -->

</div>