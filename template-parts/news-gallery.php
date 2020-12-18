<?php 
$images = get_field('news_gallery');
if( $images ): ?>
<div class="owl-carousel owl-theme news-gallery">
    <?php foreach( $images as $image ): ?>

    <div class="news-gallery__item img" style="background:url(<?php echo $image["url"]; ?>);"></div>

    <?php endforeach; ?>
</div>
<?php endif; ?>