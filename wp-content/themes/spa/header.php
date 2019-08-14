
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo ot_get_option('google_webmaster') ?>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.theme.css" />
  	<?php wp_head(); ?>
  	
  </head>
  <body>
  
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1451177528536703";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
   	<div class="wrapper">
   		<div class="site-page">
	  		<header id="header" class="">
	  			<div class="top-header">
					<div class="menu-main">
						<div class="row">
							<div class="large-12 column">
				            <!-- begin menu main -->
				              <div  id="primary-menu">
				                 <?php echo wp_nav_menu( array( "theme_location" => "primary" ) ); ?>
				              </div>
			          		</div>
						</div>
					</div>
	   		  	</div>
	   		  	<?php if(is_front_page()): ?>
	   		  		<div class="slide-site">
					  	<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit  data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
					        <ul class="orbit-container">
								<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
								<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
								<?php
								/* Get homepage slider list */
								$homeSliderList = ot_get_option( 'slider',  array() );
								$active         = true;
								foreach ( $homeSliderList as $sliderItem ) :
									?>

									<li class="<?php if ( $active ): ?>is-active<?php endif; ?> orbit-slide">
										<a href="<?php echo $sliderItem['url'] ?>">
											<img class="orbit-image" src="<?php echo $sliderItem['image'] ?>" alt="Space">
										</a>
									</li>

									<?php
									$active = false;
								endforeach;
								?>

							</ul>

							<nav class="orbit-bullets">

								<?php $active = true; ?>
								<?php foreach ( $homeSliderList as $key => $sliderItem ) : ?>
									<button <?php if ( $active ): ?>class="is-active"<?php endif; ?>
									        data-slide="<?php echo $key ?>"><span
											class="show-for-sr"><?php echo $sliderItem['title'] ?></span><span
											class="show-for-sr">Current Slide</span></button>
									<?php $active = false; ?>
								<?php endforeach; ?>

							</nav>
				      	</div>
	  				</div>	
	  			<?php endif; ?>
	  		</header><!-- /header -->
	  		<div class="mobile_slogan" style="display:none;"> 
	  			<img src="<?php echo ot_get_option('slogan_mobile'); ?>" class="lazyloading" data-was-processed="true">
	  		</div>
        
        <!-- Sale Image Box -->
        <?php 
          $saleImage = ot_get_option('sale_image', '');
          $page = ot_get_option('sale_url', '');
          
          if($saleImage) :
        ?>
        
        <div class="sale-image">
          <a href="<?php echo get_the_permalink($page) ?>">
            <img src="<?php echo $saleImage ?>" alt="">
          </a>
        </div>
        
        <?php
          endif;
        ?>
        <!-- Sale Image Box -->

    

	