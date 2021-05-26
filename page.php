

<?php 
get_header();
get_template_part('template-parts/content', 'navbar');
woocommerce_content();
?> 

<?php while (have_posts()) : the_post(); ?>

  <?php the_content();?>

<?php endwhile; ?>