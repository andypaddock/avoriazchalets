<div class="container container__full pricing mt5 mb5">
    <h4 class="heading heading__4"><?php the_field('pricing_table_header', 'options');?></h4>
    <div class="pricing-grid">
        <?php if( have_rows('chalet_pricing' , 'options') ): ?>
        <table>
            <thead>
                <tr>
                    <th class="season">Season</th>
                    <th class="date">Date</th>
                    <th class="ardoisiere">Ardoisiere</th>
                    <th class="neva">Neva</th>
                    <th class="choucas">Choucas</th>
                    <th class="blanchot">Sapins</th>
                    <th class="chamois">Chamois</th>
                    <th class="saskia">Dahu</th>

                </tr>
            </thead>
            <tbody>

                <?php while( have_rows('chalet_pricing' , 'options') ): the_row(); ?>
                <tr>
                    <td class="season"><?php the_sub_field('season');?></td>
                    <td class="date"><?php the_sub_field('date');?></td>
                    <td class="ardoisiere"><span class="price <?php
if( get_sub_field('ard8_sale_price', 'options' == 'yes') ) {
    echo 'reduced';
}?>"><?php the_sub_field('ard_8');?></span>

                        <?php if( get_sub_field('ard8_sale_price' , 'options' === 'true') ): ?>
                        <span class="offer"><?php the_sub_field('ard_8_sale'); ?></span>
                        <?php endif; ?>




                    </td>

                    <td class="neva"><span class="price <?php
if( get_sub_field('sale_price_neva', 'options' == 'yes') ) {
    echo 'reduced';
}?>"><?php the_sub_field('neva_price');?></span>

                        <?php if( get_sub_field('sale_price_neva' , 'options' === 'true') ): ?>
                        <span class="offer"><?php the_sub_field('neva_sale_price'); ?></span>
                        <?php endif; ?>


                    </td>
                    <td class="choucas"><span class="price <?php
if( get_sub_field('sale_price_choucas', 'options' == 'yes') ) {
    echo 'reduced';
}?>"><?php the_sub_field('choucas_price');?></span>

                        <?php if( get_sub_field('sale_price_choucas' , 'options' === 'true') ): ?>
                        <span class="offer"><?php the_sub_field('choucas_sale_price'); ?></span>
                        <?php endif; ?>


                    </td>
                    <td class="blanchot"><span class="price <?php
if( get_sub_field('sale_price_blanchot', 'options' == 'yes') ) {
    echo 'reduced';
}?>"><?php the_sub_field('blanchot_price');?></span>

                        <?php if( get_sub_field('sale_price_blanchot' , 'options' === 'true') ): ?>
                        <span class="offer"><?php the_sub_field('blanchot_sale_price'); ?></span>
                        <?php endif; ?>

                    </td>

                    <td class="chamois"><span class="price <?php
if( get_sub_field('sale_price_chamois', 'options' == 'yes') ) {
    echo 'reduced';
}?>"><?php the_sub_field('chamois_price');?></span>


                        <?php if( get_sub_field('sale_price_chamois' , 'options' === 'true') ): ?>
                        <span class="offer"><?php the_sub_field('chamois_sale_price'); ?></span>
                        <?php endif; ?>

                    </td>
                    <td class="saskia"><span class="price <?php
if( get_sub_field('sale_price_saskia', 'options' == 'yes') ) {
    echo 'reduced';
}?>"><?php the_sub_field('saskia_price');?></span>

                        <?php if( get_sub_field('sale_price_saskia' , 'options' === 'true') ): ?>
                        <span class="offer"><?php the_sub_field('saskia_sale_price'); ?></span>
                        <?php endif; ?>


                    </td>
                </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>