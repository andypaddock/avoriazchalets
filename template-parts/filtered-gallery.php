<div class="controls">
    <!-- Get a list of all categories in the database, excluding those not assigned to posts -->
    <span class="filter-heading">Filter</span>
    <ul>
        <li type="button" data-filter="all">All</li>
        <li type="button" data-filter=".nature">Ski</li>
        <li type="button" data-filter=".scenery">International</li>
        <li type="button" data-filter=".birds">Scenery</li>
    </ul>
</div>
<div class="gallery">
    <?php
if( have_rows('gallery') ):
while ( have_rows('gallery') ) : the_row();?>

    <?php if( get_row_layout() == 'fullwidth' ):?>

    <?php $image = get_sub_field('image');?>
    <?php $imageType = get_sub_field('inline_item');?>

    <div class="gallery__fullwidth slow-fade mix <?php $slugs = get_sub_field('filter');
        $class_names = join(' ', $slugs);?><?php if ($class_names) { echo ' ' . $class_names;} ?>">

        <a href="<?php echo $image['url']; ?>" class="lightbox-gallery <?php echo $imageType;?>"
            alt="<?php echo $image['alt']; ?>"
            style="background-image: url(<?php echo $image['url']; ?>); height:<?php echo $imageHeight;?>vh;">
            <!--<?php echo $image['caption']; ?>-->
        </a>


    </div>
    <!--fullwidth-->

    <?php elseif( get_row_layout() == 'halves' ):?>
    <?php $imageHeight = get_sub_field('height');?>
    <div class="gallery__halves slow-fade mix <?php $slugs = get_sub_field('filter');
        $class_names = join(' ', $slugs);?><?php if ($class_names) { echo ' ' . $class_names;} ?>">
        <?php if( have_rows('half_images') ):
        while ( have_rows('half_images') ) : the_row();
        $halfImage = get_sub_field('half_image');?>
        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>); height:<?php echo $imageHeight;?>vh;">
            <!--<?php echo $halfImage['caption']; ?>-->
        </a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php elseif( get_row_layout() == 'onethird-twothird' ):?>
    <?php $alignment = get_sub_field('alignment');?>
    <div class="gallery__onethird-twothird <?php echo $alignment;?> slow-fade mix <?php $slugs = get_sub_field('filter');
        $class_names = join(' ', $slugs);?><?php if ($class_names) { echo ' ' . $class_names;} ?>">
        <?php $imageHeight = get_sub_field('height');?>
        <?php if( have_rows('half_images') ):
        while ( have_rows('half_images') ) : the_row();
        $halfImage = get_sub_field('half_image');?>

        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>); height:<?php echo $imageHeight;?>vh;">
            <!--<?php echo $halfImage['caption']; ?>-->
        </a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php elseif( get_row_layout() == 'three-images' ):?>
    <?php $imageHeight = get_sub_field('height');?>
    <?php $alignment = get_sub_field('alignment');?>
    <div class="gallery__three-images <?php echo $alignment;?> slow-fade mix <?php $slugs = get_sub_field('filter');
        $class_names = join(' ', $slugs);?><?php if ($class_names) { echo ' ' . $class_names;} ?>"
        style="height:<?php echo $imageHeight;?>vh;">
        <?php if( have_rows('tri_images') ):
        while ( have_rows('tri_images') ) : the_row();
        $halfImage = get_sub_field('tri_image');?>
        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>);">
            <!--<?php echo $halfImage['caption']; ?>-->
        </a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php endif; //else if halves?>
    <?php endwhile; endif; //main gallery loop?>
</div>
<script>
var mixer = mixitup('.gallery', {
    controls: {
        toggleLogic: 'and'
    }
});
</script>