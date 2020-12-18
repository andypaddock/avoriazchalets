<?php $heroImage = get_the_post_thumbnail_url(); ?>


<div class="hero">
    <div class="hero__background background-image" style="background-image: url(<?php echo $heroImage;?>">
    </div>
    <div class="container container__narrow50 narrow-text mt3">
        <h1 class="heading heading__2"><?php the_title(); ?></h1>
        <article><?php the_field('hero_copy');?></article>
    </div>
</div>