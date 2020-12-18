<div class="container container__narrow mb5">
    <?php 
$images = get_field('gallery_fixed');
$counter = 0;
$galleryCount = the_sub_field('caption');

if( $images) : ?>
    <div class="parent parent__<?php echo ($galleryCount); ?>">

        <?php foreach( $images as $image ):
            $counter++; ?>
        <div class="div<?php echo ($counter); ?> gallery-images"><a href="<?php echo $image['url']; ?>"
                class="lightbox-gallery" alt="<?php echo $image['alt']; ?>"
                style="background-image: url(<?php echo $image['url']; ?>)"></a>
            <div class="image-meta">
                <div class="caption"><?php echo esc_html($image['caption']); ?></div>
                <div class="sharer"><a target="_blank" href="https://www.facebook.com/dialog/feed?app_id=169820529790863&redirect_uri=<?php the_permalink();?>&link=<?php the_permalink();?>&picture=<?php echo $image['url']; ?>&decription=<?php the_title();?>
"><i class="fas fa-share-alt"></i></a></div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>