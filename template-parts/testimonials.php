<div class="container container__narrow40 page-section mb8 mt8">
    <div class="testimonials">
        <div class="owl-carousel testimonial-carousel">
            <?php if( have_rows('testimonial_block', 'options') ):
        while( have_rows('testimonial_block', 'options') ): the_row();?>
            <div class="testimonial-carousel__item">
                <p><?php the_sub_field ('testimonial');?></p>
                <cite><?php the_sub_field ('cite');?></cite>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</div>