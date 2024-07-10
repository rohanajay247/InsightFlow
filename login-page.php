<!DOCTYPE html>
<html>
  <head>
    <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  overflow-x: hidden;
  overflow-y: auto;
}

.login-page{
  width: 100vw;
  font-family: Audiowide;
}


.navBar{
  width: 100%;
  /* background-color: black; */
  min-height: 5rem;
  display: flex;
  align-items: end;
  padding-top: 2.5rem;
  /* border: 1px solid black; */
}
nav{
  width: 87%;
  max-width: 1350px;
  margin: 0 auto;
  color: white;
}
.insightflow2 {
  /* position: relative; */
  text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  color: black;

}

.mainSection{
  width: 100%;
  /* background-color: green; */
  height: 46rem;
}
.where-insight-meets {
  position: relative;
  line-height: 3rem;

  font-size: 2.5rem;
  font-weight: 800;
  text-transform: capitalize;
  flex-shrink: 0;
  font-family: Outfit;

}

.frame-parent10 {
  border-radius: 10px;
  background-color: #9090dc;
  backdrop-filter: blur(4px);
  font-family: Montserrat;

  

}

.inputName{
  border: 0;
  outline: 0;
  background-color: #fff;
  width: 20rem;
  border-radius: 5px;
  height: 3rem;
  padding: 22px 78px 21px;
  box-sizing: border-box;
  font-family: Montserrat;
  font-weight: 600;
  font-size: 20px;
  color: #000;
}

.backbtn{
  text-decoration: none;
  color: black;
}

  </style>
    <!--  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    /> -->

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
    
    <div class="login-page">
        <section class="navBar">
            <nav>
                <div class="insightflow2
                text-[40px]
                ">InsightFlow</div>
            </nav>
        </section>

        <section class="mainSection">
            
            <!-- text wrapper -->
            <div class="w-[87%] max-w-[1350px] mx-auto flex py-[5rem]">
                <!-- left section -->
                <div class="px-[2rem] w-[30%] ">
                    <div class="insightflow-wrapper">
                        <p class="text-[2rem] font-extrabold where-insight-meets">Where insight meets   innovation</p>
                        <!--  text-->
                      </div>
                      <!-- image -->
                      <!-- <img src="objectother-02@2x.png" alt="insightflow" class="w-[300px]  "> -->
                </div>
                <!-- right section form -->
                <div class="frame-parent10 flex flex-col  items-center
                px-[5rem]  h-[28rem] gap-[5rem]
                "> 
                    <!-- for login box  -->
                    <div class="insightflow-wrapper mt-[2rem] mr-[4rem]">
                      <div class="login-to-access text-[2rem]">Login To Access Your Data</div>
                    </div>
                    <form action="" method="POST" class="insightflow-wrapper grid gap-5 items-center justify-items-center place-items-center">
                            <div class="flex flex-col gap-[2rem] ">
                                <div class="flex gap-5 items-center justify-center">
                                    <label  for="username">USERNAME</label>
                                    <input type="text" id="username" name="username" class="inputName"/>
                                    </div>
                                    <div class="flex gap-5 items-center justify-center">
                                    <label for="username">PASSWORD</label>
                                    <input class="inputName" type="password" name="password" id="password" />
                                    </div>
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <input type="submit" value="LOGIN" name="submit" class="bg-black text-white rounded-lg px-[2rem] py-[0.5rem]"/>

                                <a href="#" class="backbtn">Back</a>
                            </div>
                    </form>
                    
    
    
                </div>

            </div>
        </section>


<!-- login button 
<div class="back-wrapper">
                      <div class="back" id="backText">Back</div>
                     
                    </div>
-->


























        
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
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
    $connection=mysqli_connect("localhost", "root", "");
    $db=mysqli_select_db($connection, 'authentication');
    if(isset($_POST['submit']))
    {
      $name=$_POST['username'];
      $pswd=$_POST['password'];
      $query=mysqli_query($connection,"select username, password from logintest where username='$name' and password='$pswd'");
      if($query)
      {
        if(mysqli_num_rows($query)>0)
        {
          echo '<script>window.location.href = "https://insightflow.streamlit.app/";</script>';
          die();
        }
        else
        {
          echo '<script> alert("Login Failed")</script>';
        }
      }
    }
  ?>

  </body>
</html>