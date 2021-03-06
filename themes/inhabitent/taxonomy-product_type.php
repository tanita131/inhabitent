<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<div class="content-taxonomy">
		<div class="taxonomy-area">
			<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php $term = get_queried_object(); ?>
				<h1 class="page-title">
					<?php echo $term -> name; ?>
				</h1>
				<!--the_archive_title( '<h1 class="page-title">', '</h1>' );-->
				<?php	the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
			<!-- .page-header -->
			<article class=i d="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="archive-area">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-post">
						<div class="product-thumbnail">
							<a href="<?php the_permalink() ; ?> ">
								<?php the_post_thumbnail( 'large' ); ?>
							</a>
						</div>
                    <div class="product-info">
						<div class="archive-title">
							<h3>
								<?php the_title(); ?>
							</h3>
						</div>
						<p>
							<?php echo CFS()->get('product_price'); ?>
						</p>
					</div>



					</div>
					<!-- product-post -->
					<?php endwhile ?>
				</div>
			</article>
			<!-- #post-## -->

			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>


	
		<!-- #primary -->

	</div>
	<!-- #content-taxonomy -->
	<?php get_footer(); ?>