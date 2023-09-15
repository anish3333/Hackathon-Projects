<?php
    require_once "includes/signup_view.inc.php";
    require_once "includes/login_view.inc.php";
    require_once "includes/config_session.inc.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/newstyle.signup.css">
</head>
<body>

    <!-- <?php
        //output_username();
    ?>
    
    <div class="signup">
    <form method = "post" action = "includes/signup.inc.php">
       
        <?php 
        // signup_inputs(); 
        ?>
        <button type = "submit">SIGN-UP</button>

    </form>
    </div>

    
    <br>

    <div class="login">
    <form method = "post" action = "includes/login.inc.php">
       
       <input type = "text"  name = "username" placeholder="username"><br>
       <input type = "password" name ="pwd" placeholder="password"><br>
       <button type = "submit">LOGIN</button>

   </form>
   </div>

   

   <form method = "post" action = "includes/logout.inc.php">
       <button type = "submit">LOGOUT</button>
   </form> -->


   <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action= "includes/login.inc.php" method="post" class="login">
            
            <div class="field"><input type="text" name="username" placeholder="Username" required></div>
            <div class="field"><input type="password" name="pwd" placeholder="Password" required></div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>

            <?php
            check_login_errors();
            ?>
          </form>
          <form action="includes/signup.inc.php" method="post" class="signup">
            <?php 
            signup_inputs(); 
            ?>
            <!-- <div class="field"><input type="text" name="email" placeholder="Email Address" required></div>
            <div class="field"><input type="password"name="pwd" placeholder="Password" required></div>
            <div class="field"><input type="text" name="username" placeholder="Username" required></div> -->
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
            <?php
            check_signup_errors();
            ?>
          </form>
        </div>
      </div>
    </div>

    <!-- <form method = "post" action = "includes/logout.inc.php">
       <button type = "submit">LOGOUT</button>
   </form> -->



   <script src="script/signup.script.js"></script>
</body>
</html>




