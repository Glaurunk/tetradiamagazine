<?php get_header(); ?>


    <div class="content">

<!-- set $page to get current page number -->
          <?php global $page;

          $args = array (
'before'            => '<div class="main-no-indent">',
'after'             => '</div><br>',
'link_before'       => '<span class="no">',
'link_after'        => '</span>',
'next_or_number'    => 'next',
'separator'         => ' | ',
'nextpagelink'      => __( 'ΣΗΜΕΙΩΣΕΙΣ'),
'previouspagelink'  => __( 'ΚΕΙΜΕΝΟ'),
//'pagelink'          => __( '[%]')
);


                if ($page <= 1) :
                //(have_posts())  :
                    while (have_posts()) : the_post();

                        get_template_part( 'content',get_post_format());

                    endwhile;

                else :

                      while (have_posts()) : the_post();?>

                          <h2>ΣΗΜΕΙΩΣΕΙΣ</h2>
                          <p><?php the_content(); ?></p>
                          <br>
                          <br>
                          <?php wp_link_pages($args); ?>
                          <p class="tags">πίσω στα περιεχόμενα:</p>
                          <?php the_category();?>

                          <p class="pre-next"><?php next_post_link('%link','[ Προηγούμενο άρθρο]',true); ?>
                          <?php previous_post_link('%link','[ Επόμενο άρθρο]',true); ?></p>

              <?php endwhile; ?>

          <?php endif; ?>


    </div><!-- close content -->



<?php get_footer(); ?>
