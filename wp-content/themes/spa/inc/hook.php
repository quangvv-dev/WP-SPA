<?php 

if (!function_exists('getCategoryProduct')) {
	function getCategoryProduct(){
		?>

		<div class="large-6 column">
        	<div class="cat-product">
        		<div class="title-cat-prd"><h2><a href="" title="">Rèm văn phòng</a></h2></div>
        		<div class="img-thumbnail-cat"><img src="<?php echo wp_get_attachment_url(get_woocommerce_term_meta( 13, 'thumbnail_id', true ) ); ?>"></div>
        		<div class="boder-cat"></div>
   	 		</div>
        </div>
        <div class="large-6 column">
        	<div class="cat-product">
        		<div class="title-cat-prd"><h2><a href="" title="">Rèm vải gia đình</a></h2></div>
        		<div class="img-thumbnail-cat"><img src="<?php echo wp_get_attachment_url(get_woocommerce_term_meta( 13, 'thumbnail_id', true ) ); ?>"></div>
        		<div class="boder-cat"></div>
   	 		</div>
        </div>
        <div class="large-6 column">
        	<div class="cat-product">
        		<div class="title-cat-prd"><h2><a href="" title="">Rèm gỗ</a></h2></div>
        		<div class="img-thumbnail-cat"><img src="<?php echo wp_get_attachment_url(get_woocommerce_term_meta( 13, 'thumbnail_id', true ) ); ?>"></div>
        		<div class="boder-cat"></div>
   	 		</div>
        </div>
        <div class="large-6 column">
        	<div class="cat-product">
        		<div class="title-cat-prd"><h2><a href="" title="">Chăn ga gia đình</a></h2></div>
        		<div class="img-thumbnail-cat"><img src="<?php echo wp_get_attachment_url(get_woocommerce_term_meta( 13, 'thumbnail_id', true ) ); ?>"></div>
        		<div class="boder-cat"></div>
   	 		</div>
        </div>
<?php
	
	}
}

?>
<?php
//Begin: Hook sản phẩm nổi bật

if (!function_exists('productHot')) {

	function productHot(){

		$prdHot = new WP_Query( array( 
			'post_type'=>'product',
		    'posts_per_page' => 8, 
		    'meta_query'  => array(
		        array(
		            'key'     => '_featured',
		            'value' => 'yes'
		        	)
		    	)
		    ) 
		);
		?>

		<div class="column large-12">
			
			<div class="danhmuc-sanpham">
				<h2>SẢN PHẨM NỔI BẬT</h2>
			</div>
			<div class="danhsach-sanpham">
				<div class="client-carousel owl-carousel">
					<?php if($prdHot->have_posts()): while($prdHot->have_posts()): $prdHot->the_post(); ?>
						<?php $prd= new WC_Product($post->ID); ?>
						<div class="sanpham">
							<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail(); ?></a>
							<a href="<?php the_permalink(); ?>" title=""><h3><?php the_title(); ?></h3></a>
							<?php my_print_stars(); ?>
							<span class="gia-san-pham"><?php echo wc_price($prd->get_price_html()); ?></span>
							<?php


							?>
						</div><!-- .client -->

					<?php endwhile;endif; ?>

				</div>
			</div>

		</div>

		<?php

	}
}

//Begin: sản phẩm mới nhất
if (!function_exists('productNew')) {

	function productNew(){
		global $product;
		$prdHot = new WP_Query( array( 
			'post_type'=>'product',
		    'posts_per_page' => 8, 
			)
			);
		?>

		<div class="column large-12">
			
			<div class="danhmuc-sanpham danhmuc-sanpham-moinhat">
				<h2>SẢN PHẨM MỚI NHẤT</h2>
			</div>
			<div class="danhsach-sanpham">
				<div class="client-carousel owl-carousel">
					<?php if($prdHot->have_posts()): while($prdHot->have_posts()): $prdHot->the_post(); ?>

						<?php $prd= new WC_Product($post->ID); ?>
						<div class="sanpham">
							<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail(); ?></a>
							<a href="<?php the_permalink(); ?>" title=""><h3><?php the_title(); ?></h3></a>
							<?php my_print_stars(); ?>
							<span class="gia-san-pham"><?php echo wc_price($prd->get_price_html()); ?></span>
							<?php

							?>
						</div><!-- .client -->

					<?php endwhile;endif; ?>

				</div>
			</div>

		</div>

		<?php

	}
}

	function my_print_stars(){
	    global $wpdb;
	    global $post;
	    $count = $wpdb->get_var("
	    SELECT COUNT(meta_value) FROM $wpdb->commentmeta
	    LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
	    WHERE meta_key = 'rating'
	    AND comment_post_ID = $post->ID
	    AND comment_approved = '1'
	    AND meta_value > 0
	");

	$rating = $wpdb->get_var("
	    SELECT SUM(meta_value) FROM $wpdb->commentmeta
	    LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
	    WHERE meta_key = 'rating'
	    AND comment_post_ID = $post->ID
	    AND comment_approved = '1'
	");

	if ( $count > 0 ) {

	    $average = number_format($rating / $count, 2);

	    echo '<div class="starwrapper" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">';

	    echo '<span class="star-rating" title="'.sprintf(__('Rated %s out of 5', 'woocommerce'), $average).'"><span style="width:'.($average*16).'px"><span itemprop="ratingValue" class="rating">' ?>

	    	<?php 
	    		for($i=0;	$i<5;	$i++) {
	    			if($i<$average):
	    			echo '<i class="fa fa-star" aria-hidden="true"></i>';
	    			//echo '<i class="fa fa-star" aria-hidden="true"></i>';
	    			else: 
	    				echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
	    		endif;
	    		}

	    	 ?>

	    <?php '</span> </span></span>';

	    echo '</div>';
	    }
	    else{
	    	echo '<span itemprop="" class="starwrapper" title="chưa được xếp hạng">chưa có đánh giá nào</span>';
	    }

	}

?>
