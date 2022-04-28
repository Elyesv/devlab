<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pour_l\'amour_des_goodies
 */

?>

	<footer class="footer">
        <div class="footer-box">
            <div class="footer-box-divider"></div>
            <p class="footer-box-title">par-amour-des-goodies.com</p>
            <p class="footer-box-content">© 2021 All rights Reserved. Site not affiliated with Automatic Inc.</p>
        </div>
        <div class="footer-box">
            <div class="footer-box-divider"></div>
            <p class="footer-box-title">developers</p>
            <div class="footer-box-content">
                <ul>
                    <li>Elyes Voisin</li>
                    <li>Florian Palvadeau</li>
                    <li>Louis Perrenot</li>
                    <li>Adel Khiter</li>
                    <li>Jarrel Folly-Adjon</li>
                    <li>Romain Gaboriau</li>
                </ul>
            </div>
        </div>
        <div class="footer-box">
            <div class="footer-box-divider"></div>
            <p class="footer-box-title">follow us</p>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-footer-1',
                    'menu_id'        => 'menu-social-footer',
                )
            );
            ?>
        </div>
        <div class="footer-box">
            <div class="footer-box-divider"></div>
            <p class="footer-box-title">do you have any questions ?</p>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-footer-2',
                    'menu_id'        => 'menu-contact-footer',
                )
            );
            ?>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
