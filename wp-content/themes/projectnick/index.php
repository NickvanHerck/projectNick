<!DOCTYPE html>
<title>Homepage</title>

<?php
	get_header( 'header.php' );
	get_post( 'post.php' );
?>
<!-- Bootstrap -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
<div class="content content_achtergrond">
	<div class="jumbotron">
		<div class="row justify-content-center">
			<div class="btn-group buttongroup" role="group" aria-label="Button Group">
			<a href="webshop.html" class="btn button_blue arrow">Magento 2 Webshop</a> 
			<a href="contact.html" class="btn button_white arrow">Contact</a>
			<a href="wordpress.org" class="btn button_blue arrow">Wordpress Website</a>
			</div>
		</div>
	</div>
<div class="intro">
<div class="container intro_vak">
<div class="row ">
    <div class="col-sm-12 col-md-6 col-lg-6 intro_text1">
      <br/>
      Conversiegerichte
      <br/>
      <br/> 
		website &#38; webshops
		<br/>
		<br/>
		Ga voor online succes!
   	 <br/>
   	 <br/> 
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 intro_text2">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam molestie arcu id ipsum auctor, nec fermentum diam finibus. Fusce efficitur ipsum quis risus dictum auctor. Nulla posuere eu ante sed malesuada. Pellentesque hendrerit, ex non posuere vestibulum, diam urna rhoncus dolor, in porta odio turpis sed nunc. Aenean rhoncus porta mauris
    </div>
	</div>
  </div>
</div>
<br/>
<br/>
<div class="diensten">
<div class="container">
<div class="row diensten_vlakken">
    <div class="col-sm-6 col-md-6 col-lg-6 diensten_vak1">
    <br/>
     <img src="<?php bloginfo('stylesheet_directory');?>/images/MagentoLogo.png" alt="Magento Logo">
     <br/>
     <br/>
      <p class="dienstenvak_titel">Succesvolle
      <br/>
	  e-commerce oplossing</p>
      <br/>
      <br/>
      <div class="dienstentekst">Lorem ipsum dolor sit amet, consectetur
      <br/>
      adipiscing elit. Donec consequat hendrerit 
      <br/>
      tincidunt. Mauris vel ante mattis, ultrices dolor 
      <br/>
      id, aliquam lorem. Fusce ut massa eros.
	  </div>
     <br/>
     <br/>
      <a href="meer1.html" class="btn button_white arrow">Meer Informatie</a>
      <br/>
      <br/>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 diensten_vak2">
     <br/>
     <img src="<?php bloginfo('stylesheet_directory');?>/images/WordPress.png" alt="Wordpress logo">
     <br/>
     <br/>
      <p class="dienstenvak_titel">Conversiegerichte
      <br/>
	  WordPress website</p>
      <br/>
      <br/>
      <div class="dienstentekst">Lorem ipsum dolor sit amet, consectetur 
      <br/>
      adipiscing elit. Donec consequat hendrerit 
      <br/>
      tincidunt. Mauris vel ante mattis, ultrices dolor 
      <br/>
      id, aliquam lorem. Fusce ut massa eros.
	  </div>
      <br/>
      <br/>
      <a href="meer2.html" class="btn button_white arrow">Meer Informatie</a>
	  <br/>
      <br/>
    </div>
  </div>
</div>
</div>
<br/>
<div class="magento">
<div class="container-fluid magento2_tekstvak">
<br/>
<br/>
<img src="<?php bloginfo('stylesheet_directory');?>/images/Magento_-_Logo.png" alt="magentologo" class="magentologo">
<p class="title_magento2">Wij werken met Magento 2</p>
<br/>
<br/>
<br/>
<br/>
<div class="row">
<div class="col-sm-4 col-md-4 col-lg-4">
<div class="smallertitles_magento2">Magento 2 webshop</div>
<hr class="magento_underline">
<p class="text_magento2">Lorem ipsum dolor sit amet, consectetur <br/> adipiscing elit. Sed accumsan finibus blandit. <br/> Proin cursus condimentum varius. Sed in <br/> nunc ac eros consectetur scelerisque. Ut <br/> gravida augue a massa porta, eu vulputate
</p>
<br/>
<a href="meer3.html" class="btn button_magento2 arrow">Meer Informatie</a>
<br/>
<br/>
<br/>
</div>
<div class="col-sm-4 col-md-4 col-lg-4">
<div class="smallertitles_magento2">Magento 2 B2B</div>
<hr class="magento_underline">
<p class="text_magento2">Lorem ipsum dolor sit amet, consectetur <br/> adipiscing elit. Sed accumsan finibus blandit. <br/> Proin cursus condimentum varius. Sed in <br/> nunc ac eros consectetur scelerisque. Ut <br/> gravida augue a massa porta, eu vulputate
</p>
<br/>
<a href="meer4.html" class="btn button_magento2 arrow">Meer Informatie</a>
<br/>
<br/>
<br/>
</div>
<div class="col-sm-4 col-md-4 col-lg-4">
<div class="smallertitles_magento2">Magento 2 overstapservice</div>
<hr class="magento_underline">
<p class="text_magento2">Lorem ipsum dolor sit amet, consectetur <br/> adipiscing elit. Sed accumsan finibus blandit. <br/> Proin cursus condimentum varius. Sed in <br/> nunc ac eros consectetur scelerisque. Ut <br/> gravida augue a massa porta, eu vulputate
</p>
<br/>
<a href="meer5.html" class="btn button_magento2 arrow">Meer Informatie</a>
<br/>
<br/>
<br/>
<br/>
</div>
</div>
<br/>
</div>
</div>
<br/>
<br/>
<div class="portfolio">
<div class="container">
	<p class="title_bolder">
		Waar we trots op zijn
	</p>
	<br/>
	<br/>
<?php
	
	$args = array(
				'posts_per_page'=>1,
				'offset' => 1,
				'category' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' =>'',
				'post_type' => 'portfolios',
				'post_status' => 'draft, publish, future, pending, private',
				'suppress_filters' => true
				); 
	
				while ( have_posts() ) : the_post();
		?>
		
	<div class="col-md-12">
	<div class="textoverimage">
	<div class="zoom">
	<?php 
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent )
			{
				?>
					<img class="imagespb" src="<?php the_post_thumbnail_url(); ?>"> 
				<?php
			}
		?>
	<br/>
	<br/>
	</div>
	<div class="textoverimage_texts">
	<a href="ID4SPORTS.html">
	<?php
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent )
							{
								echo '<h3 class="textoverimage_text">' ?> <?php the_title(); ?>  <?php echo '</h3>';
							}
							?>
	<h5 class="textoverimage_smalltext"> Meertalige Magento 2 webshop met Gripp koppeling </h5>
	<br/>
	</a>
	</div>	
	</div>
	</div>
		
		<?php
				echo '';
				endwhile;

			// Reset Query
			wp_reset_query();
	
		?>
	
<div class="row">

</div>
<div class="row">
    <div class="col-md-6 col-sm-6">
    <div class="textoverimage">
    <div class="zoom">
		<img src="<?php bloginfo('stylesheet_directory');?>/images/foto1.jpg" class="imagespb" alt="discounts">
	</div>
	<div class="textoverimage_texts">
	<a href="onlinediscounters.html">
		<h3 class="textoverimage_text"> Online Discounters </h3>
		<h5 class="textoverimage_smalltext"> Magento 2 multistore webshop </h5>
	</a>
	</div>
	</div>
	</div>
	<div class="col-md-6 col-sm-6">
	<div class="textoverimage">
	<div class="zoom">
		<img src="<?php bloginfo('stylesheet_directory');?>/images/foto2.png" class="imagespb" alt="dentalunion">
	</div>
	<div class="textoverimage_texts">
	<a href="dentalunion.html">
		<h3 class="textoverimage_text"> Dental Union </h3>
		<h5 class="textoverimage_smalltext">Magento 2 B2B webshop met diverse maatwerk functies</h5>
	</a>
	</div>
	</div>
	</div>
	</div>
	</div>

</div>
<br/>
<div class="blog">
<div class="container">
<p class="title_bolder"> Blog en nieuws</p>
<br/>
<br/>
<div class="row blogrow">
		<?php
	
			$args = array(
				'posts_per_page'=>3,
				'offset' => 0,
				'category' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' =>'',
				'post_type' => 'post',
				'post_status' => 'draft, publish, future, pending, private',
				'suppress_filters' => true
				);
	
				$posts_query = new WP_Query( $args ); ?>

				<?php if ( $posts_query->have_posts() ) : ?>
				
				<?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
				
				<div class="col-sm-4 col-md-4 col-lg-4 dateholderposition">
				<div class="dateholder">
					<div class="textdate">
						<?php $post_date = get_the_date( 'j' ); echo $post_date; ?>
					</div>
					<br/>	
					<?php $post_date = get_the_date( 'M' ); echo $post_date; ?>
				</div>
				
				
				<div class="blog_vlak">
					<?php 
					$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent )
							{
								?>
								<img alt="phonebox" class="phoneboxes" src="<?php the_post_thumbnail_url(); ?>">
								<?php
							}
					?>
					
					<div class="blog_square_white">
						<?php
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent )
							{
								echo '<p class="blog_square_text">' ?> <?php the_title(); ?> <br/> <br/> <?php the_content_rss(); echo' </p>';
							}
						?>
				<br/>
			<?php 
					$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent )
							{
								echo '<p class="datumtekst">' ?> <?php the_date(); ?> <?php echo'| </p> <p class="blognaam">' ?> <?php the_author(); ?> <?php '</p>';
							}
			?>
			<br/>
		</div>
		<br/>
		<br/>
	</div>
</div>
		<?php endwhile; ?>



	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Geen posts gevonden!' ); ?></p>
<?php endif; ?>

</div>
</div>
</div>
<br/>
<br/>
<div class="nieuwscenterbutton">
	<a href="nieuws.html" class="btn button_blog_blue arrow"> Meer Nieuws </a>
</div>
<br/>
<br/>
<br/>
 <div class="bedrijven">
   <div class="container">
  	  <div class="row">
   		<div class="col-sm-3 bedrijvenrij">
   		<a href="ID4SPORTS.html">
   		<img src="<?php bloginfo('stylesheet_directory');?>/images/bedrijven/iD4SPORTS.png" alt="ID4SPORTS">
   		</a>
		</div>
		<div class="col-sm-3 bedrijvenrij">
		<a href="onlinediscounters.html">
		<img src="<?php bloginfo('stylesheet_directory');?>/images/bedrijven/Online_discounters.png" alt="Online Discounters">
		</a>
		</div>
		<div class="col-sm-3 bedrijvenrij">
		<a href="faesgroup.html">
		<img src="<?php bloginfo('stylesheet_directory');?>/images/bedrijven/Faes_Group.png" alt="Faes Group">
		</a>
		</div>
		<div class="col-s-3 bedrijvenrij">
		<a href="findfactory.html">
		<img src="<?php bloginfo('stylesheet_directory');?>/images/bedrijven/FindFactory.png" alt="FindFactory">
		</a>
		</div>
	  </div>
	</div>
	</div>
	</div>
	<br/>
	<footer>
		<div class="footer footer_ontwerp" id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h3> Inspiration Concepts </h3>
						<ul>
							<li> <a class="footertext" href="#"> Over ons </a> </li>
							<li> <a class="footertext" href="#"> Portfolio </a> </li>
							<li> <a class="footertext" href="#"> Offerte aanvragen </a> </li>
							<li> <a class="footertext" href="#"> Contact </a> </li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h3> Wat we doen </h3>
						<ul>
							<li> <a class="footertext" href="#"> Design </a> </li>
							<li> <a class="footertext" href="#"> Development </a> </li>
							<li> <a class="footertext" href="#"> Support </a> </li>
							<li> <a class="footertext" href="#"> Branding </a> </li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h3> Contact </h3>
						<ul>
							<li> <b class="footertext"> Veemarktstraat 34 </b> </li>
							<li> <b class="footertext"> 5038 CV Tilburg </b> </li>
							<li> <b class="footertext"> E:info@inspirationconcepts.nl </b> </li>
							<li> <b class="footertext"> T: 013-590 32 56 </b> </li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h3> Volg ons op </h3>
						<ul class="social">
							<li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
							<li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
							<li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
							<li> <a href="#"> <i class="fa fa-instagram">   </i> </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php
		get_footer( 'footer.php' );
	?>
</body>
</html>