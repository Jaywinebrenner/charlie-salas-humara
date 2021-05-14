<?php
/* 
    Template Name: Home Page
*/

get_header();

$landing_image = get_field('landing_image');
$hovered_text = get_field('hovered_text');
?>

<body>
  <div id="landing">
    <a href="<?php echo get_page_link( get_page_by_title( 'Art Page' )->ID ); ?>">
        <img class="landingImage" src=<?php echo esc_url($landing_image['url']); ?> />
    </a>
    <h6 class="hiddenText"><?php echo $hovered_text;?></h6>
  </div>
  
</body>


<?php
get_footer();
?>
<script src="<?php bloginfo('template_directory')?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
<script>jQuery('#navImages').hide();</script>

