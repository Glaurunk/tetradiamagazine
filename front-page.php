<!-- The home page template
We use two separate queries: one for the left column, to fetch the image and category link and a second one for the right column to fetch the last issues contents
-->

<?php get_header();
// a global variable to save some time replacing the category name
      $last_issue = 'issue70-71';


// The arguments
      $args = array(
              'category_name'  => $last_issue,
              'posts_per_page' => -1
      );
// The First Query
      $first_query = new WP_Query( $args );

// The First Loop to get the category id and url
      while ( $first_query->have_posts() ) : $first_query->the_post();

// get the category id and url
            $cat_id = get_the_category();
            $cat_link = get_category_link($cat_id);

      endwhile;
      wp_reset_query();
 ?>
 
<!-- This is the commentary section below the h1-->
<div class="content">


      <h1 class="text-centered space-below">Αρχική Σελίδα</h1>
      <div class="announcement">
          <p class="shown-always"> Καλώς ήρθατε στον δικτυακό τόπο του περιοδικού Τετράδια. Μέσα στις σελίδες αυτές θα βρείτε πληροφορίες για όλα τα τεύχη του περιοδικού και τους αρθρογράφους, ενώ σιγά-σιγά και ανάλογα με τους πόρους θα γίνονται διαθέσιμα σε ψηφιακή μορφή και τα άρθρα των τευχών του περιοδικού, από τα νεότερα προς τα παλαιότερα. </p>
          <p class="hidden">Το εκάστοτε τρέχον τεύχος θα αναρτάται μετά την κυκλοφορία του επόμενου. Στόχος μας είναι η πλήρης ψηφιοποίηση όλων των τευχών του περιοδικού και η δημιουργία ενός ολοκληρωμένου αρχείου. Ακολουθήστε μας στο <a href="https://www.facebook.com/Τετράδια-Πολιτικού-Διαλόγου-Έρευνας-και-Κριτικής-250982335013524/">Facebook</a> για να μένετε ενημερωμένοι για τις νέες ψηφιοποιήσεις. Οι ενδιαφερόμενοι μπορούν, επίσης, να αναζητήσουν τα "Τετράδια" στη <a href="http://pandemos.panteion.gr/index.php?lang=el&op=record&pid=cid:22">βάση δεδομένων "Πάνδημος"</a> του Παντείου Πανεπιστημίου, όπου υπάρχουν όλα τα άρθρα του περιοδικού μέχρι το τεύχος 61 σε μορφή pdf.</p>
          <p class="hidden">Αναζητήστε τα κείμενα που σας ενδιαφέρουν είτε χρονολογικά, μέσα από το Αρχείο Τευχών, είτε βάση συγγραφέα μέσα από τη σελίδα των Συνεργατών, είτε χρησιμοποιώντας θεματικές λέξεις κλειδιά (λ.χ. Κύπρος, Γκράμσι, μνημόνιο).</p>
          <p class="hidden highlight">Ενημερωθείτε για τη διαρκή προσφορά των Τετραδίων. Αγοράστε τώρα όλα τα τεύχη του περιοδικού (πλην του τρέχοντος και των εξαντλημένων), μόνο με 70 ευρώ. Για αγορές συνδρομές και χορηγίες μπορείτε να απευθύνσετε στη διεύθυνση του περιοδικού ή στο ηλεκτρονικό κατάστημα των <a class="grey" href="http://www.stochastis.gr">Εκδόσεων Στοχαστής</a>.</p>
          <p class="hidden">Γραφτείτε συνδρομητές! Ενισχύστε την κοινή μας προσπάθειά και συμβάλετε στην ψηφιοποίηση και των υπολοίπων τευχών του περιοδικού!</p>

          <script type="text/javascript" src="<?php get_template_directory_uri().'/js/menu.js' ?>"></script>
          <input type="checkbox" class="checkbox" id="checkbox" onclick="toggleText()"/>
          <label for="checkbox" class="checkbox-label"></label>
      </div><!--close announcement -->

      <h2 class="text-centered">Τελευταίο τεύχος</h2>
      <a href="http://localhost:8888/wpTetradia/category/<?php echo $last_issue; ?>/" class="link-h2"><h2 class="text-centered">τετράδιο 70-71 / χειμώνας 2017-ανοιξη 2018</h2></a>
      <br>
      <br>

      <div class="box-main">

          <div class="box-left">

              <a href="http://localhost:8888/wpTetradia/category/<?php echo $last_issue; ?>/"><img class="cover" src="http://localhost:8888/wpTetradia/wp-content/uploads/2018/08/t70-71.jpg" alt="cover" /></a>
          </div><!-- close box-left -->

          <div class="box-right">
              <h2 class="text-centered no-margin">Περιεχόμενα τεύχους</h2>
              <br>


<!-- The Second loop for the latest issue articles -->

<?php

// The arguments
      $args = array(
              'category_name'  => $last_issue,
              'posts_per_page' => -1
      );
// The Query
      $second_query = new WP_Query( $args );

// The First Loop to get the category id and url
      while ( $second_query->have_posts() ) : $second_query->the_post();

// variables: post id, author id, author url

              $id = get_the_ID();
              $author = get_the_author_meta('id');
              $author_url = get_author_posts_url($author);?>

 <!-- The output: co-authors' plus function for names and custom title diplay loop -->
               <p class="author"><?php coauthors(); ?></p>
               <p class="link-title main-no-indent main-no-justify"><?php the_title(); ?></p>
               <br>


              <?php endwhile;

                    wp_reset_query(); ?>

          </div><!-- close box-right -->

      </div><!--close flex-main -->

</div><!-- close content -->

<?php get_footer(); ?>
