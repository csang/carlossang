<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Official Website of Carlos Sang">
	<meta name="keywords" content="HTML,CSS,JavaScript,jQuery,PHP,Coldfusion,CFML,Web,Developer,Designer,Carlos,Sang,">
	<meta name="author" content="Carlos Sang">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Carlos Sang | Web Designer &amp; Developer</title>
	<link rel="icon" type="image/gif" href="<?= Uri::create('assets/img/icons/cs_white_icon_2014.gif') ?>" />

	<?= Asset::css('screen.css') ?>
</head>
<body>
	<header>
		<div class="nav">
			<ul class="mainnav">
				<a class='a_resume' href='#resume'><li class="inline">Résumé</li></a>
				<a class='a_portfolio' href='#portfolio'><li class="inline">Portfolio</li></a>
				<a class='a_contact' href='#contact'><li class="inline">Contact</li></a>
			</ul>
			<!-- <ul class='subnav'>
				<a class='a_websites' href="#"><li>Websites</li></a>
				<a class='a_photos' href="#"><li>Photos</li></a>
				<a class='a_illustrations' href="#"><li>Illustrations</li></a>
				<a class='a_drawings' href="#"><li>Drawings</li></a>
				<a class='a_games' href="#"><li>Games</li></a>
			</ul> -->
		</div>
		<div class="time inline right">
			<p><?= date("g:i:s A - m / d / Y")?></p>
		</div>
	</header>
	<?= isset($message) ? $message : null ?>
	<?= isset($body) ? $body : null ?>
	<!-- <div class='ads'>
		<h1>Advertisements</h1>
		<div class='ad inline'></div>
		<div class='ad inline'></div>
		<div class='ad inline'></div>
	</div> -->
	<footer>
		<!-- <div class="copyright">
			<p>&copy;2014 CARLOS SANG | mail@carlossang.com</p>
		</div> -->
	</footer>
</body>

<?= Asset::js('jquery-1.10.2.min.js') ?>
<?= Asset::js('main.js') ?>

<script type='text/javascript'>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32531852-1', 'carlossang.com');
  ga('send', 'pageview');

</script>

</html>
