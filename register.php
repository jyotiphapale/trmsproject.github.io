<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/* Below line is used for online Google font */
@import url(http://fonts.googleapis.com/css?family=Raleway);
body{
    
    
}
sidenav{
    background-color: lightskyblue;
}


h1{
    text-align: center;
    font-family:fantasy;
    font-display: block;
    font-size: 45px;
    color:greenyellow;
}
h2{
background-color: #FEFFED;
padding: 30px 35px;
margin: -10px -50px;
text-align:center;
border-radius: 10px 10px 0 0;
}
hr{
margin: 10px -50px;
border: 0;
border-top: 1px solid #ccc;
margin-bottom: 40px;
}
div.container{
width:50%;
height:50%;
font-family: 'Raleway', sans-serif;
display:table;
    background-size: cover;
    margin-right:500px;

}
#main{
    float: none;
width: 70%;
height:auto;
font-family: 'raleway',sans-serif;
	border-style:solid;
	border-color:lightskyblue;
	border-width:0px;
	margin-left:100%;
	margin-right:0px;
	background-color:aliceblue;
	text-decoration-color: blueviolet;
	    opacity: 1;
	    display:inline-block;
	    
	    
    
}
div.image{
    width: 150%;
    height: 150%;
}

input[type=text],input[type=password],input[type=email],input[type=tel],input[type=number],input[type=submit]{
width: 75%;
height: auto;
padding: 10px;
border: 2px solid #ccc;
color: #4f4f4f;
font-size: 16px;
border-radius: 5px;
float:center;
margin-right:30px;
margin-left:30px;
}
label{
color: #464646;
text-shadow: 0 1px 0 #fff;
font-size: 14px;
font-weight: bold;
margin-right:80px;
margin-left:0px;
}
center{
font-size:32px;
}
.note{
color:red;
}
.valid{
color:green;
}   
.back{
text-decoration: none;

background-color: rgb(0, 214, 255);
padding: 3px 20px;

color: black;
}
input[type=button],input[type=submit]{
font-size: 16px;
background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
border: 1px solid #e5a900;
color: #4E4D4B;
font-weight: bold;
cursor: pointer;
width:75%;
padding: 10px 0;
outline:none;
margin-right:30px;
margin-left:30px;
margin-bottom:20px;

}

fieldset
{
		background-color:aliceblue;
		border-style:none;
		border-width:15px;
		margin-left:300px;
            }
select{
width: 100%;
height: 40px;
padding: 10px;
margin-bottom: 25px;
margin-top: 5px;

color: #4f4f4f;
font-size: 16px;

}
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;



</style>
<meta charset="utf-8">
<script type="text/javascript">
var http=false;
if(navigator.appName=="Microsoft")
{
http=new ActiveXObject("Microsoft.XMLHTTP");
}
else
{
http=new XMLHttpRequest();
}
function validate(username)
{
http.abort();
http.open("GET","validate.php?name="+username,true);
http.onreadystatechange=function()
{
if(http.readyState == 4)
{
document.getElementById('demo').innerHTML=http.responseText;
}
}
http.send(null);
}
</script>    
<title>TRMS: Welcome</title>
</head>  
<body style="background-image: url('img/img6.jpg');background-repeat: no-repeat;background-size:cover;opacity: 1;"> 
<form name="myform" method="POST" action="login.php">
<div class="container">
<div class="main">
<fieldset>
    <h1>TRMS</h1>
<label>Username </label><br>
<input type="text" name="username" id="username" onkeyup="validate(this.value)" required/>
<div id="demo"></div><br>
<label>E-mail Id</label><br>
<input type="email" name="email" id="email" required/><br><br>
<label>Mobile No</label><br>
<input type="tel" name="no" id="no" required/><br><br>
<label>Password</label><br>
<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/><br><br>
<div id="message">
  <br><h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<input type="submit" value="Submit" id="submit" onclick="validatesub()"/>
    </div>
    </div>
</fieldset>
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

      </body>
    </form></html>
