<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Ayurveda</title>
    <link rel="stylesheet" href="../css/hack.css" class="css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">

</head>
<body>

<?php
include('./simple_html_dom.php');
if( $_SERVER["REQUEST_METHOD"] === "POST" ){

    $modern = $_POST["modern"];  

    try {

        require_once "dbh.inc.php";
        require_once 'config_session.inc.php';


        $query = "SELECT * FROM medicine WHERE modern = :modern;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':modern', $modern);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($result){
        $ayurvedic = $result["ayurvedic"];
        $symptoms = $result["symptoms"];
        // echo $ayurvedic . "\n" . $symptoms;

        $html = file_get_html("https://en.wikipedia.org/wiki/$ayurvedic");

        // echo $html->find('div.mw-parser-output', 0)->innertext;

        }

        $stmt = null;
        $pdo = null;
        // die();
        
    } catch (PDOException $e) {

        die("MOSHIMOSH QUERY Failed: " . $e->getMessage());
    }
    
}else{
header("Location: ../index.php");
die();
}
?>
                                    <!-- HTML BEGINS -->

<div class="navbar" id="myNav">
		<img class="logo" src="../assets/logo.jpeg"/>
		<a href="#Ayurveda" class="Ayurveda">BetterAyurveda</a>
  		<a href="../index.php" class="active">Home</a> 
        <a href="#compare"  class="compare">Compare</a>
        <a class="passive" href="../AboutUs.php">About Us</a>
  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    	<i class="fa fa-bars"></i>
  		</a>
</div>

    <section class="container">

        <div class="containerleft">
            <p><?php
                echo "MODERN";
                echo "<br>";
                echo "<br>";
                echo $modern;
                ?></p>
        </div>

        <div class="containerright">
            <p><?php 
                echo "AYURVEDIC";
                echo "<br>";
                echo "<br>";
                echo $ayurvedic;
                ?></p>
        </div>
    </section>

    <div class="containerinfo">
            <p><?php
                    if($html->find('div.mw-parser-output', 0)->innertext)
                    {
                        echo "MODERN";
                        echo "<br>";
                     echo $html->find('div.mw-parser-output', 0)->innertext;
                    }
                    else
                    {   
                        echo "NOT FOUND";
                    }
            ?></p>
        </div>
    <script src="https://kit.fontawesome.com/529bc31be0.js" crossorigin="anonymous"></script>

</body>
</html>