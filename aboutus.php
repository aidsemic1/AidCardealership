<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
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
        background-image: url('gif.gif');
        position:absolute;
        top:0;
        right:0;
        bottom:0;
        left:0;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
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

    div.dealershippic{
        position: absolute;
        top: 150px;
        left: 20px;}
    
    div.textaboutus{
        position: absolute;
        top: 150px;
        left: 640px;
        width: 625px;
        background-color: rgba(255,255,255,0.5);
        border-radius: 5px;}
    
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

<div class="dealershippic">
    <img src="dealership.jpg" width="600" height="350" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
</div>

<div class="textaboutus">
<p style="font-style: italic; font-size: 18px; text-align: center; font-family: 'Signika', sans-serif;">The our team in Sarajevo would like to welcome you to our dealership in Ilidža, where we’re confident you’ll find the vehicles you’re looking for at a price you can afford. Come and check out our full selection of vehicles, or get a great deal on a reliable pre-owned model. No matter which vehicle you decide on, our professional finance team will help you get settled with a competitive financing or lease plan.

When you’re looking for quality auto maintenance and repairs near Sarajevo, you can always count on the professional technicians in our service department as well, where we handle everything from oil changes and filter replacements to powertrain and drivetrain repairs. Schedule an appointment today, or purchase parts from us to handle maintenance and repairs on your own!

Lots of folks in Sarajevo count on the high-quality vehicles and services, and we look forward to living up to our reputation every day. Stop in and see us today, or contact our staff with any questions!</p>
</div>

<div class="quality">
    <img src="quality.png" height="100" width="90">
</div>


</div>
</body>
</html>