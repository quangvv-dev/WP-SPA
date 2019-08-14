<?php 
	add_action( 'add_meta_boxes', 'createServiceMetaBox', 15, '' );
	add_action('save_post','saveServiceMetaBox');
	add_action( 'admin_head', 'tour_admin_head', 20,'' );
	function createServiceMetaBox(){
		
		add_meta_box( 'serviceMetaPost', 'Thông tin Thêm', 'showAdminServiceMetaBox', 'service', 'normal', 'high' );
	}
	function showAdminServiceMetaBox(){
		global $post;
		echo '<input type="hidden" name="tour_custom_meta_nonce" value= "' . wp_create_nonce(basename(__FILE__)) . '"/>';
		$information = get_post_meta( $post->ID, 'information', true );
		$uudiem = get_post_meta( $post->ID, 'uudiem', true );
		$tgchiphi = get_post_meta( $post->ID, 'tgchiphi', true );
		$quytrinh = get_post_meta( $post->ID, 'quytrinh', true );
		$hoidap = get_post_meta( $post->ID, 'hoidap', true );
		$showkm = get_post_meta( $post->ID, 'showkm', true );
		$khuyenmai = get_post_meta( $post->ID, 'khuyenmai', true );
	?>
	
	<div class="panel panel-default">
		 
		  <div class="panel-body">
				<div class="form-group">
					<div class="col-lg-12">
						<span class="form-label"><h3>BẢNG GIÁ DỊCH VỤ</h3></span>
						<?php wp_editor($information, 'information', array('textarea_name' => 'information', 'textarea_rows' => 10)); ?>
					</div>
				</div>
		  </div>
		  <div class="panel-body">
				<div class="form-group">
					<div class="col-lg-12">
						<span class="form-label"><h3>ƯU ĐIỂM</h3></span>
						<?php wp_editor($uudiem, 'uudiem', array('textarea_name' => 'uudiem', 'textarea_rows' => 10)); ?>
					</div>
				</div>
		  </div>
		  <div class="panel-body">
				<div class="form-group">
					<div class="col-lg-12">
						<span class="form-label"><h3>QUY TRÌNH</h3></span>
						<?php wp_editor($quytrinh, 'quytrinh', array('textarea_name' => 'quytrinh', 'textarea_rows' => 10)); ?>
					</div>
				</div>
		  </div>
		   <div class="panel-body">
				<div class="form-group">
					<div class="col-lg-12">
						<span class="form-label"><h3>THỜI GIAN - CHI PHÍ</h3></span>
						<?php wp_editor($tgchiphi, 'tgchiphi', array('textarea_name' => 'tgchiphi', 'textarea_rows' => 10)); ?>
					</div>
				</div>
		  </div> 
		  <div class="panel-body">
				<div class="form-group">
					<div class="col-lg-12">
						<span class="form-label"><h3>HỎI ĐÁP</h3></span>
						<?php wp_editor($hoidap, 'hoidap', array('textarea_name' => 'hoidap', 'textarea_rows' => 10)); ?>
					</div>
				</div>
		  </div>
	</div><!-- panel-default -->
	

	<div class="panel panel-default">
		 
		  <div class="panel-body">

				<div class="form-group">
					<div class="col-lg-12">
						<span class="form-label"><h3>KHUYẾN MẠI</h3></span>
						<?php wp_editor($khuyenmai, 'khuyenmai', array('textarea_name' => 'khuyenmai', 'textarea_rows' => 10)); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<span class="form-label"><h3>SHOW THÔNG TIN KHUYẾN MẠI</h3></span>
						<select class="js-select2 form-control" name="showkm">
							<option value="1" <?php if($showkm=='1') echo 'selected' ?>>Không</option>

							<option value="0" <?php if($showkm=='0') echo 'selected' ?>>Có</option>
							
						</select>
					</div>
				</div>
		  </div>
		  
	</div><!-- panel-default -->
	
	<?php

 	}
 	function saveServiceMetaBox($post_id) {
    // verify nonce  
    if (!wp_verify_nonce($_POST['tour_custom_meta_nonce'], basename(__FILE__)))
        return $post_id;
	    update_post_meta($post_id, 'information', $_POST['information']);
	    update_post_meta($post_id, 'uudiem', $_POST['uudiem']);
	    update_post_meta($post_id, 'tgchiphi', $_POST['tgchiphi']);
	    update_post_meta($post_id, 'quytrinh', $_POST['quytrinh']);
	    update_post_meta($post_id, 'hoidap', $_POST['hoidap']);
	    update_post_meta($post_id, 'showkm', $_POST['showkm']);
	    update_post_meta($post_id, 'khuyenmai', $_POST['khuyenmai']);
	}
	
 
 	function tour_admin_head(){?>
 		<style>
		.panel-title{
			width:100%;
			float:left;
			padding:7px 0 7px 10px;
			color:#000;
			background:#f1f1f1;
			font-weight:bold;
			font-size144px;
		}
		.label-admin{
			font-size:20px;
			font-weight:bold;
			margin:10px 0;
		}
		.gal-img-block{
			height:125px;
		}
		.gal-img img{

			width:100%;
			height:110px;
		}
 		</style>
	<?php
 	}


 // add_action('do_meta_boxes', 'replace_idz_box');  
 //    function replace_idz_box()  
 //    {  
 //        remove_meta_box( 'postimagediv', 'dichvut', 'side' );  

 //        remove_meta_box( 'dong_xediv', 'dichvut', 'side' );  
 //        remove_meta_box( 'nhien-lieudiv', 'dichvut', 'side' );  

 //        add_meta_box('postimagediv', __('Page Background Image'), 'post_thumbnail_meta_box', 'dichvut', 'normal', 'high');  

 //        add_meta_box('dong_xediv', __('Dòng xe'), 'dong_xe_meta_box', 'dichvut', 'normal', 'high');  

 //        add_meta_box('nhien-lieudiv', __('Nhiên Liệu'), 'nhien-lieu_meta_box', 'dichvut', 'normal', 'high');  
 //    } 
 ?>
