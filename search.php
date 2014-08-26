
<?php get_header();?>
		
		
			
					<div class="main_content fix">
			<div class="page_content floatleft">
				
				<h2 class="search_result"><?php printf( __( 'Search Results for: %s', 'brightpage' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				
					<?php if (have_posts()) : ?>
					
					
<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
	<div class="blog_single search_blog">
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
				<a href="<?php the_permalink();?>" ><?php the_post_thumbnail('blog-thumbnail', array('class' => 'imgthumb')); ?></a>
				
				<p>  <?php the_excerpt('80');?> </p>
				
			</div>	
<?php endwhile; ?>	
<?php endif; ?>


					<?php else : ?>
						<h3 class="archive_not_found">404 <span>not found</span></h3>
					<?php endif; ?>		
		</div>
			<?php get_sidebar();?>
			
			
		</div>
			<?php get_footer();?>