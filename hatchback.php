<!DOCTYPE html>
<html>
<head>
	<title>Hatchback</title>
 <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
    body{background-color: GhostWhite;}
   
    div.background {
        height:100%;
        width:100%;
        background-size:auto;
        background-image:no-repeat;
        position:absolute;
        top:0;
        right:0;
        bottom:0;
        left:0;
        overflow-x: hidden;}

    div.navbox{
    	position: absolute;
    	height: 60px;
    	width: 100%;
    	top: 0px;
    	left: 0px;
        background-color: gold;}

    div.logo{
    	position: absolute;
    	top: -70px;
    	left: 5px;}

    div.name{
    	position: absolute;
    	top: -2px;
    	left: 195px;}

    div.home{
    	position: absolute;
    	top: -8px;
    	left: 500px;}

    div.aboutus{
    	position: absolute;
    	top: -8px;
    	left: 590px;}

    div.contact{
    	position: absolute;
    	top: -8px;
    	left: 710px;}

    div.dropdown{
    	position: absolute;
    	top: 6px;
    	left: 818px;}

    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}

    div.golfimages{
        position: absolute;
        top: 100px;
        left: 30px;
        width: 450px;
        height: 450px;}

    div.golftext{
        position: absolute;
        top: 130px;
        left: 510px;}

    div.audiimage{
        position: absolute;
        top: 480px;
        left: 30px;
        width: 400px;
        height: 400px;}

    div.auditext{
        position: absolute;
        top: 520px;
        left: 510px;}
   
    div.quality{
      position: absolute;
      top: 5px;
      left: 1080px;}
    
		</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="background">

<div class="navbox">
</div>

<div class="logo">
	<img src="logo.png" height="180" width="210">
</div>

<div class="name">
	<h1 style="font-family: 'Signika', sans-serif; font-size: 38px; font-style: italic; color: black;">Car Dealership</h1>
</div>

<div class="home">
  <h1><a href="index.php" style="text-decoration: none; font-family: 'Signika', sans-serif; font-size: 24px; font-style: italic; color: black;">Home</a></h1>
</div>

<div class="aboutus">
  <h1><a href="aboutus.php"  style="text-decoration: none; font-family: 'Signika', sans-serif; font-size: 24px; font-style: italic; color: black;">About us</a></h1>
</div>

<div class="contact">
  <h1><a href="contact.php"  style="text-decoration: none; font-family: 'Signika', sans-serif; font-size: 24px; font-style: italic; color: black;">Contact</a></h1>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: rgba(0,0,0,0) !important; border-color: gold; color: black; font-family: 'Signika', sans-serif; font-style: italic; font-size: 24px;">
    Cars
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: gold;">
    <a class="dropdown-item" href="hatchback.php">Hatchback</a>
    <a class="dropdown-item" href="limousine.php">Limousine</a>
    <a class="dropdown-item" href="suv.php">SUV</a>
  </div>
</div>

<div class="golfimages">
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="golf1.jpg" style="width:100%">
  <img class="mySlides" src="golf2.jpg" style="width:100%">
  <img class="mySlides" src="golf3.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</div>
</div>

<div class="golftext">
    <p style="font-family: 'Signika', sans-serif; font-size: 20px; font-style: italic; color: black;">Golf 7th generation, made 2015. Inside is 2.0 liter turbo Diesel engine with 150 hrose power and automatic gearbox DSG. It has R-line equipment which include 17 inch ALU wheels and Led front and rear lights. Also sport bumpers at front and back. Inside it has leather sets and leather steering wheel. Also electricly modified seats and heated seats. It has big main display with navigation in it. Other equipment: AC, electric windows, multifuncional steering wheel, black top interior, cruise control, virtual cockpit, USB, AUX and bluethoot connection. Now it is on winter tyre set it also has almost new set of summer tires. It passed 150.000 kilometers till now. 
        <br> <br><strong>PRICE: 13.000 €</strong></p>
</div>

<div class="audiimage">
    <img src="audiimages.png" height="450" width="450">
</div>

<div class="auditext">
    <p style="font-family: 'Signika', sans-serif; font-size: 20px; font-style: italic; color: black;">Audi A3 made in 2011. Inside is first generation of great 1.6 liter turbo Diesel engine with 110 hore power and manual 6-speed manua gear box. It has fornt and rear LED lights and 16 inch ALU wheels. It is metalic white color. Inside it is almost base equpiment it has seats form leather and fabric and mutifuncional steering wheel. Other equpiment is: CD/MP3 audio and radio system, AC, board computer, electric windows and modyfieble seats. It passed 215.000 kilometers.
    <br><br><br><br><br><strong>PRICE: 9.000 €</strong> </p>
</div>

<div class="quality">
  <img src="quality.png" height="100" width="90">
</div>


</div>
</body>
</html>