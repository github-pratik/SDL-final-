// Show the notification popup
document.addEventListener("DOMContentLoaded", function() {
  var notificationPopup = document.querySelector(".notification-popup");
  notificationPopup.style.display = "block";

  // Close the notification popup when the close button is clicked
  var closeBtn = document.querySelector(".close-btn");
  closeBtn.addEventListener("click", function() {
    notificationPopup.style.display = "none";
  });

  // Hide the notification popup after a certain amount of time
  setTimeout(function() {
    notificationPopup.style.display = "none";
  }, 5000);
});
