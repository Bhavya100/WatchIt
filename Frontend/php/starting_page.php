<?php include 'server.php';?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.button {
    background-color: #cc0000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: auto;
    cursor: pointer;
}

.button:hover {background-color: #ff0000}

.button:active {
  background-color: #ff0000;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


#login{
    padding-top: 0px;
    padding-right: 50px;
    
    padding-left: 720px;
    padding-left: 720px;
}
.mySlides {

	padding-left: 0px;
	display:none;}

</style>

</style>
</head>
<body background= "Images\texture2.jpg">
<img src="Images\watchit.png" width=500 height=250>

<div id="login">
  		<button type="submit" class="btn" name="login_user">Login</button>
</div>
&nbsp&nbsp&nbsp
<div class="button">
  	  <button type="submit" class="btn" name="reg_user">Signup</button>
  	</div>

<div class="w3-content w3-section" style="max-width:400px">
  <img class="mySlides w3-animate-right" src="Images\sacredgames.jpg">
  <img class="mySlides w3-animate-right" src="Images\arrow.jpg">
  <img class="mySlides w3-animate-right" src="Images\BBT.jpg">
  <img class="mySlides w3-animate-right" src="Images\breakingbad.jpg">
  <img class="mySlides w3-animate-right" src="Images\ironfist.jpg">
  <img class="mySlides w3-animate-right" src="Images\anatomy.jpg">
  <img class="mySlides w3-animate-right" src="Images\mother.jpg">
  <img class="mySlides w3-animate-right" src="Images\narcos.jpg">
  <img class="mySlides w3-animate-right" src="Images\punisher.jpg">
  <img class="mySlides w3-animate-right" src="Images\prison.jpg">
  <img class="mySlides w3-animate-right" src="Images\sherlock.jpg">
  <img class="mySlides w3-animate-right" src="Images\dexter.jpg">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>

</body>
</html>