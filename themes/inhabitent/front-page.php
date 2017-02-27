<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

    <div id="primary" class="content-front-page">
        <main id="main" class="site-main" role="main">

            <div class="main-picture">
                <h3>test</h3>
            </div>



            <section class="shop-stuff-container">
                <h2>Shop stuff</h2>
                <div class="shop-stuff">
                    <?php    
        $terms = get_terms( array(
          'taxonomy' => 'product_type',
		      'orderby'=> 'name',

		      'hide_empty'=> 'false'
           ));
        foreach ($terms as $term) :
          $url = get_term_link( $term->slug , 'product_type');              
    ?>
                    <div class="shop-stuff-item">
                        <div class="product-icon-image">
                            <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
                        </div>
                        <p>
                            <?php echo $term->description; ?>
                        </p>
                        <button class="categ-button"><a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?></a></button>
                    </div>

                    <?php endforeach; ?>
                </div>
                <!--shop stuff -->
            </section>
            <!--shop stuff-container -->





            <h2>inhabitent journal</h2>
            <section class="news-feed">


                <?php
       $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => 3 );
       $product_posts = get_posts( $args ); // returns an array of posts
        ?>

                    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                    <?php get_template_part( 'template-parts/content-front-page' ); ?>
                    <?php endforeach; wp_reset_postdata(); ?>

            </section>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer(); ?>