<div class="container container__narrow40 text-block">
    <?php the_field('ski_hire_introduction', 'options'); ?>
</div>

<?php $counter = 0; ?>
<?php if( have_rows('rental_table', 'options') ): ?>
<?php while( have_rows('rental_table', 'options') ): the_row();
$counter++; ?>

<div class="container rental-main radio">
    <div class="selector"><?php the_sub_field('table_title'); ?></div>
    <div class="rental-table ski-hire">
        <div class="mobile day-title">Number Of Days</div>
        <div class="mobile day-select">
            <div class="day-select__buttons">0.5<input class="mobile" type="radio"
                    value="hirehalf<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" checked />
            </div>
            <div class="day-select__buttons">1<input class="hireone mobile" type="radio"
                    value="hireone<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
            <div class="day-select__buttons">2<input class="hiretwo mobile" type="radio"
                    value="hiretwo<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
            <div class="day-select__buttons">3<input class="hirethree mobile" type="radio"
                    value="hirethree<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
            <div class="day-select__buttons">4<input class="hirefour mobile" type="radio"
                    value="hirefour<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
            <div class="day-select__buttons">5<input class="mobile" type="radio"
                    value="hirefive<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
            <div class="day-select__buttons">6<input class="hiresix mobile" type="radio"
                    value="hiresix<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
            <div class="day-select__buttons">7<input class="hireseven mobile" type="radio"
                    value="hireseven<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
            <div class="day-select__buttons">8<input class="hireeight mobile" type="radio"
                    value="hireeight<?php echo ($counter); ?>" name="tables<?php echo ($counter); ?>"
                    id="radio<?php echo ($counter); ?>" /></div>
        </div>
        <?php
$rentgroup = get_sub_field('rentcol1'); ?>
        <div class="col-legend tab-col high<?php echo $rentgroup['high']; ?>">
            <?php echo $rentgroup['contents']; ?>
            <div class="rental-legend">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>
                <!--  -->
                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol1'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <?php echo $rentgroup['contents']; ?></div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol2', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hirehalf<?php echo ($counter); ?> rental-block">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol2'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol3', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hireone<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol3'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol4', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hiretwo<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol4'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol5', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hirethree<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol5'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>
                <!--  -->
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol6', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hirefour<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol6'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol7', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hirefive<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol7'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol8', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hiresix<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol8'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol9', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hireseven<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol9'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="col-head tab-col high<?php echo $rentgroup['high']; ?>"><?php
$rentgroup = get_sub_field('rentcol10', 'options'); ?>
            <?php echo $rentgroup['contents']; ?>
            <div class="hireeight<?php echo ($counter); ?> rental-block no-mob">
                <?php if( have_rows('rental_columns', 'options') ): ?>

                <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>

                <div class="rental-rows">

                    <?php
$rentgroup = get_sub_field('rentcol10'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                        <span class="price"><?php echo $rentgroup['contents']; ?></span>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <!-- END -->
    </div>
</div>
<?php endwhile; ?>

<?php endif; ?>