<?php get_header( ); ?>
<?php 

	$query=new WP_Query([

		'post_type'		=>	'service',
		'posts_per_page'        =>  -1,

		]);
		$i=0;
 ?>
<!-- begin main -->
<div class="row">
	<main class="main">
		
		<div class="sub-page">
			<div class="row">
				<div class="column large-8">
					<div class="menufix" data-sticky-container >
					  	<div class="sticky-container" data-sticky-container="">
					  		<nav data-events="resize" data-resize="wqtxgo-sticky" class="columns " data-sticky="t37ej6-sticky" data-anchor="docs" data-sticky-on="large">
							    <div class="docs-toc" id="docsTOC">
							      	<div class="row">
							      		<ul data-events="scroll" data-magellan  class="vertical menu ul-posfix" data-docs-toc="">
				        		     
								        	<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); $i++;?>
								        		<li ><a class="<?php if($i==1){ echo 'active';} ?>" href="#tab<?php echo $post->ID; ?>"><?php the_title(); ?></a></li>
								        	<?php endwhile;endif; wp_reset_query(); ?>

								      	</ul>
							      	</div>
							    </div>
						  	</nav>
					  	</div>
					</div>
					
				    <div class="content-menu-fix" id='docs'>
				    	<div class="yoast_breadcrumb">
						
							<?php if ( function_exists('yoast_breadcrumb') ) {
							
							  echo yoast_breadcrumb("","",false);
						
							} ?> 
							
						</div>
						<?php echo do_shortcode( '[hupso]' ); ?>
			    		<div class="sections" data-something>
		    		  		<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); $i++;?>
					     		<div class="tieude-luachon">
									<h2 id="tab<?php echo $post->ID; ?>" class="docs-heading" data-magellan-target="tab<?php echo $post->ID; ?>"><span><a class="docs-heading-icon" href="#tab<?php echo $post->ID; ?>"><?php the_title( ); ?></a></span></h2>
								</div>

				        		<div class="content-banggia">
				        			<?php 

					        			echo get_post_meta( $post->ID, 'information', true );

					        		 ?>
				        		</div>
				        	<?php endwhile;endif; wp_reset_query(); ?>
					      
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

