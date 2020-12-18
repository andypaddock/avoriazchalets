<div class="row"><?php $avoriazchalets = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
                'posts_per_page'=>16,
                'post__not_in' => array( get_the_ID() ),
			));
			if ( $avoriazchalets->have_posts() ) :
			while ( $avoriazchalets->have_posts() ) :
            $avoriazchalets->the_post();
            $categories = get_the_category();
        $slugs = wp_list_pluck($categories, 'slug');
        $class_names = join(' ', $slugs);
            $postImage = get_field('background_image');
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'large'); ?>
    <div
        class="col-mobile-12 col-tablet-6 col-desktop-4 news-feed__item mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
        <div class="image">
            <a href="<?php the_permalink();?>">
                <div class="background-image" style="background-image: url(<?php echo $thumbnail ;?>);">
                </div>
            </a>
        </div>
        <p class="entry-date"><?php echo get_the_date('d.m.y'); ?></p>
        <h2 class="heading heading__3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <?php echo post_leader_excerpt(); ?>
        <a href="<?php the_permalink();?>" class="button">Read More</a>
    </div>
    <?php endwhile; wp_reset_postdata();endif; ?>
</div>