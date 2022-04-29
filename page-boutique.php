<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pour_l\'amour_des_goodies
 */

get_header();

$assos = get_field('asso', 'option');?>

    <div class="shop-main">
        <?php foreach ($assos as $asso){ ?>
            <a href="http://localhost/devlab/product-category/<?= $asso['name'] ?>">
                <div class="shop-main-box">
                    <img class="shop-main-box-logo" src="<?= $asso['logo']['url'] ?>" alt="<?= $asso['name'] ?>">
                    <h3 class="shop-main-box-name"><?= $asso['name'] ?></h3>
                    <p class="shop-main-box-desc"><?= $asso['description'] ?></p>
                </div>
            </a>
        <?php } ?>
    </div>
<?php
get_sidebar();
get_footer();
