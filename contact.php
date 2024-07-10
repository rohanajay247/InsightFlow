<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Audiowide:wght@400&display=swap" />
</head>
<body>
  <div class="contact-form">
    <h1>InsightFlow</h1>
    <div class="container">
      <div class="main">
        <div class="content">
          <h2>Contact Us</h2>
          <form id="contactForm" action="function.php" method="post">
            <input id="formname" type="text" name="name" placeholder="Enter Your Name" />
            <input id="formmail" type="email" name="email" placeholder="Enter Your Email" />
            <textarea id="formmsg" name="message" placeholder="Your Message"></textarea>
            <button type="submit" class="btn" id="sendButton">Send</button>
          </form>
          <div id="response"></div>
        </div>
        <div class="form-img">
          <img src="contactimg.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <script>
document.addEventListener("DOMContentLoaded", function() {
  var contactForm = document.getElementById("contactForm");
  var nameRegex = /^[a-zA-Z\s]+$/;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent form submission by default

      var nameInput = document.getElementById("formname").value.trim();
      var emailInput = document.getElementById("formmail").value.trim();
      var msgInput = document.getElementById("formmsg").value.trim();

      if (nameInput == "" || emailInput == "" || msgInput == "") {
        alert("Please fill all fields");
        return; // Exit event listener, form submission prevented
      }

      if (!nameRegex.test(nameInput)) {
        alert("Enter correct name");
        return; // Exit event listener, form submission prevented
      }

      if (!emailRegex.test(emailInput)) {
        alert("Enter correct email");
        return; // Exit event listener, form submission prevented
      }

      // If all validations pass, submit the form via AJAX
      var formData = new FormData(contactForm);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", contactForm.getAttribute("action"), true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            alert(xhr.responseText); // Display the message received from the server
          } else {
            console.log("Error occurred: " + xhr.status);
          }
        }
      };
      xhr.send(formData);
    });
  }
});
</script>

</body>
</html>
