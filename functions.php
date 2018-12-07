<?php
/*
===============================================
Include CSS and JS
===============================================
include CSS stylesheet and JS source file with the wp_enqueue method
*/

  function tetradia_stylesheet_enqueue(){

    wp_register_style('style', get_template_directory_uri().'/css/main-style.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/main-style.css', array(), '1.0.0', 'all' );

    wp_register_script('script', get_template_directory_uri().'/js/menu.js');
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/menu.js', array(), '1.0.0', true );

  }

add_action( 'wp_enqueue_scripts', 'tetradia_stylesheet_enqueue' );


/*
===============================================
Theme support for various elements
===============================================
add theme support for various elements. Support triggered after the initialization of the theme. Support for menus and nav menu. Support for post formats
*/

  function tetradia_theme_support(){
    add_theme_support( 'menus' );
    register_nav_menus( array(
        'primary' => __( 'Primary menu' ),
        'archives'=> __( 'Archive links')
      ));

    add_theme_support('post-formats', array('aside','image'));
    add_theme_support( 'html5', array('search-form') );

  }

add_action( 'init', 'tetradia_theme_support' );


/*
===============================================
 exclude version number function from header
===============================================
*/
function tetradia_remove_version(){
  return '';
}
add_filter( 'the_generator', 'tetradia_remove_version');




/*
==================================================================
  CUSTOM QUERIES
==================================================================


==================================================================
 Custom authors alphbetical list generator
 [@ backend user email field instead put the corresponding letter
 then insert as an argument that letter when calling the method]
==================================================================
*/


function authorsByLetter($letter) {
// Passing arguments for the custom query: search for each email with a specific letter
          $args = array(
                'search' => 'http://'.$letter
          );

// The Query
          $user_query = new WP_User_Query( $args );

// User Loop
          if ( ! empty( $user_query->get_results() ) ) {
              foreach ( $user_query->get_results() as $user ) { ?>

                  <a class="author-link" href="http://localhost:8888/wpTetradia/author/<?php echo $user->user_nicename ?>"><?php the_author_meta('display_name', $user->ID); ?></a>
                   <br>

<?php

              }
          } else {
                  echo 'Δεν υπάρχουν καταχωρήσεις.';
          }
                }

?>


<?php
/*
==================================================================
Get category by slug
==================================================================
*/
function category_by_slug() {
// this part desiplays the issue number at the title
          if(is_category()) {
             $cat = get_query_var('cat');
             $current_cat = get_category($cat);
             $plain = substr($current_cat->slug, 5);
             echo $plain;}
}



 ?>
 <?php
 /*
 ==================================================================
 Some global variables
 $cats is for pages
     1. author.php
     2. category.php
     3. tag.php
     4. category-issueXX.php and all other children
 ==================================================================
 */

$cats = array ('154','153','152','151','150','149','148','147','146','145','144');

?>
