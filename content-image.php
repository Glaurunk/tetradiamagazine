<!-- This is the Scripta manent first page markup
image template = books review template -->

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
    //'pagelink'          => __( '[%]')
    );
 ?>


    <h1 class="text-centered space-below">ΒΙΒΛΙΟΠΑΡΟΥΣΙΑΣΗ</h1>
    <br>
    <p class="tags main-no-indent"><?php the_tags(); ?></p>
    <h2 class="space-below"><?php coauthors(); ?></h1>
    <br>
    <h1 class="space-below text-centered"><?php the_title(); ?></h1>
    <br>
    <p><?php the_content(); ?></p>
    <br>
    <br>
    <?php wp_link_pages($args); ?>
    <p class="normal-p">πίσω στα περιεχόμενα:</p>
    <?php the_category();?>

    <p class="pre-next"><?php next_post_link('%link','[ Προηγούμενο άρθρο]',true); ?>
    <?php previous_post_link('%link','[ Επόμενο άρθρο]',true); ?></p>
