<!DOCTYPE html>
<html>
<head>
    <title>SUV</title>
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

    div.audiimages{
        position: absolute;
        top: 100px;
        left: 30px;
        width: 450px;
        height: 450px;}

    div.auditext{
        position: absolute;
        top: 130px;
        left: 510px;}

    div.rrimage{
        position: absolute;
        top: 480px;
        left: 30px;
        width: 400px;
        height: 400px;}

    div.rrtext{
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

<div class="audiimages">
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="audiq51.jpg" style="width:100%">
  <img class="mySlides" src="audiq52.jpg" style="width:100%">
  <img class="mySlides" src="audiq53.jpg" style="width:100%">
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

<div class="auditext">
    <p style="font-family: 'Signika', sans-serif; font-size: 20px; font-style: italic; color: black;">Audi Q5 is great compromise between offroad vechile and city vechile. Very attractive look with offroad performance. It comes with 3.0 liters turbo diesel engine end quattro drive system combined with s-tronic automatic gearbox. It has air suspension so it is adoptable to terrein you choose to drive. It has full LED lights and 18 inch alu wheels. Inside two displays with audi system, adjustable leather seats, leather interior, glass top, electric control over everything, A/C, cruise control, all types of mobile conectivity and all systems to help driver like road recognision, sensors in fornt and at the back, 360 degree camera arond car etc. It passed 120.000 kilometers.
        <br><br><strong>PRICE: 40.000 €</strong></p>
</div>

<div class="rrimage">
    <img src="rr.png" height="420" width="450">
</div>

<div class="rrtext">
    <p style="font-family: 'Signika', sans-serif; font-size: 20px; font-style: italic; color: black;">Range Rover Evoque 2017 is great Britan sport SUV mostly bought by young people because of its attractive design. It has turbo diesel engine with 190 horse power and all wheel drive with 8-speed automatic gearbox. Equipment: ALU wheels, LED lights, air suspension, cruise controle, virtual cockpit, multifunctional steering wheel, different modes of driving, leather interior, electric control of windows, all types of mobile conectivity, big dispaly, board computer etc. It passed 150.000 kilometers
    <br><br><strong>PRICE: 35.000 €</strong> </p>
</div>

<div class="quality">
    <img src="quality.png" height="100" width="90">
</div>


</div>
</body>
</html>