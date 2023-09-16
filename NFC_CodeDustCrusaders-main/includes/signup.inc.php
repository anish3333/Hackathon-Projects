<?php

if( $_SERVER["REQUEST_METHOD"] === "POST" ){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {

        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_view.inc.php";
        require_once "signup_cntr.inc.php";

        $errors = [];
        // ERROR HANDLERS
        if(is_input_empty( $username, $email, $pwd)){
            $errors["empty_input"] = "Fill in all the fields!";
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"] = "The email you have entered is INVALID!";
        }
        if(is_username_taken( $pdo, $username)){
            $errors["username_taken"] = "The Username is already taken";
        }
        if(is_email_registered($pdo, $email)){
            $errors["email_used"] = "The email you have entered is already registered!";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            $signup_data = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signup_data;

            header("Location: ../signup.index.php");
            die();

        }

        create_user($pdo, $username, $email, $pwd);

        header("Location: ../index.php?signup=success");
        $stmt = null;
        $pdo = null;

        die();
        
    } catch (PDOException $e) {

        die("MOSHIMOSH QUERY Failed: " . $e->getMessage());

    }

}else{
    header("Location: ../index.php");
    die();
}