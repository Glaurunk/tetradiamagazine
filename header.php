<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <title><?php bloginfo( 'name' ); wp_title(' | ')?></title>
      <?php wp_head() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Ο ιστότοπος του περιοδικού Τετράδια. Ηλεκτρονικό αρχείο κειμένων και συνεργατών.">
      <meta name="keywords" content="περιοδικό,τετράδια,πολιτικού,διαλόγου,έρευνας,κριτικής,tetradia,magazine">
      <meta name="author" content="Sta8is @deepSeaCoding.com">
      <link rel="profile" href="https://gmpg.org/xfn/11">
  </head>

  <body>

      <div class="container">

        <div class="scroll-button">
          <button onclick="topFunction()" id="myBtn" title="Go to top">Επάνω</button>
        </div>

        <header>

<!-- parent flex div for left and right containers -->
          <div class="flex-main">

<!-- h1 and p title float container -->
                  <div class="flex-title">
                          <h1 class="title"><a class="no-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">τετράδια</a></h1>
                          <p class="subtitle">ΠΟΛΙΤΙΚΟΥ ΔΙΑΛΟΓΟΥ ΕΡΕΥΝΑΣ ΚΑΙ ΚΡΙΤΙΚΗΣ</p>
                  </div> <!-- close flex-title -->


<!-- Toggle Button burger float container -->
                      <div class="flex-burger">
                          <a class="burger-link" onclick="toggleMenu()">
                              <img src="http://localhost:8888/wpTetradia/wp-content/uploads/2018/09/burger-black.png" alt="burger" class="burger">
                          </a>
                      </div> <!-- close flex-burger -->


          </div><!-- close flex-main -->

        </header>

<!-- Menu Initialization -->
        <nav class="margin-top">
          <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'primary_menu'
          )); ?>
        </nav>
