
<?php
/*
 * Template Name:Portfolio
 * */
?>

<?php get_header();?>
		
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/multizoom.css" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/multizoom.js">

// Featured Image Zoomer (w/ optional multizoom and adjustable power)- By Dynamic Drive DHTML code library (www.dynamicdrive.com)
// Multi-Zoom code (c)2012 John Davenport Scheuer
// as first seen in http://www.dynamicdrive.com/forums/
// username: jscheuer1 - This Notice Must Remain for Legal Use
// Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more

</script>

<script type="text/javascript">

jQuery(document).ready(function($){

	$('#image1').addimagezoom({ // single image zoom
		zoomrange: [3, 10],
		magnifiersize: [300,300],
		magnifierpos: 'right',
		cursorshade: true,
		largeimage: '<?php echo get_template_directory_uri(); ?>/img/hayden.jpg' //<-- No comma after last option!
	})


	$('#image2').addimagezoom() // single image zoom with default options
	
	$('#multizoom1').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description', // description selector (optional - but required if descriptions are used) - new
		speed: 1500, // duration of fade in for new zoomable images (in milliseconds, optional) - new
		descpos: true, // if set to true - description position follows image position at a set distance, defaults to false (optional) - new
		imagevertcenter: true, // zoomable image centers vertically in its container (optional) - new
		magvertcenter: true, // magnified area centers vertically in relation to the zoomable image (optional) - new
		zoomrange: [3, 10],
		magnifiersize: [250,250],
		magnifierpos: 'right',
		cursorshadecolor: '#fdffd5',
		cursorshade: true //<-- No comma after last option!
	});
	
	$('#multizoom2').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description2', // description selector (optional - but required if descriptions are used) - new
		disablewheel: true // even without variable zoom, mousewheel will not shift image position while mouse is over image (optional) - new
				//^-- No comma after last option!	
	});
	
})

</script>
<img id="image1" border="0" src="<?php echo get_template_directory_uri(); ?>/img/haydensmall.jpg" style="width:250px;height:338px">
<img id="image2" border="0" src="<?php echo get_template_directory_uri(); ?>/img/listenmusic.jpg" style="width:200px;height:150px">			
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