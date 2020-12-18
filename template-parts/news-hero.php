<?php $heroImage = get_field('background_image');?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>



<div class="hero">
    <div class="hero__background background-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>')">
    </div>
</div>