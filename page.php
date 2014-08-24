<?php get_header();?>
		
		
			
					<div class="main_content fix">
			<div class="page_content floatleft">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
															
							<div id="post-title" class="clearfix full">
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>			
							</div> <!-- end div .post-title -->
							
							<div class="entry">
							
								<?php the_content(); ?> 
								
								<div class="space"></div>
								
							
							</div> <!-- end div .entry -->
							
											
								
						</div> <!-- end div .post -->

					<?php endwhile; ?>

					<?php else : ?>
						<div class="post">
							<h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
						</div>
					<?php endif; ?>
			
			
			</div>
			<?php get_sidebar();?>
			
			
		</div>
			<?php get_footer();?>