<div class="container container__narrow60 facility-list mt5 mb5">
    <?php $terms = get_the_terms( $post->ID , 'facility' ); 
                    foreach ( $terms as $term ) {
                        
                        $image = get_field('icon', $term);
                        
                        echo '<div class="facility-item"><img src="'.$image.'" />';
                    echo ' '.$term->name.'</div>' ;
                    
                    
                    } 
                ?>

</div>