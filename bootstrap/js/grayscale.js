(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 70)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 100
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

})(jQuery); // End of use strict

function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
});

$("#txtNewPassword").keyup(function () {
    var user_pass = $("#txtNewPassword").val();
    var user_pass2 = $("#txtConfirmPassword").val();

    if (user_pass == user_pass2) {
      $("#registerbutton").prop('disabled', false)//use prop()
    } else {
      $("#registerbutton").prop('disabled', true)//use prop()
    }
  });

  $("#txtConfirmPassword").keyup(function () {
    var user_pass = $("#txtNewPassword").val();
    var user_pass2 = $("#txtConfirmPassword").val();

    if (user_pass == user_pass2) {
      $("#registerbutton").prop('disabled', false)//use prop()
    } else {
      $("#registerbutton").prop('disabled', true)//use prop()
    }
  });
