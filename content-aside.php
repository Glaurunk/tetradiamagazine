<!-- This is the Scripta manent first page markup
aside template = scripta manent template -->
<?php

    global $page;

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
 ?>


    <h1 class="text-centered space-below">ΑΝΑΓΝΩΣΕΙΣ-SCRIPTA MANENT</h1>
    <br>
    <p class="normal-p"><?php the_tags(); ?></p>
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

    <p class="normal-p text-centered"><?php next_post_link('%link','[ Προηγούμενο άρθρο]',true); ?>
    <?php previous_post_link('%link','[ Επόμενο άρθρο]',true); ?></p>
