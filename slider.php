	<div class="slider-wrapper theme-default">
	<div id="slider" class="slider_area  floatleft fix">
		
		<?php if(!is_paged()) { ?>
						<?php
							$args = array( 'post_type' => 'slider-images', 'posts_per_page' => 6 );
							$loop = new WP_Query( $args );
						?>  
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						
                               
								
								
					
						<?php the_post_thumbnail('slider-thumbnail', array('class' => 'postthumbnails')); ?>
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php } ?>		

		

			
				
			</div>
					</div>