<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.theme.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	 
	  $("#owl-news").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 4,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3]
	 
	  });
	 
	});
</script>

#owl-demo .item{
  margin: 3px;
}
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
}

#owl-news .item{
  margin: 3px;
}
#owl-news .item img{
  display: block;
  width: 100%;
  height: auto;
}
