<?php 

/*

* Template Name: Khuyến mại

*/

 ?>
<?php get_header( ); ?>
<?php 

	$query=new WP_Query([

		'post_type'		=>	'service',
		'posts_per_page'	=> 	-1,
		]);
		$i=0;
 ?>
<!-- begin main -->
<div class="row">
	<main class="main">
		
		<div class="sub-page">
			<div class="row">
				<div class="column large-8">
					
				    	<div class="page-khuyenmai">
				    		<div class="yoast_breadcrumb">
						
								<?php if ( function_exists('yoast_breadcrumb') ) {
								
								  echo yoast_breadcrumb("","",false);
							
								} ?> 
								
							</div>
							<h1 class="tieude-trang"><?php the_title(); ?></h1>
							<?php echo do_shortcode( '[hupso]' ); ?>
				    		<div class="" data-something>
			    		  		<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); $i++;?>
			    		  			<?php 

			    		  				$showkm = get_post_meta( $post->ID, 'showkm', true );
										$khuyenmai = get_post_meta( $post->ID, 'khuyenmai', true );
										if($showkm=='0'):
			    		  			 	?>
							     		<div class="tieude-luachon">
											<h2 id="tab<?php echo $post->ID; ?>" class="docs-heading" data-magellan-target="tab<?php echo $post->ID; ?>"><span><a class="docs-heading-icon" href="#tab<?php echo $post->ID; ?>"><?php the_title( ); ?></a></span></h2>
										</div>

						        		<div class="content-khuyenmai">
						        			<?php 

							        			echo get_post_meta( $post->ID, 'khuyenmai', true );

							        		 ?>
						        		</div>
						        		  
						        		<div class="large-12 columns"> 
						        		
						        			<div class="small reveal column-contact" id="<?php echo 'modals-'.$post->ID; ?>" data-reveal> 
						        			<!-- 
						        			  .tiny: 30% wide
						        			  .small: 50% wide
						        			  .large: 90% wide
						        			  .full: 100% width and height, defaults the escClose option to true, as well as creates a close button.
						        			-->
						        			  <h3>Dịch vụ <?php the_title(); ?></h3>
						        			  <?php echo do_shortcode('[contact-form-7 id="173"]'); ?>
						        			  <button class="close-button" data-close aria-label="Close modal" type="button">
						        			    <span aria-hidden="true">&times;</span>
						        			  </button>
						        			</div>
						        			<div class="click-km">
						        			<a data-open="<?php echo 'modals-'.$post->ID; ?>" id="nut_show"><img src="<?php echo get_template_directory_uri(); ?>/images/km.png" alt=""></a>
						        		</div>
						        		</div>
						        	<?php endif; ?>

					        	<?php endwhile;endif; wp_reset_query(); ?>
						      
						    </div>
						    <div class="thoigian-khuyenmai">
						    	<p class="tg-km"><?php echo ot_get_option( 'thoi_gian' ); ?></p>
						    	<p class="cm-km">Royal Spa</p>
						    	<p><?php echo ot_get_option( 'dia_chi' ); ?></p>
						    	<p><?php echo ot_get_option( 'sdt' ); ?></p>
						    </div>
				    	</div>
				    	
				</div>
		  		
		  		<div class="column large-4">
		  			<?php get_sidebar('page'); ?>
		  		</div>
			</div>
		</div>	
		
	</main>
</div>
<!-- End: main -->


<?php get_footer(); ?>

