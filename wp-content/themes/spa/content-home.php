<div class="dichvu dichvu-full">
	<div class="infomation">
		<div class="row">
			<?php 
				$service=new WP_Query([
					'post_type'			=> 'service',
					'posts_per_page'	=>	50,
				]);
			 ?>
			<div class="dich-vu">
				<?php 	if($service->have_posts()): while($service->have_posts()): $service-> the_post();	?>
					<div class="item">
						<div class="imgwrap">
							<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('thumbnail'); ?></a>
						</div>
						<h3 class="vmzfont">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span><?php the_title(); ?></span></a>
						</h3>
					</div>
				<?php endwhile;endif; ?>
			</div>
			<div class="text-dichvu">
				<?php echo ot_get_option('text_dich_vu'); ?>
			</div>
		</div>
	</div>
</div>
<div class="home-widget row-2 widget-area clear">
	<div class="row">
		<div class="column large-6">
			<div class="video-gt">
				<h2 class="widget-title"><span>VIDEO Giới thiệu</span></h2>
				<div class="textwidget">
					<a href="#video-gt" class="fancybox">
						<img src="<?php echo ot_get_option('anh_video_gioi_thieu'); ?>" />
					</a>
					<div style="display:none" class="fancybox-hidden">
						<div id="video-gt">
							<?php echo ot_get_option('link_video_gioi_thieu'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="column large-6">
			<div class="y-kien-khach-hang">
				<h2 class="widget-title"><span>ý kiến khách hàng</span></h2>
				<div class="execphpwidget" id="scrollbar">
					<div class="ykkh-wrapper">
						<div class="wrapcus">
							<?php 
								$question=new WP_Query([

									'post_type'			=> 'post',
									'posts_per_page'	=>	10,
									'cat'				=> 10,
									]);
								 ?>
							 	<?php 	if($question->have_posts()): while($question->have_posts()): $question-> the_post();	?>
									<div class="single clearfix">
										<div class="thumb"> 
											<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail(); ?></a>
										</div>
										<div class="ykkh">
											<p class="ykkh-title"> 
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</p> 
											<?php echo wp_trim_words( do_shortcode(get_the_content()), 30, '...' ); ?>
										</div>
										<div class="clear"></div>
									</div>
								<?php endwhile;endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="home-widget row-3 widget-area clear">
	<div class="tai-sao">
		<h2 class="widget-title"><span>TẠI SAO LỰA CHỌN ROYAL SPA?</span></h2>
		<div class="textwidget">
			<div class="infomation-lc">
				<div class="row">
					<div class="column small-6 large-3">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/csvc.jpg" alt="royal spa">
						</div>
						<div class="title-info">
							Cơ sở vật chất
							<span>Hiện đại bậc nhất</span>
						</div>
					</div>
					<div class="column small-6 large-3">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/doingu.jpg" alt="royal spa">
						</div>
						<div class="title-info">
							Đội ngũ bác sĩ
							<span>Uy tín - chuyên nghiệp</span>
						</div>
					</div>
					<div class="column small-6 large-3">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/congnghe.jpg" alt="royal spa">
						</div>
						<div class="title-info">
							Công nghệ thẩm mỹ
							<span>Tiên tiến - hàng đầu</span>
						</div>
					</div>
					<div class="column small-6 large-3">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/quytrinh.jpg" alt="royal spa">
						</div>
						<div class="title-info">
							Quy trình thẩm mỹ
							<span>Chuyên nghiệp - an toàn</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="home-widget row-4 widget-area clear">
	<div class="row">
		<div class="column small-12 large-9">
			<div class="tin-tuc-noi-bat">
				<h2 class="widget-title"><span>Tin tức nổi bật</span></h2>
				<?php 
					$question=new WP_Query([
						'post_type'			=> 'post',
						'posts_per_page'	=>	3,
						'cat'				=> 7
						]);
					 ?>
					<div class="execphpwidget-news">
				 		<div class="ykkh-wrapper-news ttmn-chil-wrapper">
						 	<?php 	if($question->have_posts()): while($question->have_posts()): $question-> the_post();	?>
						 		<div class="single clearfix">
						 			<div class="thumb"> 
						 				<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('homepage-thumb' ); ?></a>
						 			</div>
						 			<div class="ykkh">
						 				<p class="ykkh-title">
						 					<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
						 				</p>
						 				<?php echo wp_trim_words( do_shortcode(get_the_content()), 40, '...' ); ?>
						 			</div>
						 		</div>
							<?php endwhile;endif; ?>
						</div>
				 	</div>
			</div>
		</div>
		<div class="column small-12 large-3">
			<div class="mang-xa-hoi">
				<h2 class="widget-title"><span>Mạng Xã Hội</span></h2>
				<div class="textwidget">
					<?php echo ot_get_option( 'fanpage_facebook' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="home-widget row-5 widget-area clear">
	<div class="service-home">
		<h2 class="widget-title"><span>Dịch vụ nổi bật</span></h2>
		<div class="textwidget">
			<?php 
				$service=new WP_Query([
					'post_type'			=> 'service',
					'posts_per_page'	=>	50,
				]);
			 ?>
			<ul>
				<?php 	if($service->have_posts()): while($service->have_posts()): $service-> the_post();	?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile;endif; ?>
			</ul>
		</div>
	</div>
</div>
<!-- End: Div bottom main -->