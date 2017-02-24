<?php
/**
*Template Name: About Page
*
*@package Inhabitent Theme
*/

get_header(); ?>

<div id="primary" class="content-about">
  <main id="main" class="site-main" role="main">

      <section class="about-hero">
      <header class="entry-header custom-header">
      <h2 class=""><?php echo the_title();?></h2>
      </header>
      </section>

      <div class="about-container">
     <h2>Our Story</h2>
     <?php echo CFS()->get('about_our_story');?>
     <h2>Our Team</h2>
     <?php echo CFS()->get('about_our_team');?>
     </div>
         </main>
     </div>
 <?php get_footer();?>