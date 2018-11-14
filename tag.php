<!-- **
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag. -->

 <?php get_header(); ?>


<div class="content">


    <h1 class="text-centered space-below">Ετικέτα: <?php print_r (single_tag_title()); ?></h1>

<?php
    $cats = array ('154','153','152','151','150','149','148','147');
    $args = array(
            'posts_per_page' => -1,
            'author' => -1,
            'tag' => $tag
    );

    $tag_query = new WP_Query ($args);

            while ( $tag_query->have_posts() ) : $tag_query->the_post();

              if  ( in_category($cats)) :
?>
                  <p class="author"><?php coauthors_posts_links();?></p>
                  <?php the_category(); ?>
                  <a class="link-title tags" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                  <p class="normal-p tags"><?php the_tags(); ?></p>
                  <br>
                  <br>

<?php        else :
?>
                  <p class="author"><?php coauthors_posts_links();?></p>
                  <?php the_category(); ?>
                  <p class="normal-p link-title tags"><?php the_title(); ?></p>
                  <p class="normal-p tags"><?php the_tags(); ?></p>
                  <br>
                  <br>

<?php        endif;
             endwhile;
             wp_reset_query();
?>


<?php get_footer(); ?>
