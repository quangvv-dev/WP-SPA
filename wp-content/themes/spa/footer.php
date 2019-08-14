		<div class="row">
			<footer>
			
				<div class="column large-5">
					<div class="logo-footer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
					</div>
					<div class="diachi">
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo ot_get_option( 'diachi_footer' ); ?></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> Hotline: <span><?php echo ot_get_option( 'hotline' ); ?></span></li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> Email: <?php echo ot_get_option( 'email' ); ?></li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i> Giờ mở cửa: <?php echo ot_get_option( 'gio_mo_cua' ); ?></li>
						</ul>
					</div>
				</div>
				<div class="column large-3">
					<div class="title-footer">
						VỀ CHÚNG TÔI
					</div>
					<div class="menu-footer">
						<?php wp_nav_menu(['theme_location'=>'','menu'=>'menu_footer']) ; ?>
					</div>
				</div>
				<div class="column large-4">
					<div class="fanpage">
						<?php echo ot_get_option( 'fanpage_facebook' ); ?>
					</div>
				</div>
			</footer>
			<div class="fix-btnform"> <a href="#contact_form" class="fancybox"><div>ĐĂNG KÝ NGAY</div><div>Hotline: <?php echo ot_get_option('hotline_fixed'); ?></div> </a></div>
			<div style="display:none" class="fancybox-hidden">
				<div id="contact_form">
					<?php echo do_shortcode('[contact-form-7 id="416" title="Đăng ký ngay"]'); ?>
				</div>
			</div>
			<div class="phonering-alo-phone phonering-alo-green phonering-alo-show hidden-xs visible-sm visible-md visible-lg" id="phonering-alo-phoneIcon">
				<div class="phonering-alo-ph-circle"></div>
				<div class="phonering-alo-ph-circle-fill"></div>
				<div class="phonering-alo-ph-img-circle"> 
					<a href="tel:<?php echo ot_get_option('hotline_fixed'); ?>" class="pps-btn-img" title="Liên hệ"> 
						<img src="https://i.imgur.com/v8TniL3.png" alt="Liên hệ" width="50" onmouseover="this.src='https://i.imgur.com/v8TniL3.png';" onmouseout="this.src='https://i.imgur.com/v8TniL3.png';" class="callme lazyloading" data-was-processed="true"> 
					</a>
				</div>
			</div>
			<div id="fix-ft">
				<div class="fix-ft">
					<div class="nttkm" style="position: static;">
						<div class="nttkm-title br-block" style="background-color: #8D5427;"> 
							<span class="show_dkntt" style="padding-left:65px;padding-right:0px; color: rgb(252, 247, 197);font-weight: bold;font-size: 16px;font-family: vnf_oswald, sans-serif!important;background:url(https://thammyxuanhuong.com/wp-content/uploads/2016/12/phone.png) 20px no-repeat;background-size:30px;">ĐĂNG KÝ TƯ VẤN</span>
						</div>
						<div class="invi_dkntt" style="margin-left: 0px; display: none;"></div>
						<div class="nttkm-content" style="display: none;">
							<div style="margin-top:0px;padding-right:0px;">
								<?php echo do_shortcode('[contact-form-7 id="416" title="Đăng ký ngay"]'); ?>
							</div>
						</div>
					</div>
					<div id="hotmb"> <a href="tel:<?php echo ot_get_option('hotline_fixed'); ?>"><?php echo ot_get_option('hotline_fixed'); ?></a></div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/foundation.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.min.js"></script>
    <?php wp_footer(); ?>
    <?php echo ot_get_option('chat_online'); ?>
    <?php echo ot_get_option('google_analytics'); ?>
  </body>
</html>
