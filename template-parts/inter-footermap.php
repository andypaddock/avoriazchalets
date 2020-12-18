<div class="container container__stretch">
    <div class="inter-footermap">
        <?php 
$location = get_field('detailed_map_location');
if( $location ): ?>
        <div id='map' class="map" style='width: 100%; height: 70vh;'></div>
        <script>
        mapboxgl.accessToken =
            'pk.eyJ1Ijoic2lsdmVybGVzcyIsImEiOiJjaXNibDlmM2gwMDB2Mm9tazV5YWRmZTVoIn0.ilTX0t72N3P3XbzGFhUKcg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/silverless/ckea9de6w02lj19qo7kwsdgp8',
            center: [<?php echo esc_attr($location['lng']); ?>,
                <?php echo esc_attr($location['lat']); ?>
            ],
            zoom: 14,
            interactive: false
        });
        // add marker to map
        new mapboxgl.Marker()
            .setLngLat([<?php echo esc_attr($location['lng']); ?>, <?php echo esc_attr($location['lat']); ?>])
            .addTo(map);
        </script>
        <?php endif; ?>
    </div>
</div>