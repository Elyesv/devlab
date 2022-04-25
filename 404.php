<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Pour_l\'amour_des_goodies
 */

get_header();
?>

	<div class="uknown">
        <h1 class="bigtitle">404</h1>
        <p class="uknown-title">OOPS, This Page Was Not Found</p>
        <p class="uknown-subtitle">The link might be corrupted</p>
        <p class="uknown-subtitle-2">Or the page may have been removed</p>
        <a href="index.php" class="uknown-btn">Go Back Home</a>
    </div>

<?php
get_footer();
