<?php
require_once('wp-load.php');

$page_title = 'about';
$page_content ='about-us';

$page_args = array(
	'post_title' => $page_title,
	'post_content' =>
$page_content,
'post_status' => 'publish',
'post_type' => 'page'
);

$page_id =
wp_insert_post($page_args);

if ($page_id) {
	echo 'Page created successfuly with ID: ' . $page_id;
} else {
	echo 'Error';
} 

?>



<?php
/*
Template Name: About Us
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header><div class="entry-content">
        <?php the_content(); ?>
      </div></article></main></div><?php get_footer(); ?>