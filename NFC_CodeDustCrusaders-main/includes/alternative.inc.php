<?php

if( $_SERVER["REQUEST_METHOD"] === "POST" ){

    $modern = $_POST["ayurvedic"];
    

    try {

        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_view.inc.php";
        require_once "signup_cntr.inc.php";
        require_once 'config_session.inc.php';


        $query = "SELECT * FROM medicine WHERE modern = :modern;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':modern', $modern);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($result){
        $ayurvedic = $result["ayurvedic"];
        echo $ayurvedic;
        }
        else{
            echo "Not Found";
        }
    
        // header("Location: ../index.php?search=success");
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