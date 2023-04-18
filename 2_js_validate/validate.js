document.getElementById("myForm").onsubmit = function(event){
  event.preventDefault();
  if (validateForm()) {
    this.submit();
  }
};

function validateForm() {
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var usernameError = document.getElementById("usernameError");
  var emailError = document.getElementById("emailError");
  var passwordError = document.getElementById("passwordError");
  var isValid = true;

  if (username === "") {
    usernameError.textContent = "Username is required";
    isValid = false;
  } else {
    usernameError.textContent = "";
  }

  if (email === "") {
    emailError.textContent = "Email is required";
    isValid = false;
  } else if (!emailRegex.test(email)) {
    emailError.textContent = "Email is not valid";
    isValid = false;
  } else {
    emailError.textContent = "";
  }

  if (password === "") {
    passwordError.textContent = "Password is required";
    isValid = false;
  } else if (password.length < 8) {
    passwordError.textContent = "Password must be at least 8 characters long";
    isValid = false;
  } else {
    passwordError.textContent = "";
  }

  return isValid;
}
