<?php
/*
Template Name Posts: Single post full width
*/
?>
<?php get_header();  ?>

<!-- begin main -->
<div class="row">
	<main class="main">
		<div class="sub-page sub-page-single">
			<div class="yoast_breadcrumb">	
				<?php if ( function_exists('yoast_breadcrumb') ) {
				  	echo yoast_breadcrumb("","",false);
				} ?> 
			</div>
			<h1 class="detail-item-tab" id="tab-item-about">
	            <span><?php the_title(); ?></span>
	         </h1>
			<?php if (have_posts()): the_post() ; ?>
				<div class="section-main  clearfix">
					<?php the_content();?>
				</div>
			<?php endif;?>
		</div>
	</main>
</div>
<!-- End: main -->

<?php get_footer(); ?>