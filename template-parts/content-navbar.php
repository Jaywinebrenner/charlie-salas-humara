<?php
/*
Template Name: Navbar
Template Post Type: post, page, event
*/

// $title_of_website = get_field('title_of_website', 97);




?>


<div id="header">

    <a class="navbarHeaderTextWrapper" href="<?php echo get_page_link( get_page_by_title( 'Shop' )->ID ); ?>">
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
