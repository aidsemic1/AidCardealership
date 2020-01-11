<!DOCTYPE html>
<html>
<head>
    <title>Limousine</title>
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

    div.bmwimages{
        position: absolute;
        top: 100px;
        left: 30px;
        width: 450px;
        height: 450px;}

    div.bmwtext{
        position: absolute;
        top: 130px;
        left: 510px;}

    div.mercimage{
        position: absolute;
        top: 480px;
        left: 30px;
        width: 400px;
        height: 400px;}

    div.merctext{
        position: absolute;
        top: 490px;
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

<div class="bmwimages">
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="bmw1.png" style="width:100%">
  <img class="mySlides" src="bmw2.png" style="width:100%">
  <img class="mySlides" src="bmw3.png" style="width:100%">
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

<div class="bmwtext">
    <p style="font-family: 'Signika', sans-serif; font-size: 20px; font-style: italic; color: black;">BMW 5 series made in 2018. It is 540i x-drive which means that it petrol engine with 300 horse power and all wheel drive system. It has 17 inch ALU wheels It gives very good driving expirience but also other passengers will have great time in this car. It has all latest and the best BMW equipment like LED lights, black top, automatic gearbox, cruise control, infotament system, virtual cockpit, leather interior adaptable seats and electric control of almost everything in a car. It has sport mode of driving which is not recomendable for city roads. It passed 105.000 kilometers.
        <br><br><strong>PRICE: 48.500 €</strong></p>
</div>

<div class="mercimage">
    <img src="mercedeseclass.jpeg" height="350" width="450">
</div>

<div class="merctext">
    <p style="font-family: 'Signika', sans-serif; font-size: 18px; font-style: italic; color: black;">Mercedes E-Class made in 2017. It it E350d 4MATIC type of engine, what means that is insie 3.0 liter turbo Diesel engine with 313 horse power and 4 wheel drive system. It has the latest Mercedes technology. Outside of car is metallic silver with 18 inch ALU wheels and LED matrix fornt and rear lights. Inside of this car is amazing. It has all equipment that you ever could need. It has new generation Mercedes driving infotament system on two separate screens with allmost hundred of options and vioce control. Also you have standard equipment like A/C, cruise control, electric windows, board computer, leather steering wheel, all types of mobile connection. In additional it has fully adapted seats with cooling, heating and massage inside. Fully adapted last row seats for long rides. Also there is a glass top which gives you great feel while driving. It passed 87.000 kilometers.
    <br><br><strong>PRICE: 55.000 €</strong> </p>
</div>

<div class="quality">
    <img src="quality.png" height="100" width="90">
</div>


</div>
</body>
</html>