<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            padding-bottom: 5px;
            background-size:300px 53px !important;
            width:300px !important;
            height: 53px !important;
        }
        #login .button.button-primary{
            background-color:#248A83;
        }
    </style>
<?php }
add_action( 'login_head', 'my_login_logo' );



function inhabitent_about_css() {
if (!is_page_template('pages-templates/about.php')) {
    return;
}
    $image = CFS()->get('about_header_image');

    if(!$image) {
        return;
    }

    $hero_css = ".page-template-about .entry-header {
            background:
                linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
                url({$image}) no-repeat center bottom;
            background-size: cover, cover;
            height: 100vh;
            width:370vh;
    }";

    wp_add_inline_style( 'red-starter-style', $hero_css );

}

add_action( 'wp_enqueue_scripts', 'inhabitent_about_css' );



function inhabitent_title_function(){
	$title = 'SHOP STUFF';
	return $title;
}
add_filter( 'get_the_archive_title', 'inhabitent_title_function');


 



function blog_change_sort( $query ) {
  
    
    if( is_post_type_archive('products') ) {
        $query->set('posts_per_page',16);
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'blog_change_sort');
?>

