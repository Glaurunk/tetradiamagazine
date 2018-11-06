<!-- The markup for the single issue display -->

<?php get_header() ?>

    <div class="content">

        <h1 class = "text-centered space-below">Περιεχόμενα Τεύχους
<!-- Function to retrieve and post the current issue number -->
              <?php category_by_slug();?>
        </h1>
        <br>

        <div class="box-main">

            <div class="box-left">
<!-- Set the covers url inside a variable -->
                <?php
                    if (function_exists('z_taxonomy_image_url'))
                    $url = z_taxonomy_image_url();
                ?>
                    <img class="cover" src="<?php echo $url; ?>" alt="cover">
                    <br>
                    <h2>Β΄ Έκδοση, χειμώνας 1997</h2>
                    <img class="cover" src="http://localhost:8888/wpTetradia/wp-content/uploads/2018/09/t17-18b.jpg" alt="cover 2n edition">

            </div><!-- close box-left -->

            <div class="box-right">

<!-- Run the Loop -->
              <?php
                        while (have_posts()) : the_post();

// if the category has populated articles display them with links
                          if ( in_category('154')) : ?>

                          <p class="author"><a><?php coauthors_posts_links(); ?></a></p>
                          <p class="link-title main-no-indent"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                          <br>

              <?php       else :
// else without links. The authors still get their links :)
              ?>
                            <a><?php coauthors_posts_links(); ?></a>
                            <p class="link-title main-no-indent main-no-justify"><?php the_title(); ?></p>
                            <br>

<!-- close the loop -->

                  <?php endif;
                        endwhile;
                        wp_reset_query();
                  ?>

            </div><!-- close box-right -->


        </div><!-- close box-main -->

        <div class="pre-next">
<?php
// this part retrieves the previous and next categories by ID
        if(is_category()) {
          $cat = get_query_var('cat');
          $current_cat = get_category($cat);
          $id = $current_cat->cat_ID;

          if ($id == 97) {
            $pre = 154;
          } else {
            $pre = $id - 1;
          }

          if ($id == 154) {
            $next = 97;
          } else {
            $next = $id + 1;
          }

          $pre_cat = get_category_link( $pre );
          $next_cat = get_category_link( $next );

    }
 ?>
            <a class="button-link" href="<?php echo $pre_cat; ?>/">Προηγούμενο</a>
            <a class="button-link" href="<?php echo $next_cat; ?>/">Επόμενο</a>


        </div><!-- close pre-next -->

    </div><!-- close content -->

<?php get_footer() ?>
