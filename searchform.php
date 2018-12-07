<!-- Custom search form -->

<style>
    input[type=submit] {
      padding: 15px 20px;
      background-image: url(http://localhost:8888/wpTetradia/wp-content/uploads/2018/09/mag-lens.png);
      background-size: 35px;
      background-repeat: no-repeat;
      background-color: inherit;
      cursor: pointer;
      border: 1px;
    }

    input[type=search], select {
        /* width: 85%; */
        padding: 8px 20px;
        display: inline-block;
        border: 1px solid black;
        border-radius: 4px;
        box-sizing: border-box;
        font: 1.3em pfReg;
    }
</style>

<form class="space-below" role="search" method="get" action="<?php echo home_url('/'); ?>" >
      <input type="submit" name="submit" value="">
      <input type="search" class="search-input" placeholder="Βάλτε λέξεις-κλειδιά" value="<?php echo get_search_query(); ?> "name="s"  title="Search"/>
      <br>
      <br>
      <br>
</form>
