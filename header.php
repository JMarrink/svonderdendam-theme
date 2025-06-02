<?php
/**
 * Header template
 *
 * @author   Jens Marrink (Mucho Media)
 * @version  1.0.0
 * @package  sv-onderdendam
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '&ndash;', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="container">
		<div class="header__logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Home', 'sv-onderdendam' ); ?>">
				<?php 
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						the_custom_logo();
					} else {
						echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
					} 
				?>
			</a>
		</div>
		<nav class="navigation">

			<?php wp_nav_menu( array(
				'theme_location' => 'header',
				'menu_class'     => 'navigation__menu',
				'container'      => false,
			) ); ?>
		</nav>
		<div class="header__nav-item header__nav-item--mobile">
            <a href="" class="header__nav-link">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
			</a>
        </div>

		<nav class="navigation__mobile">

			<?php wp_nav_menu( array(
				'theme_location' => 'header',
				'menu_class'     => 'navigation__menu',
				'container'      => false,
			) ); ?>
		</nav>
	</div>
</header>

<main class="main">
