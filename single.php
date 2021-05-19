<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Charlie_Salas-Humara_Theme
 */

get_header();
get_template_part('template-parts/content', 'navbar');
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			$title = get_field('title');
			$description = get_field('description');
			$buy_now = get_field('buy_now');
			$image = get_field('image');
		?>
		<div class="row">
			<div class="columnOne">
				<img class="singleImage" alt="<?php echo esc_attr($image['alt']); ?>" src=<?php echo esc_url($image['url']); ?> />
			</div>
			<div class="columnTwo">
				<h4 class="singleTitle"><strong><?php echo $title?></strong></h4>
				<hr>
				<p class="singleDescription"><?php echo $description?></p>
				<hr>
				<button class="buyNowButton"><?php echo $buy_now?></button>
				<!-- <h3 class="singleBuyNowText"><?php echo $buy_now?></h3> -->
				<!-- <a href="?add-to-cart=<?php echo $loop->post->ID; ?>" rel="nofollow" data-product-id="<?php echo $loop->post->ID; ?>" class="btn btn-primary">Add to cart</a> -->
				<hr>
				<a class="socialIconAnchor" href="http://localhost:8888/art-page/"><i class="fas fa-long-arrow-alt-left fa-3x"></i></a>
			</div>	
		</div>


		<?php
		endwhile; 
		?>

	</main>
<?php

get_footer();
