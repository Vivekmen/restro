<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>login and home</title>
        <link rel="stylesheet" href="restro.css">
    </head>
    <body>
        <header>
            <h2 class="logo">Restro</h2>
            <nav class="navigation">
                <a href="#">Home</a>
                <a href="home.html">Menu</a>
                <a href="#">Token</a>
                <a href="about.html">About</a>
                <a href="#">Services</a>
                <a href="contact.html">Contact</a>
                <button onclick="document.getElementById('id01').style.display='block'" class="btnLogin-popup" style="width:auto;">Sign In</button>
                <button onclick="document.getElementById('id02').style.display='block'" class="btnLogin-popup" style="width:auto;">Sign Up</button>
                <!-- <button onclick="document.getElementById('id02').style.display='block'" class="btnLogin-popup" style="width:auto;">Signup</button> -->
                <!-- <button class="btnLogin-popup">Login</button> -->
                <!-- <a href="login.html">Login</a> -->
            </nav>       
        </header>
        <!-- <div class="imge">
            <div height="57rem" width="100%" class="banner-img">
                <div src class="sizing" ></div>
                <img alt="country image" src="homephoto/mill.jpg" class="imm">
            </div>
        </div>  -->


        <!-- signin form-----------------------------------------------------------  -->


        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="connect.php" method="post">
              <!-- <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
              </div> -->
          
              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                  
                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="container" style="background-color:#fff">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
          </div>

          
          
          <script>

            
          // Get the modal
          var modal = document.getElementById('id01');
          var modal2 = document.getElementById('id02');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
          </script>
          
          
          

          

          
          <div id="id02" class="modal">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="modall-content" action="rr.php" mehod="post" >
              <div class="rcontainer">
                <h1 class="headd">Sign Up</h1>
                <!-- <p>Please fill form to create an account.</p>
                <hr> -->
               
                
                
                
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter email" name="email" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
          
                 <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="cpassword" required>
                 
                

                <select class="selection" name="user_type">
                    <option value="user" >user</option>
                    <option value="admin">admin</option>
                </select>

                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
          
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue" >Terms & Privacy</a>.</p>
          
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="rcancelbtn">Cancel</button>
                  <button name="register" type="submit" class="rsignupbtn">Sign Up</button>
                </div>
              </div>
            </form>
          </div>
          
          <script>
          // Get the modal
          var modall = document.getElementById('id02');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modall) {
              modall.style.display = "none";
            }
          }
        </script>

        
        
        <!-- <div class="wrapper">
            <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="connect.php" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-open-outline"></ion-icon></span>
                        <input type="username" id="username" name="username" />
                        <label>Email</label>

                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" id="password" name="password" />
                        <label>Password</label>
                        
                    </div>
                  <div class="remember-forgot">
                    <lable><input type="checkbox">Remember me</lable><br>
                    <a href="#" >Forgot Password?</a>
                  </div>
                 <button type="submit" class="btn">Login</button>
                  <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                  </div>      
                
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input type="text" id="username" name="username"/>
                        <label>Username</label>

                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-open-outline"></ion-icon></span>
                        <input type="email" id="email" name="email">
                        <label>Email</label>

                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" id="password" name="password">
                        <label>Password</label>
                        
                    </div>
                  <div class="remember-forgot">
                    <lable><input type="checkbox">I agree to term & condition</lable><br>
                    
                  </div>
                 <button type="submit" class="btn">Register</button>
                  <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                  </div>      
                
                </form>
            </div>
        </div> -->

        <div class="con">
            <div class="maincon">
                <h3 class="#1c1c1c" class="headingcon">Insperation for your first order</h3>
                <section tabindex="0" aria-roledescription="carousel" class="photos">
                    <section class="divphoto">
                        <section class="divvphoto">
                            <section aria-live="polite" class="ppp">
                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="https://b.zmtcdn.com/data/o2_assets/d0bd7c9405ac87f6aa65e31fe55800941632716575.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Pizza</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>

                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="https://b.zmtcdn.com/data/dish_images/d19a31d42d5913ff129cafd7cec772f81639737697.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Biryani</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="https://b.zmtcdn.com/data/dish_images/d5ab931c8c239271de45e1c159af94311634805744.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Cake</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="https://b.zmtcdn.com/data/dish_images/ccb7dc2ba2b054419f805da7f05704471634886169.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Burger</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="https://b.zmtcdn.com/data/dish_images/197987b7ebcd1ee08f8c25ea4e77e20f1634731334.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Chiken</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="https://b.zmtcdn.com/data/dish_images/e44c42ff4b60b025225c8691ef9735b11635781903.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Paneer</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="https://b.zmtcdn.com/data/o2_assets/52eb9796bb9bcf0eba64c643349e97211634401116.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Thali</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                
                                <section class="ppv carsoul-content" aria-roledescription="slide" height="auto">
                                    <div style="width: 16.66rem">
                                    <div class="jumbo-tracker">
                                        <div class="inherit">
                                            <div class="pppp">
                                                <div height="19rem" width="100%" class="ppppp">
                                                    <div src class="ccc"></div>
                                                    <img alt="image" src="	https://b.zmtcdn.com/data/dish_images/c2f22c42f7ba90d81440a88449f4e5891634806087.png" loading="lazy" class="images">
                                                </div>
                                            </div>
                            <a href="#" class="ecfloy">
                                <p class="sss">Rolls</p>
                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                            </section>

                        </section>
                        <div class="uxzdv carousel-arrow" default>
                            <section tabindex="0" role="button" aria-controls="carsoul-items" aria-label="Next-slide" class="bpsef">

                            </section>
                        </div>
                    </section>
                </section>
            </div>

        </div>

<div class="footer">
    
</div>


        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
<?php


