<!-- begin main -->
<div class="sub-page">
	<div class="row">
		<div class="column large-8">
			<div class="left-page">
				<div class="yoast_breadcrumb">
				
					<?php if ( function_exists('yoast_breadcrumb') ) {
					
					  echo yoast_breadcrumb("","",false);
				
					} ?> 
					
				</div>
					<div class="tieude-page"><h1 ><?php the_title(); ?></h1></div>
			  		<div class="content-page">
			  			<?php the_content(); ?>
			  		</div>
				</div>
			</div>
  		
  		<div class="column large-4">
  			<?php get_sidebar('page'); ?>
  		</div>
	</div>
</div>	
		
	
<!-- End: main -->