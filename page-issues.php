<!-- Markup for the Issues page -->

<?php get_header() ?>


      <div class="content">

          <h1 class="text-centered margin-bottom">Αρχείο τευχών</h1>
          <p class="shown-always margin-bottom"> Αναζητήστε τα περιεχόμενα των τευχών που σας ενδιαφέρουν. Σε ολοκληρωμένη ψηφιακή μορφή είναι διαθέσιμα μέχρι στιγμής τα τεύχη 66-67, 68-69 και 70-71. Ακολουθήστε μας στο <a href="https://www.facebook.com/Τετράδια-Πολιτικού-Διαλόγου-Έρευνας-και-Κριτικής-250982335013524/">Facebook</a> για να παραμένετε ενημερωμένοι για τις μελλοντικές αναρτήσεις.</p>

          <div class="box-main1 margin-top">


<!-- Run the Loop -->
          <?php

            $args = array('hide_empty' => 0,
                          'exclude' => '1'
            );

            foreach (get_categories($args) as $cat) : ?>

                <div class="box-child">
                    <a class="no-link" href="<?php echo get_category_link($cat->term_id); ?>"><img class="thumbnail" src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" /></a>
                    <a class="titles" href="<?php echo get_category_link($cat->term_id); ?>">Tεύχος<?php $new_cat = substr($cat->slug, 5); echo ' '.$new_cat;?></a>
                </div><!-- close box-child -->

      <?php endforeach; ?>


    </div><!-- close box-main1 -->

      </div><!-- close content -->



<?php get_footer() ?>
