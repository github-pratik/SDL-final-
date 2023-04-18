// Add event listeners to table rows
var rows = document.getElementsByTagName("tr");
for (var i = 0; i < rows.length; i++) {
  rows[i].addEventListener("click", function() {
    // Toggle active class on clicked row
    this.classList.toggle("active");
  });
  
  rows[i].addEventListener("mouseover", function() {
    // Add hover class on mouseover
    this.classList.add("hover");
  });
  
  rows[i].addEventListener("mouseout", function() {
    // Remove hover class on mouseout
    this.classList.remove("hover");
  });
}

// Add event listener to name input field
var nameInput = document.getElementsByName("name")[0];
nameInput.addEventListener("focus", function() {
  // Add focus class on input focus
  this.classList.add("focus");
});

nameInput.addEventListener("blur", function() {
  // Remove focus class on input blur
  this.classList.remove("focus");
});

// Add event listener to form submit button
var submitButton = document.querySelector("input[type='submit']");
submitButton.addEventListener("click", function(event) {
  // Prevent form submission and display success message
  event.preventDefault();
  alert("Form submitted successfully!");
});

