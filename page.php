<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Rafael_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="<?php blogInfo('stylesheet_directory')?>/assets/css/bootstrap.min.css" rel="stylesheet">
  
	<link href="<?php blogInfo('stylesheet_directory')?>/assets/css/font-awesome/css/all.min.css" rel="stylesheet">
  
  <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@500&display=swap" rel="stylesheet">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rafael_Theme
 */

get_header();
?>
<h1>PAGE.PHP</h1>

<?php
get_sidebar();
get_footer();
