
	<?php 

		   /**
			* Displays a navigation menu
			* @param array $args Arguments
			*/
			$args = array(
				'menu' => 'menu_sidebar',
				
				'items_wrap' => '<ul id = "%1$s" class = "widget_category">%3$s</ul>',
				
			);
		
			wp_nav_menu( $args );

	 ?>