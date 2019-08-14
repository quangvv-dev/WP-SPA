<?php get_header( ); ?>
<?php 

	$query=new WP_Query([

		'post_type'		=>	'service',

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
							<?php 

								$uudiem = do_shortcode( get_post_meta( $post->ID, 'uudiem', true ) );
								$tgchiphi = do_shortcode( get_post_meta( $post->ID, 'tgchiphi', true ) );
								$quytrinh = do_shortcode( get_post_meta( $post->ID, 'quytrinh', true ) );
								$hoidap = do_shortcode( get_post_meta( $post->ID, 'hoidap', true ) );

							 ?>
                  <div id="service-sticky" data-sticky-container>
                    <nav data-sticky data-anchor="service-container" data-sticky-on="large">
                      <ul class="horizontal clearfix" data-magellan>
                        <li class="tabs-title"><a href="#gioithieu">Giới thiệu</a></li>
                        <li class="tabs-title"><a href="#uudiem">Ưu điểm</a></li>
                        <li class="tabs-title"><a href="#quytrinh">Quy trình</a></li>
                        <li class="tabs-title"><a href="#hoidap">Hỏi đáp</a></li>
                        <li class="tabs-title"><a href="#thoigian_chiphi">Thời gian - chi phí</a></li>
                      </ul>
                    </nav>
                  </div>
                    
                  <div id="service-container">
                    <div id="gioithieu" data-magellan-target="gioithieu">
                      <div class="tieude-luachon dich-vu">
                        <span>Giới thiệu</span>
                      </div>
                      <div class="service-content">
                        <?php the_content(); ?>
                      </div>
                    </div>
                    <div id="uudiem" data-magellan-target="uudiem">
                      <div class="tieude-luachon dich-vu">
                        <span>Ưu điểm</span>
                      </div>
                      <div class="service-content">
                        <?php echo wpautop($uudiem); ?>
                      </div>
                    </div>
                    <div id="quytrinh" data-magellan-target="quytrinh">
                      <div class="tieude-luachon dich-vu">
                        <span>Quy trình</span>
                      </div>
                      <div class="service-content">
                        <?php echo wpautop($quytrinh) ?>
                      </div>
                    </div>
                    <div id="hoidap" data-magellan-target="hoidap">
                      <div class="tieude-luachon dich-vu">
                        <span>Hỏi đáp</span>
                      </div>
                      <div class="service-content">
                        <?php echo wpautop($hoidap); ?>
                      </div>
                    </div>
                    <div id="thoigian_chiphi" data-magellan-target="thoigian_chiphi">
                      <div class="tieude-luachon dich-vu">
                        <span>Thời gian - chi phí</span>
                      </div>
                      <div class="service-content">
                        <?php echo wpautop($tgchiphi); ?>
                      </div>
                    </div>  
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



