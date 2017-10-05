<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--=== LINK TAGS ===-->
 
    <!--=== TITLE ===-->  
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
     
    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
      
</head>
<body <?php body_class(); ?>>
<header>
	<div class="row no-gutters">
	 <div class="col-sm-6 col-md-6 col-lg-6">
		<div class="pull-left">
			<div class="logo">
				<img src="<?php bloginfo('stylesheet_directory');?>/images/Logo.png" alt="Inspiration Concepts - Logo" title="Inspiration Concepts - Logo" class="ic_logo"/>
				<a href="#" class="navbar_text">Inspiration Concepts |</a>			
				<a href="design.html" class="navbar_text2">Design |</a>
				<a href="development.html" class="navbar_text2">Development |</a>		
				<a href="support.html" class="navbar_text2">Support </a>
				</div>
			</div>
			</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
		<div class="header_pull_right"> 
		<p class="header_text">
			
	<?php	
			
		date_default_timezone_set('Europe/Amsterdam');
			
		$time = date("H");
		if ($time < "12") 
		{
			echo "Goedemorgen";
		} 
		
		else if ($time >= "13" && $time < "17") 
		{
			echo "Goedemiddag";
		} 
		
		else if ($time >= "17" && $time < "19") 
		{
			echo "Goedeavond";
		} 
		
		else if ($time >= "19") 
		{
			echo "Goedenacht";
		}
    ?>
    
	</p>
			<p class="navbarmenutext">
			Heb je een vraag? Bel ons: 013 - 590 32 56
			</p>
			 <p class="menu_text">MENU</p>
			 <p data-toggle="collapse" data-target="#collapsing" class="menuiconleft">
			 <img src="<?php bloginfo('stylesheet_directory');?>/images/menuicon.jpg" class="menu_icon" alt="menuicon">
			 </p>
			<div class="spaces"></div>		 
		</div>
	   </div>
		 <div class="collapse" id="collapsing">
			<div class="card card-body">
				
				<?php
					class IC_Menu extends Walker_Nav_Menu {
					public function start_lvl( &$output, $depth = 0, $args = array() ) {
						$output .= '<ul>';
					}

					public function end_lvl( &$output, $depth = 0, $args = array() ) {
						$output .= '</ul>';
					}

					public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
						$classes = array();
						if( !empty( $item->classes ) ) {
							$classes = (array) $item->classes;
						}

						$active_class = '';
						if( in_array('current-menu-item', $classes) ) {
							$active_class = ' class="active"';
						} else if( in_array('current-menu-parent', $classes) ) {
							$active_class = ' class="active-parent"';
						} else if( in_array('current-menu-ancestor', $classes) ) {
							$active_class = ' class="active-ancestor"';
						}

						$url = '';
						if( !empty( $item->url ) ) {
							$url = $item->url;
						}

						$output .= '<li'. $active_class . '><a href="' . $url . '">' . $item->title . '</a></li>';
					}

					public function end_el( &$output, $item, $depth = 0, $args = array() ) {
						$output .= '</li>';
					}
				}
				?>
				
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menus', 'inspiration_concepts_menu',
					'walker' => new IC_Menu(),
					'container' => false,
    				'items_wrap' => '<nav id="%1$s"><ul>%3$s</ul></nav>'
					
				));
				
				?>
				
				
			</div>
		 </div>
	</div>
</header>
 
<!-- HERE GOES YOUR HEADER MARKUP, LIKE LOGO, MENU, SOCIAL ICONS AND MORE -->


 
<!-- DON'T FORGET TO CLOSE THE BODY TAG ON footer.php FILE -->
