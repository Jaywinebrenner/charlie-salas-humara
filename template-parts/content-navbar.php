<?php
/*
Template Name: Navbar
Template Post Type: post, page, event
*/
$title_of_website = get_field('title_of_website');
$subheader = get_field('subheader');
// var_dump($title_of_website)

?>


<div id="header">
    <!-- <h1 class="headerText"><?php echo $title_of_website?></h1> -->
    <a href="<?php echo get_page_link( get_page_by_title( 'Shop' )->ID ); ?>">
        <h1 class="headerText">Charlie Salas-Humara</h1>
    </a>
    <div class="navRightColumn">
        <a class="contactLink" href="<?php echo get_page_link( get_page_by_title( 'Contact Page' )->ID ); ?>">
            <h3 class="contactLinkText">Contact</h3>
        </a>
     
        <a class="cartIcon" href="<?php echo get_page_link( get_page_by_title( 'Cart' )->ID ); ?>">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
</div>
<div id="subheader">
    <h5><?php echo $subheader?></h5>
</div>