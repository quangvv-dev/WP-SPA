<div class="right-sidebar">
	<div class="list-right-sidebar">
		<div class="title-right-sidebar">
			<h2>Dịch vụ nổi bật</h2>
		</div>
		<?php 

			// query list service
			$service=new WP_Query([

				'post_type'			=> 'service',
				'posts_per_page'	=>	6,
			]);

		 ?>
		
		<?php 	if($service->have_posts()): while($service->have_posts()): $service-> the_post();	?>
			
			<div class=" dichvu-sidebar">
				<div class="show-service">
					<div class="img-service">
						<a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail-sidebar'); ?></a>
					</div>
					<div class="title-service">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
					</div>

				</div>
			</div>
		<?php endwhile;endif; ?>
	</div>

	<div class="list-right-sidebar">
		<div class="title-right-sidebar">
			<h2>Cẩm nang làm đẹp</h2>
		</div>
		<?php 

			// query list service
			$service=new WP_Query([

				'post_type'			=> 'post',
				'posts_per_page'	=>	4,
				'cat'				=> 7
			]);

		 ?>
		
		<?php 	if($service->have_posts()): while($service->have_posts()): $service-> the_post();	?>
			
			<div class=" camnang">
				<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('thumbnail-sidebar1' ); ?></a>
				<div class="tomtat-camnang">
					<a href="<?php the_permalink(); ?>" title=""><h3><?php the_title(); ?></h3></a>
					<?php echo wp_trim_words( do_shortcode(get_the_content()), 12, '...' ); ?>
					</div>		
			</div>
		<?php endwhile;endif; ?>
	</div>
	<div class="list-right-sidebar">
		<div class="title-right-sidebar">
			<h2>Hỏi đáp làm đẹp</h2>
		</div>
		<div class="hoilamdep">
			<div class="img-lamdep">
				<img src="<?php echo get_template_directory_uri(); ?>/images/hoidaplamdep.jpg" alt="">
			</div>
			<ul>
				<?php 

						// query 10 post category câu hỏi thường gặp
					$question=new WP_Query([

						'post_type'			=> 'post',
						'posts_per_page'	=>	8,
						'cat'				=> 6

						]);

					 ?>
				 	<?php 	if($question->have_posts()): while($question->have_posts()): $question-> the_post();	?>
						<li class="li-cauhoi"><img src="<?php echo get_template_directory_uri(); ?>/images/hoi.png" alt="">  <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></li>
					<?php endwhile;endif; ?>
			</ul>
		</div>
		
	</div>
	<div class="contact-sidebar">
		<?php echo do_shortcode('[contact-form-7 id="189" title="form sidebar"]' ); ?>
	</div>

</div>