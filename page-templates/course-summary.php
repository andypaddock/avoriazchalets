<?php
/**
 * ============== Template Name: Courses & Events Page
 *
 * @package swindonedu
 */
get_header();?>

<div class="container content">
	<div class="main-content">
		<?php
		$today = date('Ymd');
			$args = array(
			  'post_type' => 'product',
			  'posts_per_page' => -1,
			  'post_status' => 'publish',
			  'meta_query' => array(
				array(
				  'key' => 'course_date',
				  'value' => $today,
				  'type' => 'DATE',
				  'compare' => '>='
				)
			  ),
			  'meta_key' => 'course_date',
			  'orderby' => 'meta_value_num',
			  'order' => 'ASC',
			);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="course-item">
					<div class="summary">
						<h2><?php the_title();?></h2>
						<p><?php the_field('course_date');?></p>
						<p class="read-more">Read More</p>
					</div>
					<a href="<?php the_permalink();?>" class="book">Book Now</a>
					<div class="description">
						<?php the_content();?>
						<p class="read-less">Close</p>
					</div>
				</div>
			<?php endwhile;
			} else {
				echo __( 'No products found' );
			}
			wp_reset_postdata();
		?>
		
	</div>
	<div class="side-content">
		SIDE
	</div>	
</div>
	
<?php get_footer();?>