

<?php get_header( ); ?>
<?php 

	$query=new WP_Query([

		'post_type'		=>	'service',
		'posts_per_page'=>10
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
							<?php 

								$archive=new WP_Query([

									'post_type'		=> 'post',
									'cat'			=> get_query_var('cat')

									]);
								$i=0;
							 ?>
					 		<?php if($archive->have_posts()): while($archive->have_posts()): $archive->the_post(); $i++;?>

					 			
					 			<div class="ds-dichvu">
					 				<div class="row">
					 					<div class="column large-4">
							 				<?php the_post_thumbnail('thumbnail'); ?>
							 			</div>
								 		<div class="column large-8">
								 			<a href="<?php the_permalink(); ?>" title=""><h2><?php the_title(); ?></h2></a>
							 				<div class="tomtat-noidung-archive">
							 					<?php echo wp_trim_words( do_shortcode(get_the_content()),  40, '...' ); ?>
							 				</div>
							 				<div class="readmore">
							 					<a href="<?php the_permalink(); ?>">Xem thêm</a>
							 				</div>
								 		</div>
					 				</div>
					 			</div>
					 			
						 	<?php endwhile;endif; wp_reset_query(); ?>

						 	<!-- phân trang -->
						 	    <div id='navigation'>

								    <div class='wp-pagenavi'>

								    <?php

								    global $wp_query;

								    $big = 999999999; // phân trang seocam.edu.vn

								    echo paginate_links( array(
								    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								    'format' => '?paged=%#%',
								    'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
								    'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
								    'current' => max( 1, get_query_var('paged') ),
								    'total' => $wp_query->max_num_pages
								    ) );
								    ?>

								    <div class='clear'></div>

								    </div>

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

