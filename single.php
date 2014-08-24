<?php get_header();?>
		
		
			
					<div class="main_content fix">
			<div class="page_content floatleft">
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
															
							<div id="post-title" class="clearfix full">
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>			
							</div> <!-- end div .post-title -->
							
							<div class="entry">
							
								<?php the_content(); ?> 
								
								<div class="space"></div>
					<?php if(function_exists('kc_add_social_share')) kc_add_social_share(); ?>
								<div class="single_footer">
									<div class="date">Posted Date:<?php the_time('M d, Y') ?></div>
									<?php if ( comments_open() ) : ?><div class="meta_right ">&bull; <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></div><?php endif; ?>
								</div>

							
									
								
							
							</div> <!-- end div .entry -->
							
							<?php comments_template( '', true ); ?>								
				
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