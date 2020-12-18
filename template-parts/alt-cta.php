<?php $altImage = get_field('alt_background_image');?>
<div class="footer-cta footer__background background-image" style="background-image: url(<?php echo $altImage['url'];?>"
    title="<?php echo $altImage['title'];?>" alt="<?php echo $altImage['alt'];?>">
    <div class="container">
        <div class="row">
            <div class="col-desktop-1">
            </div>
            <div class="col-desktop-4 col-mobile-12">
                <h1 class="heading heading__1"><?php the_field('alt_cta_text');?></h1>
                <a class="arrow-link" href="<?php the_field('alt_cta_target');?>">
                    <?php the_field('alt_cta_button_text');?>
                </a>
            </div>
        </div>
    </div>
</div>