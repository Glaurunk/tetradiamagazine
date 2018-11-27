<!-- This is the single page first page markup
The original idea was to split long posts to many pages where the first would display the title and the others only text. The idea was abandoned because it causes problems with the footnotes numbering and is not practical in the end. The code remains though practically unused in case of change of mind-->
<?php

    global $page;

    $args = array (
      'before'            => '<div class="main-no-indent">',
      'after'             => '</div><br>',
      'link_before'       => '<span class="no">',
      'link_after'        => '</span>',
      'next_or_number'    => 'next',
      'separator'         => ' | ',
      'nextpagelink'      => __( 'ΣΗΜΕΙΩΣΕΙΣ'),
      'previouspagelink'  => __( 'ΚΕΙΜΕΝΟ'),
//    'pagelink'          => __( '[%]')
)
 ?>



    <p class="tags main-no-indent"><?php the_tags(); ?></p>
    <p class="authors space-below main-no-indent margin-top-small"><?php coauthors_posts_links(); ?></p>
    <br>
    <h1 class="space-below text-centered"><?php the_title(); ?></h1>
    <br>
    <p><?php the_content(); ?></p>
    <br>
    <br>
    <?php wp_link_pages($args);?>
    <p class="normal-p">πίσω στα περιεχόμενα:</p>
    <?php the_category();?>


    <p class="pre-next"><?php next_post_link('%link','[ Προηγούμενο άρθρο]',true); ?>
    <?php previous_post_link('%link','[ Επόμενο άρθρο]',true); ?></p>
