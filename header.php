<?php
/**
 * Header template for Social Web Foundation theme.
 *
 * @package social-web-foundation
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'homepage' ); ?>>
	<header class="top-bar">
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url( home_url() ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-5.png" id="logo-image" alt="<?php bloginfo( 'name' ); ?> Logo">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div>
			<nav>
				<ul>
					<li><a href="/mission/" class="highlight1">Mission</a></li>
					<li><a href="/projects/" class="highlight2">Projects</a></li>
					<li><a href="/team/" class="highlight3">Team</a></li>
					<li><a href="/blog/" class="highlight4">Blog &uarr;</a></li>
					<li><a href="/contact/" class="highlight5">Contact</a></li>
				</ul>
			</nav>

			<button class="menu-button">Menu</button>
		</div>
	</header>
