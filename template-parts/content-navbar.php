<?php
/*
Template Name: Navbar
Template Post Type: post, page, event
*/
$title_of_website = get_field('title_of_website');
$subheader = get_field('subheader');

?>


<div id="header">
    <h1 class="headerText"><?php echo $title_of_website?></h1>
</div>
<div id="subheader">
    <h5><?php echo $subheader?></h5>
</div>