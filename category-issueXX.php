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

            </div><!-- close box-left -->

            <div class="box-right">

<!-- Run the Loop
$cats var includes all the populated issues ids-->
              <?php
//                        $cats = array ('154','153','152','151','150','149','148','147');
                        while (have_posts()) : the_post();

// if the category has populated articles display them with links
                          if ( in_category($cats)) : ?>

                          <p class="author"><a><?php coauthors_posts_links(); ?></a></p>
                          <p class="link-title main-no-indent"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                          <br>

              <?php       else :
// else without links. The authors still get their links :)
              ?>
                            <p class="author"><a><?php coauthors_posts_links(); ?></a></p>
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
<!-- The pre-next buttons. Since it is a specific page the links are fixed :) Just change XX to issue number -->
                  <div class="pre-next">

                      <a class="button-link" href="http://localhost:8888/wpTetradia/category/issueXX">Προηγούμενο</a>
                      <a class="button-link" href="http://localhost:8888/wpTetradia/category/issueXX">Επόμενο</a>



        </div><!-- close pre-next -->

    </div><!-- close content -->

<?php get_footer() ?>
