<?php
/**
 * ============== Template Name: News
 *
 * @package avoriazchalets
 */
get_header();?>

<div class="outer-container">
    <div class="container mb2">
        <?php get_template_part('template-parts/news-filter');?>
    </div>
    <div class="container news-feed mb8">

        <?php get_template_part('template-parts/news-feed');?>
    </div>

</div>
<script>
var mixer = mixitup('.news-feed', {
    controls: {
        toggleLogic: 'and'
    }
});
</script>

<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>