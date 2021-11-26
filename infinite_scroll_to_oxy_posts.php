<?php

/*
* Description: Simple way to add infinite scroll to your oxygen easy post module with a basic setup
*/

// Step 1
// Add the infinite scroll JS library to your page
// See install documentation: https://infinite-scroll.com/#install

// Step 2
// Add a code block just after your easy post module and put this JS code

/*
(function($) {
    $('#my_easy_post .oxy-posts').infiniteScroll({
        path: '#my_easy_post .next', //the next page URL path
        append: '#my_easy_post .oxy-post', //Append and search this CSS query selector from the returned data
        history: false, //Enable the change of the page URL and browser history.
        hideNav: '#my_easy_post .oxy-easy-posts-pages', //hide the Oxygen navigation buttons
        scrollThreshold: true, // Enable auto load when reached the treshold
        status: '.page-load-status' // the rendered status
    });

})(jQuery);
*/

// Step 3
// Add this PHP code to the code block

/*
<div class="page-load-status">
  <div class="infinite-scroll-request">
    Chargement ...
  </div>
  <p class="infinite-scroll-last">Fin des articles</p>
  <p class="infinite-scroll-error">Une erreur est survenue lors du chargement</p>
</div>
*/

// Step 4
// Add this CSS code to the code block

/*
.page-load-status {
  width: 100%;
  display: none;
  margin-top: 60px;
  text-align: center;
  color: #777;
}
*/

// And your all done!

?>