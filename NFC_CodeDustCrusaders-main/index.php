<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Better Ayurveda</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
	<div class="navbar" id="myNav">
		<img class="logo" src="logo.jpeg"/>
		<a href="#Ayurveda" class="Ayurveda">BetterAyurveda</a>
		<input class="search" type="text" placeholder="Search Better Ayurveda">
        <button class="submitbutton" type="submit">Submit</button>
  		<a href="#home" class="active">Home</a>
  		<div class="dropdown">
            <button class="dropbtn">Categories<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a class="Categories" href="#">Link 1</a>
              <a class="Categories" href="#">Link 2</a>
              <a class="Categories" href="#">Link 3</a>
            </div>
        </div>	
  		<a class="passive" href="signup.index.php">LogIn/Register</a>
        <a class="passive" href="#about-us">AboutUs</a>
  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    	<i class="fa fa-bars"></i>
  		</a>
	</div>
	<div class="leftpanel">
		<h1 class="why">Why Ayurveda?</h1>
		<p>>Ayurveda is known for its holistic approach to health and well-being. It considers the physical, mental, emotional, and spiritual aspects of an individual's health and aims to balance them. Conventional medicine often focuses on symptom management and disease treatment, whereas Ayurveda seeks to address the root causes of health issues.</p><br>
		<p>>Ayurvedic practitioners often tailor treatments to the individual's unique constitution (dosha) and health condition. This personalized approach can be appealing to those who prefer a more customized treatment plan.</p><br>
		<p>>Ayurvedic medicines typically use natural ingredients such as herbs, minerals, and plant-based substances. Some people prefer natural remedies and may be concerned about the potential side effects of synthetic drugs.</p><br>
		<!-- <p>>Ayurveda places a strong emphasis on preventive healthcare and maintaining wellness. Many Ayurvedic practices, such as yoga, meditation, and dietary guidelines, are aimed at promoting overall health and preventing illness.</p><br> -->
	</div>
	<div class="rightpanel">
		<div class="alternative">
			<h1 class="finder">Alternative Finder</h1>
			<p>Enter Name of the Medicine : </p>

			<form action="./includes/alternative.inc.php" method="POST">
				<input class="searchfinder" type="text" placeholder="Search" name="modern">
				<button class="alternativefinder" type="submit">Find the Alternative</button>
			</form>

		</div>
		<div class="howitworks">
			<h2>How It Works</h2>
			<div>
				<p>1> Enter the Name of the Medicine.</p>
				<p>2> An Ayurvedic Alternative of that Medicine will be shown.</p>
				<p>3> Click on the Displayed Alternative to get more Information.</p>
			</div>
		</div>
	</div>
	<!-- <footer>
  		Copyright CodeDust Crusaders
	</footer> -->
	<script src="script/script.js"></script>
</body>
</html>
