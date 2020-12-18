<div class="page-section mt5 mb5">

    <div class="expanding-section">
        <div class="expanding-section__head"
            style="background-image: url(<?php the_field('transfer_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('transfer_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('transfer_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content">
                <?php get_template_part('template-parts/transfers-table');?>

            </div>
        </div>
    </div>

    <div class="expanding-section">
        <div class="expanding-section__head"
            style="background-image: url(<?php the_field('lift_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('lift_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('lift_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content pricing">


                <?php get_template_part('template-parts/lift-pass-table');?>


            </div>
        </div>
    </div>

    <div class="expanding-section">
        <div class="expanding-section__head" style="background-image: url(<?php the_field('ski_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('ski_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('ski_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content">



                <?php get_template_part('template-parts/ski-hire-table');?>




            </div>
        </div>
    </div>

    <div class="expanding-section">
        <div class="expanding-section__head"
            style="background-image: url(<?php the_field('school_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('school_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('school_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content">

                <?php get_template_part('template-parts/ski-school-table');?>
            </div>
        </div>
    </div>

</div>