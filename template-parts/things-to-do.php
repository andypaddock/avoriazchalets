<div class="jq-tab-wrapper" id="horizontalTab">
    <?php if( have_rows('things_to_do') ):
        $counter = 0; ?>
    <div class="jq-tab-menu">
        <?php while( have_rows('things_to_do') ): the_row();
        $counter++;
    // vars
    
    $image = get_sub_field('tab_icon');
    $title = get_sub_field('tab_heading');
    ?>
        <div class="jq-tab-title" data-tab="<?php echo $counter; ?>">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <?php echo $title; ?>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <div class="jq-tab-content-wrapper">
        <div class="container">
            <?php if( have_rows('things_to_do') ):
                $counter = 0; ?>
            <div class="jq-tab-menu">
                <?php while( have_rows('things_to_do') ): the_row();
                $counter++;
                
// vars
$image = get_sub_field('tab_icon');
$title = get_sub_field('tab_heading');
?>
                <div class="jq-tab-content" data-tab="<?php echo $counter; ?>">
                    <div class="row">
                        <div class="col-mobile-12 col-desktop-6 text-block"><?php the_sub_field('tab_main_text'); ?>
                        </div>
                        <div class="col-mobile-12 col-desktop-6">

                            <?php 
$mainimage = get_sub_field('tab_main_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $mainimage ) {
    echo wp_get_attachment_image( $mainimage, $size );
}
?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>