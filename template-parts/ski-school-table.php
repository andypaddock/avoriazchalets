<div class="container container__narrow40 text-block">
    <?php the_field('ski_school_introduction', 'options'); ?>
</div>

<?php if( have_rows('school_table', 'options') ): ?>
<?php while( have_rows('school_table', 'options') ): the_row();?>

<div class="container"><?php the_sub_field('table_title'); ?>
    <div class="rental-table">


        <?php if( have_rows('school_columns') ): ?>

        <?php while( have_rows('school_columns') ): the_row(); ?>
        <?php the_sub_field('table_title'); ?>
        <div class="school-rows">
            <div class="tab-col main schoolselect"><?php the_sub_field('school_column_1');?>
            </div>
            <div class="tab-col second">
                <div class="price mobile">Price</div><?php the_sub_field('school_column_2');?>
            </div>
            <div class="tab-col third">
                <div class="ski mobile">Ski</div><?php the_sub_field('school_column_3');?>
            </div>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>

    </div>
</div>
<?php endwhile; ?>

<?php endif; ?>