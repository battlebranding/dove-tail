<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <title>Dovetail :: Contact | Corporate Event Solutions - North Carolina + California</title>
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700|Voltaire" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://dl.dropbox.com/s/wjeqrmv1565i5x8/battle.css" />
		<?php wp_head(); ?>
	</head>
  	<body>
		<section id="header">
			<div class="col col-grid three-columns two-to-one">
				<div class="col">
					<div class="item item-text">
						<p>Serving California &amp; North Carolina</p>
					</div>
				</div>
				<div class="col">
					<div class="item item-text centered">
						<h1 id="logo">Dovetail</h1>
					</div>
				</div>
				<div class="col">
					<div class="item item-menu">
						<ul class="menu horizontal centered">
							<li><a href="<?php echo home_url(); ?>">Home</a></li>
							<li><a href="<?php echo home_url('about'); ?>">About</a></li>
							<li><a href="<?php echo home_url('services'); ?>">Services</a></li>
							<li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="col">
				<div class="item item-image">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/small-dovetail-logo.png'; ?>" />
				</div>
				<div class="item item-title">
					<h2>The first conversation makes the difference</h2>
				</div>
				<div class="item item-text">
					<p>The Dovetail experience begins with a conversation between both sides to understand what your goals are.</p>
				</div>
			</div>
		</section>
		<section class="intro">
			<div class="col">
				<div class="item item-shortcode">
					<?php echo do_shortcode('[ninja_form id=1]'); ?>
				</div>
			</div>
		</section>
		<section id="footer">
			<div class="col col-grid three-columns">
				<div class="col right">
					<div class="item item-text">
						<p>Office: (909) 667-2205</p>
					</div>
				</div>
				<div class="col centered">
					<div class="item item-menu">
						<ul class="menu horizontal centered">
							<li><a href="https://facebook.com/pg/dovetailllc/about/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook-icon.png'; ?>" style="max-height: 48px;" /></a></li>
							<li><a href="https://instagram.com/dovetail_ca" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/instagram-icon.png'; ?>" style="max-height: 48px;" /></a></li>
							<li><a href="https://linkedin.com/company/dovetail-llc" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin-icon.png'; ?>" style="max-height: 48px;" /></a></li>
						</ul>
					</div>
				</div>
				<div class="col left">
					<div class="item item-text">
						<p>E-mail: <a href="mailto:tiffany@dove-tail.net">tiffany@dove-tail.net</a></p>
					</div>
				</div>
			</div>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>
