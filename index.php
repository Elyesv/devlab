<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pour_l\'amour_des_goodies
 */


$assos = get_field("association", "options");

get_header();
?>

    <div class="containerIndex">
    <main class="site-main-index">
        <p>Pour l'amour des goodies</p>
    </main><!-- #main -->

<?php foreach ($assos as $asso){

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 5,
        'product_cat' => $asso['nom'],
    );

    $articles = [];

    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            array_push($articles, get_permalink(), get_the_post_thumbnail_url());
        endwhile;
    }
    wp_reset_postdata();

    ?>

    <div class="site-secondary-index">
        <div class="container">
            <div class="leftPart">
                <div class="left">
                    <div class="textArea">
                        <p class="p1">Coup de coeur</p>
                        <p class="p2"><?= $asso['nom'] ?></p>
                        <a href="http://localhost/devlab/product-category/<?= $asso['nom'] ?>" class="p3">En voir plus →</a>
                    </div>
                    <a href="<?= $articles[0] ?>">
                        <img class="image" src="<?= $articles[1] ?>"  alt="Article image">
                    </a>
                </div>
                <a href="<?= $articles[2] ?>">
                    <img class="image" src="<?= $articles[3] ?>" class="mainImg" alt="Main article image">
                </a>
            </div>

            <div class="rightPart">
                <div class="topContent">
                    <a class="image1" href="<?= $articles[4] ?>">
                        <img class="image" src="<?= $articles[5] ?>" alt="Article image">
                    </a>
                    <a class="image2" href="<?= $articles[6] ?>">
                        <img src="<?= $articles[7] ?>" alt="Article image">
                    </a>
                </div>
                <div class="bottomContent">
                    <a href="<?= $articles[8] ?>">
                        <img class="image" src="<?= $articles[9] ?>" alt="Article image">
                    </a>
                    <p><?= $asso['description'] ?></p>
                </div>
            </div>
        </div>
    </div><!-- #main -->
<?php }
?>


<?php
get_footer();