<!DOCTYPE html>
<html>
  <head>
    <!--  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet"href="./login-page.css"> 
    <!-- To link html with css -->
    <!-- links for google fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Audiowide:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Russo One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Arbutus Slab:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Road Rage:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Shippori Antique B1:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=RocknRoll One:wght@400&display=swap"
    />
    <!-- ------------------------------------------------------------------------------- -->
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <div class="login-page">
      <div class="frame-parent7">
        <div class="insightflow-wrapper">
          <!-- for insightflow logo  -->
          <div class="insightflow2">InsightFlow</div>
        </div>
        <div class="frame-parent8">
          <!-- for all the contents  -->
          <div class="frame-parent9">
            <!--for where insight meets innovation and pic content    -->
            <div class="insightflow-wrapper">
              <b class="where-insight-meets">Where insight meets innovation</b>
              <!--  text-->
            </div>
            <div class="frame-wrapper">
              <div class="frame-wrapper">
                <div class="objectother-02">
                  <!--for the image  -->
                  <img
                    class="objectother-02-icon"
                    alt=""
                    src="./public/objectother-02@2x.png"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="frame-parent10">
            <!-- for login box  -->
            <div class="insightflow-wrapper">
              <div class="login-to-access">Login To Access Your Data</div>
            </div>
            <div class="frame-parent11">
              <!-- username, password, login, back -->
              <div class="frame-parent12">
                <!-- username, password -->
                <div class="frame-parent13">
                  <!-- username -->
                  <div class="frame-wrapper">
                    <div class="insightflow-wrapper">
                      <div class="username">USERNAME</div>
                    </div>
                  </div>
                  <div class="frame-wrapper">
                    <input class="user" type="text" />
                  </div>
                </div>
                <div class="frame-parent14">
                  <!-- password -->
                  <div class="frame-wrapper">
                    <div class="insightflow-wrapper">
                      <div class="username">PASSWORD</div>
                    </div>
                  </div>
                  <input class="frame-input" type="password" />
                </div>
              </div>
              <div class="frame-parent15">
                <!-- login, back -->
                <div class="frame-wrapper">
                  <div class="enter1" id="loginButton">
                    <div class="enter-item"></div>
                    <div class="entrar1">LOGIN</div>
                  </div>
                </div>
                <div class="back-wrapper">
                  <div class="back" id="backText">Back</div>
                  <!-- div for back button  -->
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

      // code for when the login button is clicked, redirects user to insightflow.streamlit.app
      var loginButton = document.getElementById("loginButton");
      if (loginButton) {
        loginButton.addEventListener("click", function (e) {
          window.location.href = "https://insightflow.streamlit.app/";
        });
      }
    </script>
  </body>

  </html>
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