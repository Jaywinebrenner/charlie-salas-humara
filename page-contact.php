<?php
/* 
    Template Name: Contact Page
*/


get_header();
get_template_part('template-parts/content', 'navbar');

$header = get_field('contact_header');
$body = get_field('contact_body');
$details = get_field('contact_details');
$image = get_field('contact_image');

?>


<div id="contactWrapper">
    <h3 class="contactHeader"><?php echo $header?></h3>
    <a class="contactImageWrapper" href="<?php echo get_page_link( get_page_by_title( 'Bio Page' )->ID ); ?>">
        <img class="contactImage" src=<?php echo esc_url($image['url']); ?> />
    </a>
    <p class="contactBody"><?php echo $body?></p>
    <p class="contactDetails"><?php echo $details?></p>
    <a class="socialIconAnchor" href="https://www.instagram.com/charliesalashumaraart" target="_blank"><i class="fab fa-instagram-square fa-2x socialIcon"></i></a>


</div>

<?php get_footer(); ?>


<script src="<?php bloginfo('template_directory')?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
<script>jQuery('#navImages').hide();</script>