$(document).ready(function() {
    $("#registration-form").submit(function(event) {
      event.preventDefault();
  
      var fname = $("#fname").val();
      var lname = $("#lname").val();
      var username = $("#username").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var confirmPassword = $("#confirm-password").val();
      var full_name= fname + " "+ lname;
  
      if (!username || !email || !password || !confirmPassword) {
        $("#message").text("Please fill in all fields.");
      } else if (password !== confirmPassword) {
        $("#message").text("Passwords do not match.");
      } else if (!isValidEmail(email)) {
        $("#message").text("Please enter a valid email address.");
      } else if (password.length < 6) {
        $("#message").text("Password must be at least 6 characters.");
      } else {
        $("#message").text("Registration successful for "+ full_name + " with "+ username);
        $("#registration-form")[0].reset();
      }
    });
  });
  
  function isValidEmail(email) {
    // basic email validation regex
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  