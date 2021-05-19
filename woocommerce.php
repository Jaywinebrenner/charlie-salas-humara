<?php/*Template Name: Woocommerce Template */ ?>


<?php 
get_header();
get_template_part('template-parts/content', 'navbar');
if ( is_singular( 'product' ) ) {
    woocommerce_content();
   }else{
   //For ANY product archive.
   //Product taxonomy, product search or /shop landing
    woocommerce_get_template( 'archive-product.php' );
   }

?>