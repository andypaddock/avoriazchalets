<?php $heroImage = get_field('background_image');?>
<?php $heroVideo = get_field('background_video', 'options');?>


<div class="hero home-hero">
    <video playsinline autoplay muted loop poster="placeholder.jpg" id="bgvideo" width="x" height="y">
        <source src="<?php echo $heroVideo['url'];?>" type="video/mp4">
    </video>
    <div class="container">
        <h3 class="heading heading__3"><span>Avoriaz</span> Chalets</h3>
        <h1 class="heading heading__1"><?php the_field('headline');?></h1>
        <span class="no-mob"><?php the_field('hero_copy');?></span>
        <span class="read-more"></span>
    </div>

</div>