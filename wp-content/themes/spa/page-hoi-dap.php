<?php 

/*
* Template Name: Hỏi đáp
*/


 ?>

<?php get_header( ); ?>

<!-- begin main -->
<div class="row">
	<main class="main">
		
		<div class="sub-page">
			<div class="page-hoi-dap">
				<div class="yoast_breadcrumb">
					
					<?php if ( function_exists('yoast_breadcrumb') ) {
					
					  echo yoast_breadcrumb("","",false);
				
					} ?> 
					
				</div>
				<div class="form-timkiem">
					<form>
						<input type="text" name="" value="" class="txt-search" placeholder="Tìm kiếm">
						<button type="submit" name="" class="sb_search"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<div class="noidung-hoidap">
					<?php 

						$question=new WP_Query([

							'post_type'		=> 'post',
							'posts_per_page'=>'8',
							'cat'			=> 6

							]);
						$i=0;
					 ?>
				 		<?php if($question->have_posts()): while($question->have_posts()): $question->the_post(); $i++;?>

					 		
					 		<?php if($i<=2): ?>
					 			<div class="list-top">
						 			<div class="hoidap">
						 				<i class="fa fa-comments" aria-hidden="true"></i>	Hỏi đáp
						 			</div>
						 			<div class="column large-4">
						 				<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('thumbnail-question',['class'=>'img-question']); ?></a>
						 			</div>
						 			<div class="column large-8">
						 				<a href="<?php the_permalink(); ?>" title=""><h2><?php the_title(); ?></h2></a>
						 				<div class="tomtat-noidung-cauhoi">
						 					<?php echo wp_trim_words( do_shortcode(get_the_content()), 130, '...' ); ?>
						 				</div>
						 				<div class="readmore">
						 					<a href="<?php the_permalink(); ?>">Xem thêm</a>
						 				</div>
						 			</div>
						 		</div>
						 	<?php else: ?>
						 		<div class="column large-6">
						 			<div class="list-bottom">
						 				<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('homepage-thumb',['class'=>'img-question1']); ?></a>
						 				<div class="tomtat-noidung-cauhoi1">
						 					<?php echo wp_trim_words( do_shortcode(get_the_content()), 20, '...' ); ?>
						 				</div>
						 				<div class="readmore1">
						 					<a href="<?php the_permalink(); ?>">Xem thêm</a>
						 				</div>
						 			</div>
					 			</div>
					 		<?php endif; ?>
					 	<?php endwhile;endif; wp_reset_query(); ?>
				</div>	
				<div class="dichvu-quantam">
		  		 	<h2 class="tieude-dichvu-quantam"><span>CÓ THỂ BẠN QUAN TÂM</span></h2>
		  		 	<?php 

		  		 		$dvqt=new WP_Query([

							'post_type'		=>	'service',
							'posts_per_page'=>	6
							]);

		  		 	 ?>
		  		 	 <div class="row">
		  		 	 <?php if($dvqt->have_posts()): while($dvqt->have_posts()): $dvqt->the_post();?>
		  		 	 	
		  		 	 		<div class="column large-2">
		  		 	 			<?php the_post_thumbnail('thumbnail'); ?>
		  		 	 			<h3 class="title-dichvu-quantam"><?php the_title(); ?></h3>
		  		 	 		</div>
		  		 	 		
		  		 	 	
	  		 	 	<?php endwhile;endif; wp_reset_query(); ?>
	  		 	 	</div>
		  		 </div>
			</div>

		</div>	
		
	</main>
</div>
<!-- End: main -->

<?php get_footer(); ?>