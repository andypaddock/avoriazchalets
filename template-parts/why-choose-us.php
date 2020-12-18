<div class="jq-tab-wrapper" id="horizontalTab">
    <?php if( have_rows('choose_us') ): ?>
    <div class="container jq-tab-menu">
        <?php while( have_rows('choose_us') ): the_row(); 
    // vars
    $image = get_sub_field('tab_icon');
    $title = get_sub_field('tab_heading');
    ?>
        <div class="jq-tab-title" data-tab="<?php echo $image['id']; ?>">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <span class="no-mob"><?php echo $title; ?></span>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <div class="jq-tab-content-wrapper">
        <div class="container container__full">
            <?php $counter = 0;
            if( have_rows('choose_us') ): ?>
            <div class="jq-tab-menu">
                <?php while( have_rows('choose_us') ): the_row();
                $counter++;
// vars
$image = get_sub_field('tab_icon');
$title = get_sub_field('tab_heading');
?>
                <div class="jq-tab-content" data-tab="<?php echo $image['id']; ?>">
                    <div class="transport-copy text-block mt3">
                        <?php the_sub_field('tab_main_text'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>