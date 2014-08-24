<div class="sidebar_area floatright">
	<?php dynamic_sidebar('right_sidebar');?>
				
					<div class="blog_posts single ">
					<h2 class="blog_title">From The Blog</h2>
			<?php query_posts('post_type=post&post_status=publish&posts_per_page=6&paged='); ?>	
					<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
	
	 	
		
		
	<div class="single_blog sidebar_post">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('sidebar-thumbnail', array('class' => 'imgthumb')); ?></a>
						<a href="<?php the_permalink();?>"><?php the_title();?>  </a>
						<p><?php the_excerpt('30');?></p>
					</div>
<?php endwhile; ?>	
<?php endif; ?>

					
					
					
				</div>
			</div>