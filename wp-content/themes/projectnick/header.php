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
				<div class="navbar_style">
				<?php wp_nav_menu( array( 'menus' => 'inspiration_concepts_menu' ) ); ?>
				</div>
			</div>
		 </div>
	</div>
</header>
 
<!-- HERE GOES YOUR HEADER MARKUP, LIKE LOGO, MENU, SOCIAL ICONS AND MORE -->


 
<!-- DON'T FORGET TO CLOSE THE BODY TAG ON footer.php FILE -->
