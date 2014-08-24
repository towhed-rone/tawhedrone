
<?php
/*
 * Template Name:Portfolio
 * */
?>

<?php get_header();?>
		
		
			
					<div class="main_content fix">
			<div class="page_content floatleft">
				<div class="single_portfolio">
				<?php if(!is_paged()) { ?>
						<?php
							$args = array( 'post_type' => 'portfolio-images', 'posts_per_page' => -1 );
							$loop = new WP_Query( $args );
						?>  
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


						<a href="<?php $key="link"; echo get_post_meta($post->ID, $key, true); ?>"><?php the_post_thumbnail('portfolio-thumbnail'); ?></a>
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php } ?>
							
</div>
			</div>
			<?php get_sidebar();?>
			
			
		</div>
			<?php get_footer();?>