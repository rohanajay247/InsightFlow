<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="./login-page.css" />
  <!-- Add your other stylesheets here -->
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <div class="login-page">
    <div class="frame-parent7">
      <div class="insightflow-wrapper">
        <div class="insightflow2">InsightFlow</div>
      </div>
      <div class="frame-parent8">
        <div class="frame-parent9">
          <div class="insightflow-wrapper">
            <b class="where-insight-meets">Where insight meets innovation</b>
          </div>
          <div class="frame-wrapper">
            <div class="frame-wrapper">
              <div class="objectother-02">
                <img class="objectother-02-icon" alt="" src="./public/objectother-02@2x.png" />
              </div>
            </div>
          </div>
        </div>
        <div class="frame-parent10">
          <div class="insightflow-wrapper">
            <div class="login-to-access">Login To Access Your Data</div>
          </div>
          <div class="frame-parent11">
            <div class="frame-parent12">
              <div class="frame-parent13">
                <form action="" method="POST">
                  <h3>username</h3><input type="text" name="username" />
                  <h3>password</h3><input type="password" name="password" />
                  <input type="submit" name="submit" />
                </form>
              </div>
              <div class="back-wrapper">
                <div class="back" id="backText">Back</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // code for when the back button is clicked, takes user back to landing page
    var backText = document.getElementById("backText");
    if (backText) {
      backText.addEventListener("click", function (e) {
        window.location.href = "./landing-page.html";
      });
    }
  </script>

  <?php
  $connection = mysqli_connect("localhost", "root", "", "authentication");
  if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $pswd = $_POST['password'];
    $query = "SELECT * FROM logintest WHERE username='$name' AND password='$pswd'";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      echo 'Login Success';
      header("Location: https://insightflow.streamlit.app/");
      exit;
    } else {
      echo 'Login failed';
    }
  }
  ?>
  
</body>
</html>
