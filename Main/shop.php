<!DOCTYPE html>
<html>
<head>
	<title>De Schepijs Winkel</title> 
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
</head>
<body id="body">
		<script src="jscript.js"></script>
		<?php 
		$servername = "localhost:3306";
		$username = "root";
		$password = "12345";
		
		$conn = new mysqli($servername, $username, $password);
		
		if($conn->connect_error){
			die("Connection failed: " .$conn->connect_error);
		}
		
		echo "Connected succesfully";
		?>
		
		<div id="pageHeader">
			
			<div id="headerText">
				De Schepijs Winkel
			</div>
		</div>
		<div id="menuBalk">
			<button class="menuButton" id="homeButton" onclick = homeButton();>
				Home
			</button>
			<button class="menuButton" id="shopButton" onclick = shopButton(); style="border-width: .1em;">
				Shop
			</button>
			<button class="menuButton" id="contacButton" onclick = contactButton();>
				Contact	
			</button>
			<button class="menuButton" id="loginButton" onclick= loginButton();>
				Login
			</button>
		</div>
		<div id="spacer">

		</div>
		<div id="catHead">
			Categorien:
		</div>
		<div id="categoryContainer">
			<img src="plaatjes/ice-cream.png" class="catImg">
			<img src="plaatjes/ice-cream (1).png" class="catImg">
			<img src="" class="catImg">
			<img src="" class="catImg">
		</div>
</body>
</html>