<?php
/*
 * Template Name:Welcome Template
 * */
?>

<?php get_header();?>
		
		<?php get_template_part('slider');?>
			<div class="my_work fix">
				<h3>Recent Work</h3>
				
				<?php if(!is_paged()) { ?>
						<?php
							$args = array( 'post_type' => 'portfolio-images', 'posts_per_page' => 4 );
							$loop = new WP_Query( $args );
						?>  
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


						<a href="<?php $key="link"; echo get_post_meta($post->ID, $key, true); ?>"><?php the_post_thumbnail('portfolio-thumbnail'); ?></a>
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php } ?>		

				</div>
			<div class="middle_content fix">
				<?php dynamic_sidebar('about-widget');?>
				<div class="skill single floatleft">
					<h2 class="do_title">What I do</h2>
					<ul>
						<li>Website Designing: HTML, CSS, WordPress, PHP, CodeigNiter</li>
						<li>PSD to HTML, PSD to Wordpress</li>
						<li>Responsive Website Design, JavaScript, jQuery</li>
						<li>Programming Skills: C, C++, Java</li>
						<li>Search Engine Optimization (SEO)</li>
						<li>Graphics Design: Photoshop, Adobe Illustrator (Stil Learning)</li>
						
					</ul>
					
					
						<?php dynamic_sidebar('gallery-widget');?>
	
					
					
				</div>
				
 				<?php if(have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>

    <?php the_content();?>

    <?php endwhile; ?>
             <?php endif; ?>

			</div>
			<?php get_footer();?>