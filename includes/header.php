<? require($_SERVER['DOCUMENT_ROOT'] . "/config.php"); ?>
<!doctype html>
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<link rel="dns-prefetch" href="//fonts.googleapis.com/">
	<link rel="dns-prefetch" href="//themes.googleusercontent.com/">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
	<meta name="author" content="Adam Brewer">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Brewer's Advertising Data</title>

	<meta name="robots" content="all">
	<link type="text/plain" rel="author" href="<?= $config->site_url ?>/humans.txt" />
	<link rel="icon" type="image/png" href="<?= $config->assets ?>/img/favicon.png">
	<meta name="description" content="<?= $config->site_desc ?>">
	<meta name="keywords" content="<?= $config->site_keywords ?>">

	<meta property="og:title" content="<?= $config->site_name ?>"/>
	<meta property="og:image" content="<?= $config->assets ?>/img/logo.png"/>
	<meta property="og:url" content="<?= $config->current_url ?>"/>
	<meta property="og:site_name" content="<?= $config->site_name ?>"/>
	<meta property="og:description" content="<?= $config->site_desc ?>"/>

	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600' rel='stylesheet' type='text/css'>
	<link href="<?= $config->assets ?>/css/core.css" rel="stylesheet">
	<script src="<?= $config->assets ?>/js/libs/modernizr-custom.js"></script>

	<? if ( $config->env !== 'dev' ) : ?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', '<?= $config->ga ?>', 'brewers.co.za');
			ga('send', 'pageview');
		</script>
	<? endif; ?>

</head>
<body data-base-url="http://<?= $_SERVER['HTTP_HOST'] ?>">

	<header class="header">
		<div class="inner cf">
			<a class="logo pull-left ir" rel="logo" href="<?= $config->site_url ?>">Brewer's Advertising Data</a>
			<nav class="main-nav">
				<a title="About" href="#about" class="main-nav-link">About</a>
				<a title="Products" href="#products" class="main-nav-link">Products</a>
				<a title="Pricing" href="#pricing" class="main-nav-link">Pricing</a>
				<a title="Contact" href="#contact" class="main-nav-link">Contact</a>
				<a title="Log in" href="#log-in" class="log-in main-nav-link">Log In</a>
			</nav>
		</div>
	</header>

	<div class="wrapper">
