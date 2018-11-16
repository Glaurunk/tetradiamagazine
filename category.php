<!-- The markup for the single issue display -->

<?php get_header() ?>

    <div class="content">

        <h1 class = "text-centered margin-bottom">Περιεχόμενα Τεύχους
<!-- Function to retrieve and post the current issue number -->
              <?php category_by_slug();?>
        </h1>
        <br>

        <div class="box-main">

            <div class="box-left">
<!-- Set the covers url inside a variable then display it-->
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
//          $cats = array ('154','153','152','151','150','149','148','147');
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
<?php       endif;
            endwhile;
            wp_reset_query();
?>

            </div><!-- close box-right -->


        </div><!-- close box-main -->

<!--Previous - Next buttons for the categories (issues)-->
        <div class="pre-next">


<!-- code for assigning pre-next buttons with the appropriate URL using
incremental category slugs-->
<?php
// this part retrieves the previous and next categories by slug
        if(is_category()) {
          $cat = get_query_var('cat');
          $current_cat = get_category($cat);
          $slug = $current_cat->slug;

// The inevitable if statements
//issue1
              if ($slug == 'issue1')
              {
                  $pre = 'issue72-73';
                  $next = 'issue2-3';
              }
//issue2-3
              if ($slug == 'issue2-3')
              {
                  $pre = 'issue1';
                  $next = 'issue4';
              }
//issue4
              if ($slug == 'issue4')
              {
                  $pre = 'issue2-3';
                  $next = 'issue5';
              }
//issue5
              if ($slug == 'issue5')
              {
                  $pre = 'issue4';
                  $next = 'issue6';
              }
//issue6
              if ($slug == 'issue6')
              {
                  $pre = 'issue5';
                  $next = 'issue7';
              }
//issue7
              if ($slug == 'issue7')
              {
                  $pre = 'issue6';
                  $next = 'issue8';
              }
//issue8
              if ($slug == 'issue8')
              {
                  $pre = 'issue7';
                  $next = 'issue9';
              }
//issue9
              if ($slug == 'issue9')
              {
                  $pre = 'issue8';
                  $next = 'issue10';
              }
//issue10
              if ($slug == 'issue10')
              {
                  $pre = 'issue9';
                  $next = 'issue11';
              }
//issue11
              if ($slug == 'issue11')
              {
                  $pre = 'issue10';
                  $next = 'issue12';
              }
//issue12
              if ($slug == 'issue12')
              {
                  $pre = 'issue11';
                  $next = 'issue13';
              }
//issue13
              if ($slug == 'issue13')
              {
                  $pre = 'issue12';
                  $next = 'issue14';
              }
//issue14
              if ($slug == 'issue14')
              {
                  $pre = 'issue13';
                  $next = 'issue15';
              }
//issue15
              if ($slug == 'issue15')
              {
                  $pre = 'issue14';
                  $next = 'issue16';
              }
//issue16
              if ($slug == 'issue16')
              {
                  $pre = 'issue15';
                  $next = 'issue17-18';
              }
//issue17-18 [has its own page but anyways :)]
              if ($slug == 'issue17-18')
              {
                  $pre = 'issue16';
                  $next = 'issue19';
              }
//issue19
              if ($slug == 'issue19')
              {
                  $pre = 'issue17-18';
                  $next = 'issue20';
              }
//issue20
              if ($slug == 'issue20')
              {
                  $pre = 'issue19';
                  $next = 'issue21';
              }
//issue21
              if ($slug == 'issue21')
              {
                  $pre = 'issue20';
                  $next = 'issue22';
              }
//issue22
              if ($slug == 'issue22')
              {
                  $pre = 'issue21';
                  $next = 'issue23-24';
              }
//issue23-24
              if ($slug == 'issue23-24')
              {
                  $pre = 'issue22';
                  $next = 'issue25';
              }
//issue25
              if ($slug == 'issue25')
              {
                  $pre = 'issue23-24';
                  $next = 'issue26';
              }
//issue26
              if ($slug == 'issue26')
              {
                  $pre = 'issue25';
                  $next = 'issue27';
              }
//issue27
              if ($slug == 'issue27')
              {
                  $pre = 'issue26';
                  $next = 'issue28';
              }
//issue28
              if ($slug == 'issue28')
              {
                  $pre = 'issue27';
                  $next = 'issue29-30';
              }
//issue29-30
              if ($slug == 'issue29-30')
              {
                  $pre = 'issue28';
                  $next = 'issue31';
              }
//issue31
              if ($slug == 'issue31')
              {
                  $pre = 'issue29-30';
                  $next = 'issue32';
              }
//issue32
              if ($slug == 'issue32')
              {
                  $pre = 'issue31';
                  $next = 'issue33';
              }
//issue33
              if ($slug == 'issue33')
              {
                  $pre = 'issue32';
                  $next = 'issue34';
              }
//issue34
              if ($slug == 'issue34')
              {
                  $pre = 'issue33';
                  $next = 'issue35';
              }
//issue35
              if ($slug == 'issue35')
              {
                  $pre = 'issue34';
                  $next = 'issue36-37';
              }
//issue36-37
              if ($slug == 'issue36-37')
              {
                  $pre = 'issue35';
                  $next = 'issue38';
              }
//issue38
              if ($slug == 'issue38')
              {
                  $pre = 'issue36-37';
                  $next = 'issue39-40';
              }
//issue39-40
              if ($slug == 'issue39-40')
              {
                  $pre = 'issue38';
                  $next = 'issue41';
              }
//issue41
              if ($slug == 'issue41')
              {
                  $pre = 'issue39-40';
                  $next = 'issue42';
              }
//issue42
              if ($slug == 'issue42')
              {
                  $pre = 'issue41';
                  $next = 'issue43';
              }
//issue43
              if ($slug == 'issue43')
              {
                  $pre = 'issue42';
                  $next = 'issue44';
              }
//issue44
              if ($slug == 'issue44')
              {
                  $pre = 'issue43';
                  $next = 'issue45';
              }
//issue45
              if ($slug == 'issue45')
              {
                  $pre = 'issue44';
                  $next = 'issue46';
              }
//issue46
              if ($slug == 'issue46')
              {
                  $pre = 'issue45';
                  $next = 'issue47';
              }
//issue47
              if ($slug == 'issue47')
              {
                  $pre = 'issue46';
                  $next = 'issue48';
              }
//issue48
              if ($slug == 'issue48')
              {
                  $pre = 'issue47';
                  $next = 'issue49';
              }
//issue49
              if ($slug == 'issue49')
              {
                  $pre = 'issue48';
                  $next = 'issue50-51';
              }
//issue50-51
              if ($slug == 'issue50-51')
              {
                  $pre = 'issue49';
                  $next = 'issue52';
              }
//issue52
              if ($slug == 'issue52')
              {
                  $pre = 'issue50-51';
                  $next = 'issue53';
              }
//issue53
              if ($slug == 'issue53')
              {
                  $pre = 'issue52';
                  $next = 'issue54';
              }
//issue54
              if ($slug == 'issue54')
              {
                  $pre = 'issue53';
                  $next = 'issue55-56';
              }
//issue55-56
              if ($slug == 'issue55-56')
              {
                  $pre = 'issue54';
                  $next = 'issue57-58';
              }
//issue57-58
              if ($slug == 'issue57-58')
              {
                  $pre = 'issue55-56';
                  $next = 'issue59';
              }
//issue59
              if ($slug == 'issue59')
              {
                  $pre = 'issue57-58';
                  $next = 'issue60';
              }
//issue60
              if ($slug == 'issue60')
              {
                  $pre = 'issue59';
                  $next = 'issue61';
              }
//issue61
              if ($slug == 'issue61')
              {
                  $pre = 'issue60';
                  $next = 'issue62-63';
              }
//issue62-63
              if ($slug == 'issue62-63')
              {
                  $pre = 'issue61';
                  $next = 'issue64';
              }
//issue64
              if ($slug == 'issue64')
              {
                  $pre = 'issue62-63';
                  $next = 'issue65';
              }
//issue65
              if ($slug == 'issue65')
              {
                  $pre = 'issue64';
                  $next = 'issue66-67';
              }
//issue66-67
              if ($slug == 'issue66-67')
              {
                  $pre = 'issue65';
                  $next = 'issue68-69';
              }
//issue68-69
              if ($slug == 'issue68-69')
              {
                  $pre = 'issue66-67';
                  $next = 'issue70-71';
              }
//issue70-71
              if ($slug == 'issue70-71')
              {
                  $pre = 'issue68-69';
                  $next = 'issue72-73';
              }
//issue72-73
              if ($slug == 'issue72-73')
              {
                  $pre = 'issue70-71';
                  $next = 'issue1';
              }

// use the vars to get the new category arrays and stoew the pre-next slugs to a new var
            $pre_cat = get_category_by_slug( $pre );
            $next_cat = get_category_by_slug( $next );
            $pre_cat_link = $pre_cat->slug;
            $next_cat_link = $next_cat->slug;

}

?>
<!-- Display the buttons as simple html links-->
          <a class="button-link" href="http://localhost:8888/wpTetradia/category/<?php echo $pre_cat_link; ?>/">Προηγούμενο</a>
          <a class="button-link" href="http://localhost:8888/wpTetradia/category/<?php echo $next_cat_link; ?>/">Επόμενο</a>

        </div><!-- close pre-next -->

    </div><!-- close content -->

<?php get_footer() ?>
