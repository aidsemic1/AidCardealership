<?php
$nameError = $emailError  = "";
$db = mysqli_connect('localhost', 'root', '', 'cardealership');

if (isset($_POST['submit'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];  
  $message = $_POST['message'];
  
 

  if (empty($_POST["name"])) {
    $usernameError = "Name is required!";
  } 
  if (empty($_POST["email"])) {
    $emailError = "Email is required!";
  } 

  if (empty($usernameError) && empty($emailError)) {

    $query = "INSERT INTO contact (name, email, subject, message) 
          VALUES('$name', '$email', '$subject', '$message')";
    mysqli_query($db, $query);
    header('location: index.php');
  }
  else {
 
  }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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

    div.quality{
        position: absolute;
        top: 5px;
        left: 1080px;} 

    div.contactmeform{
        position: absolute;
        top: 190px;
        left: 370px;}

      div.contacttext{
        position: absolute;
        top: -110px;
        left: -140px;
        width: 800px;
        background-color: rgba(255,255,255,0.5);
        border-radius: 5px;}

      div.submitbuttonsend{
        position: absolute;
        top: 320px;
        left: 210px;}

      div.contactimage{
        position: absolute;
        top: 85px;
        left: 875px;}

      div.addtext{
        position: absolute;
        top: 260px;
        left: 595px;} 

      div.que{
        position: absolute;
        top: 220px;
        left: 85px;} 

      div.deal{
        position: absolute;
        top: 220px;
        left: 950px;}
    
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

<div class="quality">
    <img src="quality.png" height="100" width="90">
</div>

<div class="contactmeform">
<form action="contact.php" method="POST" id="signup-form" class="signup-form">
  <div class="contacttext">
<h2 class="form-title" style="font-family: 'Signika', sans-serif; font-size: 22px; font-style: italic; color: black; text-align: center;">Are you intrested in car you saw on our webpage? Are you intrested in some specific car you want us to find for you? You wanna test drive? Or you have any other question, just aks us! We will respond in shortest time posible.</h2>
</div>

<div class="form-group">
<input type="text" class="form-input" name="name" id="name" style="font-family: 'Signika', sans-serif; font-size: 22px; font-style: italic; color: black; text-align: center; border-radius: 5px; height: 35px; width: 350px;" placeholder="Your Name" />
<span class="error1" style="color: red;font-size: 15px;position: absolute;left: 340px;top: 120px;"><?php echo $nameError;?></span>
</div>
<div class="form-group">
<input type="text" class="form-input" name="email" id="email" style="font-family: 'Signika', sans-serif; font-size: 22px; font-style: italic; color: black; text-align: center; border-radius: 5px; height: 35px; width: 350px;" placeholder="Your Email" />
<span class="error1" style="width:150px;color: red;font-size: 15px;position: absolute;left: 350px;top: 340px;"><?php echo $emailError;?></span>
</div>
<div class="form-group">
<input type="text" class="form-input" name="subject" id="subject" style="font-family: 'Signika', sans-serif; font-size: 22px; font-style: italic; color: black; text-align: center; border-radius: 5px; height: 35px; width: 350px;" placeholder="Subject" />
</div>
<div class="form-group">
<input type="text" class="form-input" name="message" style="color: #999;height: 150px; width: 500px; font-family: 'Signika', sans-serif; font-size: 22px; font-style: italic; color: black; text-align: center; border-radius: 5px; border-radius: 5px;" placeholder="Message" />
</div>

<div class="submitbuttonsend">
<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" style="font-family: 'Sulphur Point', sans-serif; color: black; font-size: 18px; text-align: center; border-radius: 10px;" value="Submit" />
</div>
</div>
</form>
</div>

<div class="que">
    <img src="questionnaire.png" height="200" width="185">
</div>

<div class="deal">
    <img src="deal.png" height="200" width="220">
</div>


</div>
</body>
</html>