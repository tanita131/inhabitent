<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class= "content-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>
  
         <div class="social-buttons">
				<a href="#" class="social-btn">
					<i class="fa fa-facebook" aria-hidden="true"> like </i>
				</a> 
				<a href="#" class="social-btn">
					<i class="fa fa-twitter" aria-hidden="true"> tweet </i>
				</a> 
				<a href="#" class="social-btn">
					<i class="fa fa-pinterest" aria-hidden="true"> pin </i>
				</a> 
			</div> <!--social buttons -->




			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
