<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$base_url = base_url('/');

?><!DOCTYPE html>
<html lang="en">
	<head>
   		<title><?= empty($title) ? '' : $title.' - ' ?>CatacombSnatch</title>

   		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="<?= $base_url; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="<?= $base_url; ?>assets/css/default.css" rel="stylesheet" type="text/css" />
	
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?= $_styles ?>
	</head>

	<body>
		<!-- Main container -->
		<div class="container">
			<div class="row">
				<div class="span9">
					<header class="row">
						<!-- Logo -->
						<div class="span5 logo"><?= anchor("/", 'Catacomb-Snatch') ?></div>

						<!-- Artwork -->
						<div class="span7 player-artwork visible-desktop">this is ART</div>
					</header>

					<!-- Navbar -->
					<ul class="navbar-snatch">
						<li class="active first"><a href="#">News</a></li>
						<li><a href="#">About the Game</a></li>
						<li><a href="#">Media</a></li>
						<li><a href="#">Downloads</a></li>
						<li class="last"><a href="#">Community</a></li>
					</ul>

					<div class="clearfix"></div>

					<div class="wrapper">
						<!-- Site content -->
						<div class="content"><?= $content ?></div>

						<!-- Footer -->
						<footer class="footer">
							<p class="footer-nav">
								<a href="#">News</a>&nbsp;|&nbsp;
								<a href="#">About the Game</a>&nbsp;|&nbsp;
								<a href="#">Media</a>&nbsp;|&nbsp;
								<a href="#">Downloads</a>&nbsp;|&nbsp;
								<a href="#">Community</a>
							</p>

							<p>
								The original resources of the game are, and remain the property of Mojang AB.
								Given the lack of information provided by Mojang AB regarding the licensing of these resources, any use, dissemination or reproduction of them is done without any warranty regarding their legality.
							</p>

							<p>Page loading time: {elapsed_time}ms - Site revision #<?= str_pad(SITE_REV, 4, '0', STR_PAD_LEFT) ?></p>
						</footer>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="span3" id="sidebar">
					<div class="box">
						<div class="header">Community Login</div>
						<div class="content">
							<form>
								<input type="text" value="Username" name="cl-username" class="w100 t-center" />
								<input type="password" value="Password" name="cl-password" class="w100 t-center" />
							</form>
						</div>
					</div>

					<div class="box">
						<div class="header">Sidebar Box Example</div>
						<div class="content">
							<p>Content of a sidebar box example. Lorem ipsum dolor sit amet!</p>
						</div>
					</div>

					<div class="social">
						<a href="https://twitter.com/CSnatchNet"><img src="<?= $base_url; ?>assets/img/twitter-logo.png" alt="Visit us on Twitter" /></a>
					</div>
				</div>			
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/default.min.js"></script>

		<?= $_scripts ?>
	</body>
</html>