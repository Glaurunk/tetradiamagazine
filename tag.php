<!-- **
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag. -->

 <?php get_header(); ?>


<div class="content">


    <h1 class="text-centered space-below">Ετικέτα: <?php print_r (single_tag_title()); ?></h1>

<?php

    $args = array(
            'posts_per_page' => -1,
            'author' => -1,
            'tag' => $tag
    );

    $tag_query = new WP_Query ($args);

     if ( $tag_query->have_posts() ) :

            while ( $tag_query->have_posts() ) : $tag_query->the_post(); ?>

            <p class="author"><?php coauthors_posts_links();?></p>
            <?php the_category(); ?>
            <a class="link-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            <p class="normal-p"><?php the_tags(); ?></p>
            <br>
            <br>

          <?php endwhile;
            endif;
          wp_reset_query();
      ?>


<?php get_footer(); ?>
