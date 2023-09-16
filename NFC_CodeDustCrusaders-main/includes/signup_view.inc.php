<?php

declare(strict_types=1);

function signup_inputs(){

    if( isset($_SESSION["signup_data"]["username"]) &&  !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<div class="field"><input type="text" name="username" placeholder="Username" required value = "' . $_SESSION["signup_data"]["username"] . '"></div>';
    }else{
        echo '<div class="field"><input type="text" name="username" placeholder="Username" required></div>';
    }

    if( isset($_SESSION["signup_data"]["email"]) &&  !isset($_SESSION["errors_signup"]["invalid_email"]) &&  !isset($_SESSION["errors_signup"]["email_used"])){
        echo '<div class="field"><input type="text" name="email" placeholder="Email Address" required' . 'value = "' . $_SESSION["signup_data"]["email"] . '"></div>';
    }else{
        echo '<div class="field"><input type="text" name="email" placeholder="Email Address" required></div>';
    }

    echo '<div class="field"><input type="password"name="pwd" placeholder="Password" required></div>';

}


function check_signup_errors(){

    if(isset($_SESSION["errors_signup"])){
        $errors = $_SESSION["errors_signup"];
        
        echo "<br>";

        foreach($errors as $error){
            // echo "<p>" . $error . "</p>"; 
            echo '<script> alert("' .  $error. '"); </script>';

        }

        unset($_SESSION["errors_signup"]);
    }else if(isset($_GET['signup']) &&$_GET['signup'] === "success" ){
        echo "<br> <p> SignUp SUCCESS!! </p>";
    }
    
}


