<?php
/**
 * The template for displaying all single posts
 *
 * @package avoriazchalets
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container container__extra-narrow container__white news-header">
    <div class="left-col news-header__prev">
        <?php previous_post_link('%link', '', false ) ?>
    </div>
    <div class="center-col news-header__detail">
        <p class="entry-author"><?php the_author(); ?></p>
        <p class="entry-date"><?php echo get_the_date('d.m.yy'); ?></p>
        <h2 class="heading heading__4"><?php the_title(); ?></h2>
    </div>
    <div class="right-col news-header__next">
        <?php next_post_link('%link', '', false ); ?>
    </div>
</div>
<div class="container container__extra-narrow container__white page-section">
    <div class="left-col"></div>
    <div class="center-col text-block">
        <?php the_field('main_copy');?>
    </div>
    <div class="right-col"></div>
</div>

<div class="container container__narrow50">

    <?php get_template_part('template-parts/news-gallery');?>

</div>
<?php endwhile; endif; ?>


<div class="other-news mt5 mb1">
    <div class="container container__full">
        <h3 class="heading heading__3 heading__accent mt5 mb5">Other Articles </h3>
        <?php get_template_part('template-parts/news-filter');?>
    </div>
    <div class="container news-feed mb5">

        <?php get_template_part('template-parts/news-feed');?>
    </div>


    <script>
    var mixer = mixitup('.news-feed', {
        controls: {
            toggleLogic: 'and'
        }
    });
    </script>

    <div class="container container__narrow40">
        <div class="load-more mt5 mb10">
            <a href="/news">Load More</a>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer(); ?>