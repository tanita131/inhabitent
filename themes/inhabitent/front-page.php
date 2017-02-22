<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="main-picture">
			<h3>test</h3>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<section class= "news-feed">
 <div class="container">
 <h2>Inhabitent Journal</h2>	
<?php
       $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => 3 );
       $product_posts = get_posts( $args ); // returns an array of posts
        ?>

            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
          <?php get_template_part( 'template-parts/content-front-page' ); ?>
            <?php endforeach; wp_reset_postdata(); ?>

	</section>

<?php get_footer(); ?>