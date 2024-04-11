document.addEventListener("DOMContentLoaded", function() {
  // Get the modal
  var modal = document.getElementById("feedbackModal");

  // Get the button that opens the modal
  var btn = document.getElementById("showFeedbackForm");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // Get the form
  var feedbackForm = document.getElementById("feedbackForm");

  // When the user clicks the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  // Submit form
  feedbackForm.onsubmit = function(event) {
    event.preventDefault(); // Prevent default form submission
    // Perform your submission logic here, e.g., send data to server
    alert("Feedback submitted!"); // Temporary alert, replace with your logic
    modal.style.display = "none"; // Close modal after submission
  }

  // Star rating functionality
  const stars = document.querySelectorAll("#starRating input[type='radio']");
  const starLabels = document.querySelectorAll("#starRating label");

  stars.forEach((star, index) => {
    star.addEventListener("click", function() {
      resetStars();
      for (let i = 0; i <= index; i++) {
        starLabels[i].style.color = "#ffcc00";
      }
    });
  });

  function resetStars() {
    starLabels.forEach(label => {
      label.style.color = "#ccc";
    });
  }
});
