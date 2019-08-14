<?php get_header( ); ?>

<!-- begin main -->
<div class="row">
	<main class="main">
	
		<?php 

			if(is_front_page()):
				get_template_part('content','home' );
			else:
				get_template_part('content','page' );
			endif;

		 ?>
	
	</main>
</div>
<!-- End: main -->


<?php get_footer(); ?>