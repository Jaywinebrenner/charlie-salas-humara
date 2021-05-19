<?php
/* 
    Template Name: Art Page
*/

// THIS IS A TEST. THE FUNCTIONING OLD CODE IS IN GMAIL DRAFTS

get_header();
get_template_part('template-parts/content', 'navbar');
?>


<div id="body">
    <div class="myGallery">

<?php
    $loop = new WP_Query(array('post_type' => 'product', 
      'orderby' => 'post_id', 
      'order' => 'ASC',

    )); 
?>

<?php if ($loop ->have_posts()) : while ($loop ->have_posts()) : $loop ->the_post(); ?>

    <div class="item">


    <?php
    $product_image = get_post($item['product_id'])->post_content; 
    ?>

   <?php echo $product_image ?>
 


    <!-- END TEST  -->

    <a href="<?php the_permalink(); ?>">
       <?php  $product_image ?> 
        <span class="caption"><?php the_excerpt(); ?></span>
    </a>
    </div>



    <?php endwhile; endif; ?>

</div>

<div id="footer">
    <h5>Some text maybe?</h5>
</div>


<script src="<?php bloginfo('template_directory')?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
<script>jQuery('#navImages').hide();</script>