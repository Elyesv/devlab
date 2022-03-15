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

get_header();
?>

	<main class="site-main-index">
		<p>Pour l'amour des goodies</p>
	</main><!-- #main -->

	<div class="site-secondary-index">
		<div class="container">
			<div class="leftPart">
				<div class="left">
					<div class="textArea">
						<p class="p1">Coup de coeur</p>
						<p class="p2">IIMPACT</p>
						<p class="p3">En voir plus →</p>
					</div>
					<div class="image">
						<img src="http://localhost/devlabb/wp-content/uploads/2022/03/71pWzhdJNwL._AC_UL640_QL65_ML3_.png"  alt="Article image">
					</div>
				</div>
				<div class="image">
					<img src="http://localhost/devlabb/wp-content/uploads/2022/03/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.png" class="mainImg" alt="Main article image"> 
				</div>	
			</div>
			
			<div class="rightPart">
				<div class="topContent">
					<div class="image">
						<img src="http://localhost/devlabb/wp-content/uploads/2022/03/61sbMiUnoGL._AC_UL640_QL65_ML3_.png" alt="Article image">
					</div>
					<div class="image2">
						<img src="http://localhost/devlabb/wp-content/uploads/2022/03/71YXzeOuslL._AC_UY879_.png" alt="Article image">
					</div>
				</div>
				<div class="bottomContent">
					<div class="image">
						<img src="http://localhost/devlabb/wp-content/uploads/2022/03/81fPKd-2AYL._AC_SL1500_.png" alt="Article image">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sodales ex lorem, non congue augue mattis vel. Aenean ornare scelerisque suscipit. Cras aliquam vestibulum pharetra</p>
				</div>
			</div>
		</div>
	</div><!-- #main -->

<?php
get_footer();
