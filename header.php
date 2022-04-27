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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pour_lamoure_des_goodies' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="headerContainer">
            <div class="site-branding">
                <?php
                the_custom_logo();
                ?>
            </div><!-- .site-branding -->
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-nav-logo-header',
                    'menu_id'        => 'header-right',

                )
            );
            ?>
        </div>
    </header><!-- #masthead -->