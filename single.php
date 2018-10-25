<?php get_header(); ?>


    <div class="content">

<!-- set $page to get current page number -->
          <?php global $page;

          $args = array (
'before'            => '<div class="page-links"><span class="page-links-title">' . __( 'Σελίδες:', 'averon' ) . '</span>',
'after'             => '</div>',
'link_before'       => '<span class="no">',
'link_after'        => '</span>',
'next_or_number'    => 'number',
'separator'         => ' | ',
//'nextpagelink'      => __( 'Επόμενη'),
//'previouspagelink'  => __( 'Προηγούμενη'),
//'pagelink'          => __( '[%]')
);


                if ($page <= 1) :
                //(have_posts())  :
                    while (have_posts()) : the_post();

                        get_template_part( 'content',get_post_format());

                    endwhile;

                else :

                      while (have_posts()) : the_post();?>

                          <p><?php the_content(); ?></p>
                          <br>
                          <br>
                          <?php wp_link_pages($args); ?>
                          <p class="normal-p">πίσω στα περιεχόμενα:</p>
                          <?php the_category();?>

                          <p class="normal-p text-centered margin-top"><?php next_post_link('%link','[ Προηγούμενο άρθρο]',true); ?>
                          <?php previous_post_link('%link','[ Επόμενο άρθρο]',true); ?></p>

              <?php endwhile; ?>

          <?php endif; ?>


    </div><!-- close content -->



<?php get_footer(); ?>
