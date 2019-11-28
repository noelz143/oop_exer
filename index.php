<!DOCTYPE html>
<html>
<head>
	<title>Cars</title>
</head>
<style>
	
	body{
		background: url(car4.jpg);
		background-position: center;
		background-size: cover;
	}
	h1{
		color: #ff3393;
		font-family: courier
	}
	h2{
		color: #ff5e33;
		font-family: sans-serif;
	}
</style>
<body >
<center>
		<marquee><h1 style="color: blue;font-family: courier"> NOEL DE RAMOS</h1></marquee>
<?php 

		class vehicle{
			// declaring member variable here
			var $type;
			var $fuel;
			var $capacity;
			var $speed;
			// declaring member functions

			function setType($type){
				$this->type = $type;

			}
			function getType(){
				echo"<h1>Vehicle type: $this->type.<br/></h1>";
			}
			function setFuel($fuel){
				$this->fuel = $fuel;
			}
			function getFuel(){
				echo "<h2>Fuel type: $this->fuel.</h2> ";

			}
			function setCap($cap){
				$this->cap = $cap;
			}
			function getCap(){
				echo "<h2>Capacity : $this->cap. </h2>";
			}
			function setSpeed($speed){
				$this->speed = $speed;
			}
			function getSpeed(){
				echo "<h2>Speed $this->speed km/hr.<br> <br></h2>";
			}

		
		}
		$type = new vehicle ();
		$type-> setType("jeep");
		$type-> getType();

		$type = new vehicle ();
		$type-> setFuel("Diesel");
		$type-> getFuel();

		$type = new vehicle ();
		$type-> setCap(30);
		$type-> getCap();

		$type = new vehicle ();
		$type-> setSpeed(300);
		$type-> getSpeed();
		
		$type = new vehicle ();
		$type-> setType("Taxi");
		$type-> getType();

		$type = new vehicle ();
		$type-> setFuel("Diesel");
		$type-> getFuel();

		$type = new vehicle ();
		$type-> setCap(5);
		$type-> getCap();

		$type = new vehicle ();
		$type-> setSpeed(100);
		$type-> getSpeed();
		
		
		

?></center>
</body>
</html>
