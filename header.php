<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pour_l\'amour_des_goodies
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href='woocommerce.css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pour_lamoure_des_goodies' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-nav-header',
					'menu_id'        => 'header-left',

				)
			);
		?><!--  -->
		
		<div class="rightSide">
			<form class="searchBar">
				<input type="text" class="searchZone" placeholder="Seach something...">
				<button type="submit">
				<svg xmlns="http://www.w3.org/2000/svg" width="29.692" height="29.697" viewBox="0 0 29.692 29.697">
  					<path id="Icon_awesome-search" data-name="Icon awesome-search" d="M29.288,25.675l-5.782-5.782a1.391,1.391,0,0,0-.986-.406h-.945a12.058,12.058,0,1,0-2.088,2.088v.945a1.391,1.391,0,0,0,.406.986l5.782,5.782a1.386,1.386,0,0,0,1.966,0l1.641-1.641a1.4,1.4,0,0,0,.006-1.972ZM12.063,19.487a7.424,7.424,0,1,1,7.424-7.424A7.419,7.419,0,0,1,12.063,19.487Z" fill="#fff"/>
				</svg>

				</button>
			</form><!-- .searchBar -->
			
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-nav-logo-header',
						'menu_id'        => 'header-right',

					)
				);
				?><!--  -->
			
		</div><!-- .rightSide -->
		
		
	</header><!-- #masthead -->