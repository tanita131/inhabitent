<?php
/**
*Template Name: About Page
*
*@package Inhabitent Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
     <h2>Our Story</h2>
     <?php echo CFS()->get('about_our_story');?>
     <h2>Our Team</h2>
     <?php echo CFS()->get('about_our_team');?>

         </main>
     </div>
 <?php get_footer();?>