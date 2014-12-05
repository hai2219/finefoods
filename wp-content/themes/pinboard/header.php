<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<div id="wrapper">
		<header id="header">
			<h1 id="site-title">
				<a rel="home" href="<?php bloginfo('home') ?>">
						<img width="250" height="100" alt="Fine Foods" src="<?php print get_template_directory_uri() ?>/images/logo.jpg">
					</a>
								
			</h1>
			
			
			<div class="clear"></div>
			<nav id="access">
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>
				<div class="clear"></div>
			</nav><!-- #access -->
		</header><!-- #header -->