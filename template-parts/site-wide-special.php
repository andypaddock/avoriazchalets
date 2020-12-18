<?php $specialImage = get_field('specials_image', 'options');?>
<?php $arrowImage = get_field('highlight_image', 'options');?>

<div class="container">
    <div class="specials">
        <div class="specials__highlight">
            <div class="specials__icon">
                <img src="<?php echo $arrowImage['url'];?>" title="<?php echo $arrowImage['title'];?>"
                    alt="<?php echo $arrowImage['alt'];?>" />
                <div class="text no-mob">
                    <h2 class="heading heading__4"><?php the_field('specials_highlight_text', 'options');?></h2>
                </div>
            </div>

        </div>
        <div class="specials__offer">
            <h3 class="heading heading__4"><?php the_field('specials_title', 'options');?></h3>
            <p><?php the_field('specials_description', 'options');?></p>
            <a class="arrow-link dark-link" href="<?php the_field('specials_target', 'options');?>">
                <?php the_field('specials_button', 'options');?>
            </a>
        </div>
        <div class="specials__image" style="background-image: url(<?php echo $specialImage['url'];?>"
            title="<?php echo $specialImage['title'];?>" alt="<?php echo $specialImage['alt'];?>">
        </div>
    </div>
</div>