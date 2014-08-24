<?php
/*
 * Template Name:Blog Template
 * */

?>

<?php get_header();?>
		
		
			
					<div class="main_content fix">
			<div class="page_content floatleft">
			<?php query_posts('post_type=post&post_status=publish&posts_per_page=4&paged='); ?>	
					<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
	
	 	
		<div class="blog_single">
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
				<a href="<?php the_permalink();?>" ><?php the_post_thumbnail('blog-thumbnail', array('class' => 'imgthumb')); ?></a>
				
				<p>  <?php the_excerpt('80');?> </p>
				<span class="post_more"><a href="<?php the_permalink();?>" >Read More</a></span>
			</div>	

<?php endwhile; ?>	
<?php endif; ?>
			<div id="pagenavi" class="clearfix">
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
	
	<?php next_posts_link( __( '<span class="older_post alignleft">&larr; Older posts</span>', 'brightpage' ) ); ?>
	<?php previous_posts_link( __( '<span class="new_post alignright">Newer posts &rarr;</span>', 'brightpage' ) ); ?>

	<?php } ?>
</div>
			</div>
			<?php get_sidebar();?>
			
			
		</div>
			<?php get_footer();?>