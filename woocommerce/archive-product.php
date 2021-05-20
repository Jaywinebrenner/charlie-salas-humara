<?php
/* 
    Template Name: Art Page
*/

// THIS IS A TEST. THE FUNCTIONING OLD CODE IS IN GMAIL DRAFTS

get_header();
// get_template_part('template-parts/content', 'navbar');
?>


<div id="body">
    <div class="myGallery">

<?php
    $loop = new WP_Query(array('post_type' => 'product', 
      'orderby' => 'post_id', 
      'order' => 'ASC',
    )); 
?>


<!-- PRODUCT DESCRIPTION SYNTAX -->




<?php if ($loop ->have_posts()) : while ($loop ->have_posts()) : $loop ->the_post(); ?>

    <div class="item">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>

		


	<?php
    $product_short_description = get_post($item['product_id'])->post_content; 
	?> 


    <a href="<?php the_permalink(); ?>">
	<img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
        <span class="caption"><?php echo $product_short_description?></span>
    </a>
    </div>



    <?php endwhile; endif; ?>

</div>

<div id="footer">
    <h5>Some text maybe?</h5>
</div>


<!-- MODAL -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<script src="<?php bloginfo('template_directory')?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
<script>jQuery('#navImages').hide();</script>