<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-products">
		<main id="main" class="site-main" role="main">
			<div class="shoping-stuff">
				<?php if ( have_posts() ) : ?>

				<header class="page-headers">

					<?php

					the_archive_title( '<h1 class="page-title">', '</h1>' );
					 the_archive_description( '<div class="taxonomy-description">', '</div>' );
					
				?>

						<?php
				$terms = get_terms( array(
				'taxonomy' => 'product_type',
				'hide_empty' => false,
					));
				?>
			</div>
			<div class="product-categories">
				<?php	foreach ( $terms as $term ): ?>

					<h3 class="product_sub_catagories"><a href="<?php echo get_term_link($term, '$product_type') ?>"><?php	echo	$term->name; ?></a></h3>

					<?php endforeach; wp_reset_postdata(); ?>
			</div>
			</header>
			<div class="products-wrapper">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>


				<div class="product-item">
					<div class="post-image-shop">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium' ); ?>
						</a>
					</div>
					<div class="product-info">
						<div class="post-title-shop">
							<h3>
								<?php the_title(); ?>
							</h3>
						</div>
						<p>
							<?php echo CFS()->get('product_price'); ?>
						</p>
					</div>
				</div>





				<?php
					//get_template_part( 'template-parts/content' );
				?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

					<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

			</div>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php get_footer(); ?>