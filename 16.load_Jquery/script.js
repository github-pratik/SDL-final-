$(document).ready(function() {
    // Load header and footer
    $("#header").load("header.html");
    $("#footer").load("footer.html");
  
    // Load content for each page
    $("#home").load("home.html");
    $("#about").load("about.html");
    $("#contact").load("contact.html");
  
    // Navigation click event
    $(".nav-link").click(function() {
      // Remove active class from previous navigation item
      $(".nav-link.active").removeClass("active");
      // Add active class to current navigation item
      $(this).addClass("active");
  
      // Hide all pages
      $(".page").hide();
  
      // Show selected page
      var page = $(this).attr("data-page");
      $("#" + page).show();
    });
  });
  