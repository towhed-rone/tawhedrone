
<?php
/*
 * Template Name:Portfolio
 * */
?>

<?php get_header();?>
		
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/prototype.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" type="text/css" media="screen" />
					<div class="main_content fix">
			<div class="page_content floatleft">
				<div class="single_portfolio">
					
				<?php if(!is_paged()) { ?>
						<?php
							$args = array( 'post_type' => 'portfolio-images', 'posts_per_page' => -1 );
							$loop = new WP_Query( $args );
						?>  
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 760,350 ), false, '' ); echo $src[0]; ?>" rel="lightbox[roadtrip]"><?php the_post_thumbnail('portfolio-thumbnail'); ?></a>
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php } ?>
							
</div>
			</div>
			<?php get_sidebar();?>
			
			
		</div>
			<?php get_footer();?>