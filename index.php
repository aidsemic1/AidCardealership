<!DOCTYPE html>
<html>
<head>
	<title>Car Dealership</title>
 <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style>
    body{background-color: GhostWhite;}
   
    div.background {
        height:100%;
        width:100%;
        background-size: auto;
        background-image: url('background.jpg');
        position:absolute;
        top:0;
        right:0;
        bottom:0;
        left:0;
        overflow-x: hidden;
        overflow-y: hidden;}

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
    	top: 10px;
    	left: 195px;}

    div.home{
    	position: absolute;
    	top: 0px;
    	left: 500px;}

    div.aboutus{
    	position: absolute;
    	top: 0px;
    	left: 590px;}

    div.contact{
    	position: absolute;
    	top: 0px;
    	left: 710px;}

    div.dropdown{
    	position: absolute;
    	top: 6px;
    	left: 818px;}

    div.card{
    	position: absolute;
    	top: 130px;
    	left: 180px;}

    div.card2{
    	position: absolute;
    	top: 130px;
    	left: 750px;}
   
    div.colorbox{
      width: 100%;
      height: 250px;
      background-color: gold;
      position: absolute;
      top: 530px;
      left: 0px;}

    div.wv{
    	position: absolute;
    	top: 535px;
    	left: 20px;}

    div.audi{
    	position: absolute;
    	top: 535px;
    	left: 110px;}

    div.bmw{
    	position: absolute;
    	top: 535px;
    	left: 220px;}

    div.mercedes{
    	position: absolute;
    	top: 535px;
    	left: 310px;}

    div.porsche{
    	position: absolute;
    	top: 535px;
    	left: 400px;}

    div.toyota{
    	position: absolute;
    	top: 535px;
    	left: 500px;}

    div.peugeot{
    	position: absolute;
    	top: 535px;
    	left: 600px;}

    div.landrover{
    	position: absolute;
    	top: 535px;
    	left: 690px;}

    div.hyundai{
    	position: absolute;
    	top: 530px;
    	left: 800px;}

    div.ford{
    	position: absolute;
    	top: 535px;
    	left: 930px;}

    div.renault{
    	position: absolute;
    	top: 522px;
    	left: 1050px;}

    div.chevrolet{
    	position: absolute;
    	top: 535px;
    	left: 1150px;}

    div.quality{
    	position: absolute;
    	top: 5px;
    	left: 1080px;}
    
</style>
<meta charset="utf-8">
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

<div class="card" style="width: 20rem;">
  <img src="sale.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Black Friday super sale!</h5>
    <p class="card-text">Take adventage of our Black Friday super sale 13.12.2019. - 15.12.2019., up to 50% lower prices!</p>
  </div>
</div>

<div class="card card2" style="width: 20rem;">
  <img src="toyotasale.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Christmas super sale!</h5>
    <p class="card-text">Take adventage of our Christmas super sale 23.12.2019. - 25.12.2019., up to 15% lower prices on Toyota vehicles!</p>
  </div>
</div>

<div class="colorbox" style="opacity: 0.7;">
</div>

<div class="wv">
	<img src="wvlogo.png" width="70" height="70">
</div>

<div class="audi">
	<img src="audilogo.png" width="90" height="70">
</div>

<div class="bmw">
	<img src="bmwlogo.png" width="70" height="70">
</div>

<div class="mercedes">
	<img src="mercedeslogo.png" width="70" height="70">
</div>

<div class="porsche">
	<img src="porschelogo.png" width="90" height="70">
</div>

<div class="toyota">
	<img src="toyotalogo.png" height="70" width="90">
</div>

<div class="peugeot">
	<img src="peugeot logo.png" height="70" width="70">
</div>

<div class="landrover">
	<img src="lrlogo.png" height="70" width="110">
</div>

<div class="hyundai">
	<img src="hyundailogo.png" height="80" width="130">
</div>

<div class="ford">
	<img src="fordlogo.png" height="70" width="115">
</div>

<div class="renault">
	<img src="renaultlogo.png" height="100" width="100">
</div>

<div class="chevrolet">
	<img src="chevroletlogo.png" height="70" width="115">
</div>

<div class="quality">
	<img src="quality.png" height="100" width="90">
</div>

</div>
</body>
</html>