<div class="container container__narrow40 text-block">
    <?php the_field('transfers_title', 'options'); ?>
</div>
<?php if( have_rows('transfers_table', 'options') ): ?>
<div class="container">
    <?php the_field('transfers_table_heading', 'options'); ?>
</div>
<div class="container">
    <div class="rental-table transfers-table">
        <div class="transfer-legend no-mob">
            <div class="tab-col">No. Of People</div>
            <div class="tab-col">Shared One Way</div>
            <div class="tab-col">Shared Rtn</div>
            <div class="tab-col">Private One Way</div>
            <div class="tab-col">Private Rtn</div>
        </div>


        <?php while( have_rows('transfers_table', 'options') ): the_row(); ?>
        <div class="transfer-legend mobile">
            <div class="tab-col">No. Of People</div>
            <div class="tab-col">Shared One Way</div>
            <div class="tab-col">Shared Rtn</div>
            <div class="tab-col">Private One Way</div>
            <div class="tab-col">Private Rtn</div>
        </div>
        <div class="transfer-rows">
            <div class="tab-col"><?php the_sub_field('transfers_column_1');?></div>
            <div class="tab-col"><?php the_sub_field('transfers_column_2');?></div>
            <div class="tab-col"><?php the_sub_field('transfers_column_3');?></div>
            <div class="tab-col"><?php the_sub_field('transfers_column_4');?></div>
            <div class="tab-col"><?php the_sub_field('transfers_column_5');?></div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>


<?php if( have_rows('private_transfers', 'options') ): ?>
<div class="container">
    <?php the_field('private_transfers_table_heading', 'options'); ?>
</div>
<div class="container">
    <div class="rental-table private-table">
        <div class="private-legend no-mob">
            <div class="tab-col">No. Of People</div>
            <div class="tab-col">Location</div>
            <div class="tab-col">One Way</div>
            <div class="tab-col">Return</div>
        </div>


        <?php while( have_rows('private_transfers', 'options') ): the_row(); ?>
        <?php the_sub_field('private_transfers_title'); ?>
        <div class="private-legend mobile">
            <div class="tab-col">No. Of People</div>
            <div class="tab-col">Location</div>
            <div class="tab-col">One Way</div>
            <div class="tab-col">Return</div>
        </div>
        <div class="private-rows">
            <div class="tab-col"><?php the_sub_field('private_column_1');?></div>
            <div class="tab-col"><?php the_sub_field('private_column_2');?></div>
            <div class="tab-col"><?php the_sub_field('private_column_3');?></div>
            <div class="tab-col"><?php the_sub_field('private_column_4');?></div>
        </div>
        <?php endwhile; ?>



    </div>
</div>
<?php endif; ?>