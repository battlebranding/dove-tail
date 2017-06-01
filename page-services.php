<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <title>Dovetail - Corporate Event Solutions - North Carolina + California</title>
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
					<h2>Impress customers and retain employees</h2>
				</div>
			</div>
		</section>
		<section id="services-lighted-event"></section>
		<section>
			<div class="col">
				<div class="item item-title">
					<h1>What we offer</h1>
					<p>&nbsp;</p>
				</div>
				<div class="item item-text">
					<h2>Business Culture Impact Programs</h2>
					<p>Brand awareness does not start and end with your external customer. Dovetail offers a set of culture focused programs that place an emphasis on internal customer centricity. If your desire is to increase employee moral and establish positive work mentality we have the option for you.</p>
					<br />
					<h2>Custom Event Creation</h2>
					<p>When it comes to putting together a swanky event for prospective clients, current customers, vendors or employees we are your one stop shop. Full-service planning, from start to finish. Including:</p>
					<p><ul class="left" style="margin-left: 30px;">
						<li>Planning and production</li>
						<li>Design and decor</li>
						<li>Theme development</li>
						<li>Execution</li>
					</ul></p>
					<br />
					<h2>Entrepreneur Starter Kit</h2>
					<p>Whether you are just getting started, or need help with creative ideas to rejuvenate your business model. We provide developmental tools to help stimulate the business model. Allow us to assist in fine tuning your entrepreneurship.</p>
					<br />
					<h2>Personal and Corporate Concierge</h2>
					<p>There is only 24 hours in a day and never enough time to get everything done. Let Dovetail be the solution to all of your needs. We have the capability to take care of any task; employee moving &amp; relocation, organization services for your office,reservations, scheduling and coordination just to name a few.</p>
				</div>
			</div>
		</section>
		<section class="intro">
			<div class="col">
				<div class="col">
					<div class="item item-title">
						<h2>Custom Campaigns to Boost Morale</h2>
					</div>
					<div class="item item-text">
						<p>There is no impact better than a lasting impact. At Dovetail we provide in-depth research into some of your most important customers, your employees. Partner with Dovetail to establish custom campaigns to catch the attention and peak employee interest.</p>
					</div>
					<div class="item item-button">
						<a href="<?php echo home_url('contact') ?>" class="button yellow">Schedule A Consultation <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
					</div>
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
						<p>E-mail: <a href="mailto:hello@dove-tail.net">hello@dove-tail.net</a></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="item item-text copyright">
					<p>&copy; <?php date('Y'); ?> Dovetail, LLC. All rights reserved.</p>
				</div>
			</div>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>
