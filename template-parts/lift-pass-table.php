<?php if( have_rows('lift_pass_rates', 'options') ):
    while( have_rows('lift_pass_rates', 'options') ): the_row();?>
<div class="container container__narrow40 text-block">
    <?php the_sub_field('rates_intro_text');?>
</div>
<div class="container">
    <div><?php the_sub_field('lift_pass_rates_heading'); ?></div>
    <table class="rates">
        <thead>
            <tr>
                <th class="tab-one"><?php the_sub_field('column_1_heading' , 'options');?></th>
                <th class="tab-two"><?php the_sub_field('column_2_heading' , 'options');?></th>
                <th class="tab-three"><?php the_sub_field('column_3_heading' , 'options');?></th>
                <th class="tab-four"><?php the_sub_field('column_4_heading' , 'options');?></th>
            </tr>
        </thead>
        <tbody>
            <?php if( have_rows('rates_table' , 'options') ): ?>
            <?php while( have_rows('rates_table' , 'options') ): the_row(); ?>
            <tr>
                <td class="tab-one"><?php the_sub_field('duration');?></td>
                <td class="tab-two"><?php the_sub_field('adult_price');?></td>
                <td class="tab-three"><?php the_sub_field('child_price');?></td>
                <td class="tab-four"><?php the_sub_field('junior_senior_price');?></td>
            </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
    <?php endif; ?>
</div>
<div class="container container__narrow40 text-block">
    <?php the_sub_field('rates_footer_text');?>
</div>

<?php endwhile; endif;?>