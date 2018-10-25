<!-- This is the template for single author display page -->

<?php get_header(); ?>

<div class="content">

  <?php
// Set $carauth variable to include current author's meta
        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
  ?>
 <!-- the output -->
      <h1><?php echo $curauth->display_name; ?></h1>
      <p class="main-no-indent"><?php echo $curauth->user_description; ?></p>
      <hr>

      <h2>Κείμενα</h2>

<!-- The Loop -->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <li>
          <a class="link-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
          <?php the_title(); ?></a>,
          <p class="issue-title"><?php the_category('&');?></p>
      </li>

  <?php endwhile; else: ?>
      <p><?php _e('Δεν υπάρχουν κείμενα.'); ?></p>

  <?php endif; ?>

<!-- End Loop -->



</div><!-- close content -->




<?php get_footer(); ?>
