<?php

declare(strict_types=1);

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_view.inc.php";
        require_once "login_cntr.inc.php";
        require_once "config_session.inc.php";

        $errors = [];

        if(is_input_empty($username, $pwd)){
            $errors["empty_input"] = "Fill in all the fields!";
        }

        $user = get_user($pdo, $username);

        if(is_username_wrong($user)){
            $errors["wrong_info"] = "Incorrect Login Info";
        }
        if(!is_username_wrong($user) && is_password_wrong($pwd, $user["pwd"])) {
            $errors["wrong_pwd"] = "Incorrect Password";
        }

        if($errors){
            $_SESSION["errors_login"] = $errors;

            header("Location: ../signup.index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionID = $newSessionId . "_" . $user["id"];
        session_id($sessionID);

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = htmlspecialchars($user["username"]);

        $_SESSION['last_regeneration'] = time();

        header("Location: ../index.php?login=success");

        $stmt = null;
        $pdo = null;
        die();

    } catch (PDOException $e) {

        die("QUERY FAILED :" . $e->getMessage());
    }

}else{
    header("Location:../index.php");
    die();
}