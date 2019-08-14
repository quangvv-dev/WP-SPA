<?php get_header( ); ?>

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
              
                  <div id="gioithieu">
                    <?php the_content(); ?>
                  </div>
                 
                <div class="lienhe-spa"> 
                  <div class="tieude-luachon">
					  		 		<span>ĐỂ BIẾT THÊM CHI TIẾT VUI LÒNG LIÊN HỆ</span>
					  		 	</div>
					  		 	<div class="align-center">
					  		 		<?php 
										$khachHangTitle = ot_get_option('khach_hang_title', 'ROYAL SPA');
										$khachHangAddress = ot_get_option('khach_hang_address', 'Royal Spa - Cơ sở 1: Số 38 ngõ 12 Láng Hạ - Ba Đình - Hà Nội ; Cơ sở 2: Số 8 ngõ 1 Tôn Thất Tùng - Đống Đa - Hà Nội');
										$khachHangContact = ot_get_option('khach_hang_contact', 'Tel: 0982.966.663 ; 0982.898.663 / Email: royalspa.hanoi@gmail.com');
									?>
					  		 		<h3><?php echo $khachHangTitle ?></h3>
					  		 		<p><?php echo $khachHangAddress ?></p>
					  		 		<p><?php echo $khachHangContact ?></p>
					  		 	</div>
					  		 </div>
					  		 <div class="bac-si-tu-van">
					  		 	<div class="column-contact">
									<?php echo do_shortcode('[contact-form-7 id="173"]'); ?>
								</div>
					  		 </div>	
					  		 <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>

					  		 <div class="dichvu-quantam"> 
					  		 	<h2 class="tieude-dichvu-quantam"><span>CÓ THỂ BẠN QUAN TÂM</span></h2>
					  		 	<?php 

					  		 		$dvqt=new WP_Query([

										'post_type'		=>	'service',
										'posts_per_page'=>	4
										]);

					  		 	 ?>
					  		 	 <div class="row">
					  		 	 <?php if($dvqt->have_posts()): while($dvqt->have_posts()): $dvqt->the_post();?>
					  		 	 	
					  		 	 		<div class="column large-3"><a href="<?php the_permalink(); ?>">
					  		 	 			<?php the_post_thumbnail('thumbnail'); ?>
					  		 	 			<h3 class="title-dichvu-quantam"><?php the_title(); ?></h3>
					  		 	 		</a></div>
					  		 	 		
					  		 	 	
				  		 	 	<?php endwhile;endif; wp_reset_query(); ?>
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