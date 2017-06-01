<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <title>Dovetail :: About | Corporate Event Solutions - North Carolina + California</title>
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
		<section class="intro">
			<div class="col">
				<div class="item item-image">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/small-dovetail-logo.png'; ?>" />
				</div>
				<div class="item item-title">
					<h2>At Dovetail, we emphasize the importance of being creative and staying consistent.</h2>
				</div>
				<div class="item item-text">
					<p>Dovetail is an all-inclusive premier corporate management company, specializing in creating and executing unique events for local businesses and community members for all occasions.</p>
					<p>We also offer task oriented services that allow business leaders to focus on their bottom line.</p>
					<p>No task is too small, and no detail is less important. With this in mind, Dovetail offers a vast array of nostalgic writing and event pieces to help streamline each project and to promote a cohesive theme.</p>
					<p>Let us join together your ideas and our determination to produce astounding results.</p>
				</div>
			</div>
		</section>
		<section id="about-quote" class="quote">
			<div class="col">
				<div class="item item-title">
					<h2>The perfect occasion management team, providing planning, coordination, and execution.</h2>
				</div>
				<div class="item item-button">
					<a href="<?php echo home_url('services') ?>" class="button yellow">Our Services <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>
		<section id="about-tiffany" class="content">
			<div class="col col-grid two-columns">
				<div class="col">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/tiffany-burnette.jpg'; ?>" style="max-height: 450px;" class="dove" />
				</div>
				<div class="col right">
					<div class="item item-title">
						<h2>A strong leader with attention to detail</h2>
					</div>
					<div class="item item-text">
						<p>There's always that one friend that has natural born abilities that are hard to explain.Whether it is simply being well organized or good with numbers these knacks, if nurtured properly, can turn into key elements for success. Tiffany has been able to do just that. By applying her business background, received partly from her corporate experience and parents’ entrepreneurial spirit, together with her passion for events she birthed Dovetail.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="about-definition">
			<div class="col col-grid two-columns">
				<div class="col right">
					<div class="item item-title">
						<h2>Bringing together unique execution and solutions</h2>
					</div>
				</div>
				<div class="col left">
					<div class="item item-text">
						<p>Dovetail, was founded on the simple idea that entrepreneurship can be propelled to the next level by maintaining relationships with both internal and external customers. Therefore, it is imperative to spark motivation in all types of “customers”. It is with these types of endeavors that will allow set goals to be met. It is with this attitude Tiffany has been able to satisfy her clients’ goals.</p>
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
