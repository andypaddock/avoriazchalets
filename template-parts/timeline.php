<div class="container container__narrow60 wrapper-timeline mt5 mb5">

    <div class="content-timeline">

        <table class="table-itinerary">

            <?php
		
				if( have_rows('timeline') ):
			
					while ( have_rows('timeline') ) : the_row(); ?>

            <tr>
                <th>
                    <div class="heading heading__secondary-color font600"><?php the_sub_field('name'); ?>
                        <div class="circle"></div>
                    </div>
                </th>

                <td class="pb2">

                    <div class="item-timeline">

                        <h3 class="heading"><?php the_sub_field('title'); ?></h3>

                        <div class="collapsible">

                            <?php if(get_sub_field('image')): ?>

                            <div class="img" style="background:url(<?php the_sub_field('image'); ?>)"></div>

                            <?php endif; ?>

                            <div class="text">

                                <div><?php the_sub_field('description'); ?></div>

                            </div>
                        </div>

                    </div>
                </td>

            </tr>

            <?php endwhile;
					
				endif;
				    
				?>

        </table>
    </div>

</div>