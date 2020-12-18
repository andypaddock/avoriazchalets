<?php $footerImage = get_field('footer_background_image', 'options');?>
<div class="footer-cta footer__background background-image"
    style="background-image: url(<?php echo $footerImage['url'];?>" title="<?php echo $footerImage['title'];?>"
    alt="<?php echo $footerImage['alt'];?>">
    <div class="container">
        <div class="row">
            <div class="col-desktop-1">
            </div>
            <div class="col-desktop-4 col-mobile-12">
                <h1 class="heading heading__1"><?php the_field('footer_cta_text', 'options');?></h1>
                <a class="arrow-link" href="<?php the_field('footer_cta_target', 'options');?>">
                    <?php the_field('footer_cta_button', 'options');?>
                </a>
            </div>
        </div>
    </div>
</div>