<div class="jq-tab-wrapper" id="horizontalTab">

    <div class="jq-tab-menu">
        <div class="jq-tab-title" data-tab="planes">
            <img src="<?php the_field('planes_tab_icon'); ?>" />
            <?php the_field ('planes_heading') ?>
        </div>
        <div class="jq-tab-title" data-tab="driving">
            <img src="<?php the_field('driving_tab_icon'); ?>" />
            <?php the_field ('driving_heading') ?>
        </div>
        <div class="jq-tab-title" data-tab="trains">
            <img src="<?php the_field('trains_tab_icon'); ?>" />
            <?php the_field ('trains_heading') ?>
        </div>
        <div class="jq-tab-title" data-tab="ferries">
            <img src="<?php the_field('ferries_tab_icon'); ?>" />
            <?php the_field ('ferries_heading') ?>
        </div>
        <div class="jq-tab-title" data-tab="locally">
            <img src="<?php the_field('locally_tab_icon'); ?>" />
            <?php the_field ('locally_heading') ?>
        </div>
    </div>
    <div class="jq-tab-content-wrapper">

        <div class="jq-tab-menu">
            <div class="jq-tab-content" data-tab="planes">
                <div class="heading heading__3 heading__light"><?php the_field ('planes_heading') ?></div>
                <div class="map-responsive">
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAww1oT-GyrFh_DTnnBF6LwtUBkEVunVlU
                        &origin=<?php the_field ('planes_origin') ?>
  &destination=<?php the_field ('planes_destination') ?>
  &avoid=tolls|highways" allowfullscreen>
                    </iframe>
                </div>
                <div class="transport-copy text-block mt3">
                    <?php the_field('planes_main_text'); ?>
                </div>
            </div>

            <div class="jq-tab-content" data-tab="driving">
                <div class="heading heading__3 heading__light"><?php the_field ('driving_heading') ?></div>
                <div class="transport-copy mt3">
                    <?php the_field('driving_main_text'); ?>
                </div>
            </div>
            <div class="jq-tab-content" data-tab="trains">
                <div class="heading heading__3 heading__light"><?php the_field ('trains_heading') ?></div>
                <div class="row">
                    <div class="col-mobile-12 col-desktop-4">
                        <div class="map-responsive">
                            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAww1oT-GyrFh_DTnnBF6LwtUBkEVunVlU
                                &origin=<?php the_field ('trains_origin1') ?>
  &destination=<?php the_field ('trains_destination1') ?>
  &avoid=tolls|highways" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-mobile-12 col-desktop-4">
                        <div class="map-responsive">
                            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAww1oT-GyrFh_DTnnBF6LwtUBkEVunVlU
                                &origin=<?php the_field ('trains_origin2') ?>
  &destination=<?php the_field ('trains_destination2') ?>
  &avoid=tolls|highways" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-mobile-12 col-desktop-4">
                        <div class="map-responsive">
                            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAww1oT-GyrFh_DTnnBF6LwtUBkEVunVlU
                                &origin=<?php the_field ('trains_origin3') ?>
  &destination=<?php the_field ('trains_destination3') ?>
  &avoid=tolls|highways" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="transport-copy text-block mt3">
                    <?php the_field('trains_main_text'); ?>
                </div>
            </div>
            <div class="jq-tab-content" data-tab="ferries">
                <div class="heading heading__3 heading__light"><?php the_field ('ferries_heading') ?></div>
                <div class="transport-copy text-block mt3">
                    <?php the_field('ferries_main_text'); ?>
                </div>
            </div>
            <div class="jq-tab-content" data-tab="locally">
                <div class="heading heading__3 heading__light"><?php the_field ('locally_heading') ?></div>
                <div class="transport-copy text-block mt3">
                    <?php the_field('locally_main_text'); ?>
                </div>
            </div>

        </div>

    </div>
</div>