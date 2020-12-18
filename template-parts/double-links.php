<?php $leftImage = get_field('left_image', 'options');
$rightImage = get_field('right_image', 'options');?>


<div class="container container__stretch mt8 mb8 mb1">
    <div class="row">
        <div class="col-mobile-12 col-desktop-6 add-block double"
            style="background-image: url(<?php echo $leftImage['url'];?>" title="<?php echo $leftImage['title'];?>"
            alt="<?php echo $leftImage['alt'];?>">
            <h1 class="heading heading__2"><?php the_field('left_title' , 'options');?></h1>
            <a class="arrow-link" href="<?php the_field('left_link_target' , 'options');?>">
                Find Out More
            </a>
        </div>
        <div class="col-mobile-12 col-desktop-6 add-block double"
            style="background-image: url(<?php echo $rightImage['url'];?>" title="<?php echo $rightImage['title'];?>"
            alt="<?php echo $rightImage['alt'];?>">
            <h1 class="heading heading__2"><?php the_field('right_title' , 'options');?></h1>
            <a class="arrow-link" href=" <?php the_field('right_link_target' , 'options');?>">
                Find Out More
            </a>
        </div>
    </div>
</div>