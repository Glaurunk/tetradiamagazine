/*
==================================================================
  Scroll to the top of the page button
==================================================================
*/

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}




/*
==================================================================
  Toogle Burger Menu by adding class
==================================================================
*/
function toggleMenu() {

  var myClass = document.getElementById("menu-basic-menu");


    if
    (myClass.classList == 'primary_menu')
      {
        myClass.classList.add('toggled');
      }

   else if
    (myClass.classList == 'primary_menu toggled')
      {
       myClass.classList.remove('toggled');
      }
}



/*
==================================================================
  Expand front page text text by adding class
==================================================================
*/

function toggleText() {

    let els = Array.from(document.getElementsByClassName("hidden"));

        if
        (els.length > 0) {

            for (let i = 0; i < els.length; i++) {
              els[i].classList.remove('hidden');
              els[i].classList.add('shown');
            }
        } else {
          let els = Array.from(document.getElementsByClassName("shown"));

            for (let i = 0; i < els.length; i++) {
              els[i].classList.remove('shown');
              els[i].classList.add('hidden');
          }

      }

}
