
<?php get_header( ); ?>

<!-- begin main -->
<img src="<?php echo get_template_directory_uri(); ?>/images/banner-tuvan.jpg" alt="">
<div class="row">
	<main class="main">
		
		<div class="sub-page">
			<div class="breadcrumb-tu-van">
				<div class="yoast_breadcrumb">
					
					<?php if ( function_exists('yoast_breadcrumb') ) {
					
					  echo yoast_breadcrumb("","",false);
				
					} ?> 
					
				</div>
			</div>
			<div class="content-page-tu-van">
				<div class="tieude-page"><h1>ĐĂNG KÝ DỊCH VỤ</h1></div>
				<?php echo do_shortcode('[contact-form-7 id="200" title="form tư vấn"]'); ?>
				<div class="map">
				
				<?php $listCoSo = ot_get_option('list_co_so', []); ?>
				<?php if(!empty($listCoSo)) : ?>
					<?php foreach($listCoSo as $item) : ?>
						<div class="title-map">
							<h2><?php echo $item['title'] ?></h2>
							<p><?php echo $item['address'] ?></p>
						</div>
						<?php echo $item['map'] ?>
					<?php endforeach; ?>
				<?php endif; ?>
				</div>	
			</div>

		</div>	
		
	</main>
</div>
<!-- End: main -->

<?php get_footer(); ?>