<?php 
	include('includes/globals.php'); 
	include('includes/config.php'); 
	//pr($_SERVER);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
		<!-- privacy policy -->
		<?php //header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"'); ?>
		<meta xmlns="http://www.w3.org/2002/01/P3Pv1">
		  <policy-references>
		  	<policy-ref about="http://brewers.co.za/w3c/p3p.xml">
		  		<include></include>
		  	</policy-ref>
		    <expiry max-age="1000000000"/>
		  </policy-references>
		</meta>
		<link rel="P3Pv1" href="http://brewers.co.za/w3c/p3p.xml">
	
		<title>Brewers Database Applications</title>
		<meta name="title" content="Brewers Database Applications" />
		<meta name="description" content="Marketing Analysis Software" />
		<link rel="image_src" href="http://brewers.co.za/assets/img/logo_flat.png" /> <!-- image for sharing on socail network sites -->
		<link property="og:image" href="http://brewers.co.za/assets/img/logo_flat.png" /> <!-- image for sharing on socail network sites -->
		<meta name="keywords" content="Brewers database applications brewers.co.za BDA marketing analysis chris brewer AMPS">
		<meta name="author" content="Adam Brewer"> 
	
		<link type="text/css" rel="Stylesheet" media="screen" href="assets/css/reset.css">
		<link type="text/css" rel="Stylesheet" media="screen" href="assets/css/core.css">
		
		<script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="assets/js/shadowbox-3.0.3/shadowbox.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
		
		<!-- Anything Slider -->
		<!--<link rel="stylesheet" href="assets/css/anythingslider.css" type="text/css" media="screen" />
		<script type="text/javascript" src="assets/js/jquery.anythingslider.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.easing.1.2.js"></script>-->
			
		<!--[if !IE 7]>
			<style type="text/css">
				#wrapper {display:table;height:100%}
			</style>
		<![endif]-->
		
		<!-- Google Analytics -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-19610355-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		
		
	</head>
	<body>
		
		<div id="wrapper">
		
			<div id="header">
				
				<div id="header-inner">
					
					<?php
						function active($submit, $page) {
							if ($submit == $page) return  'active';
						}
					?>
					
					<ul id="nav">
						<li class="nav-item <?php echo active('index.php', $current_page); ?>"><a class="nav-item-link" href="index.php">Home</a></li>
						<li class="nav-item <?php echo active('about.php', $current_page); ?>"><a class="nav-item-link" href="about.php">About</a></li>
						<li class="nav-item <?php echo active('products.php', $current_page); ?>"><a class="nav-item-link" href="products.php">Products</a></li>
						<li class="nav-item <?php echo active('tour.php', $current_page); ?>"><a class="nav-item-link" href="tour.php">Tour</a></li>
						<li class="nav-item <?php echo active('contact.php', $current_page); ?>"><a class="nav-item-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-item-link" href="/BDA" target="_blank">Login</a></li>
					</ul>
					
					<h1 id="logo"><a href="index.php">Brewers Data Applications</a></h1>
					
				</div>
				
			</div> <!-- #header -->
		

