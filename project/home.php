<!DOCTYPE html>
<html lang="en">
<head>
<title>HMS-home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="mainp.css">
<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
<link rel="stylesheet" href="maincss.css">
<style>

h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
.half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.half img:hover{opacity:1}
body{background-image:url(cloud.jfif);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%;font-family: "Poppins", sans-serif;font-size:16px;}

</style><style>
	/*float cancel and signup buttons and add an equal width*/
	.cancelbtn,
	.signupbtn {
		float: left;
		width: 50%
	}
	/*add padding to container elements*/
	.container {
		padding: 16px;
	}
	/*define the modal’s background*/
	
	.modal {
		display: none;
		position:fixed;
		z-index: 1;
		right: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.4);
		padding-right:80px;
	}
	/*define the modal-content background*/
	
	.modal-content {
		background-color: #fefefe;
		margin: 1% auto 5% auto;
		border: 1px solid #888;
		width: 100%;
	}
	/*define the close button*/
	
	.close {
		position: absolute;
		right: 290px;
		top: 90px;
		color: #fffsss;
		font-size: 40px;
		font-weight: bold;
	}
	/*define the close hover and focus effects*/
	
	.close:hover,
	.close:focus {
		color: red;
		cursor: pointer;
	}
	
	.clearfix::after {
		content: "";
		clear: both;
		display: table;
	}
	
	@media screen and (max-width: 300px) {
		.cancelbtn,
		.signupbtn {
			width: 100%;
		}
	}
#btnn{
    border-radius: 5px !important;
    color: #fff;
    font-size: 16px;
    background: #77c043;
    padding: 1px;
    border: 0;
    min-width: 100px;
    transition: 1s all ease;}
</style>

</head>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<a class="w3-bar-item w3-padding-large"><i><b  style="color:blue">HMS</b></i></a>   
 <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#services"  class="w3-bar-item w3-button w3-padding-large w3-hide-small">Facilities</a> 
    <a href="#packages"  class="w3-bar-item w3-button w3-padding-large w3-hide-small">Rules</a> 
    <a href="#designers" class="w3-bar-item w3-button w3-padding-large w3-hide-small">feestructure</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" id="stlhi2" onclick="document.getElementById('stulogin').style.display='block'" style="width:auto;" class="w3-bar-item w3-button">Student signin</a>

      
        <a href="#" onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button">register</a>
      </div>
    </div>
    <a href="#" a href="#" onclick="document.getElementById('admm').style.display='block'" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Admin</i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:20px;margin-bottom:20px" id="showcase">
    <h1 class="w3-jumbo"><b>Hostels</b></h1><a href="#" onclick="document.getElementById('admm').style.display='block'" style="float:right">Admin</a>
    <h1 class="w3-xxxlarge w3-text-red"><b>View</b></h1>
    <hr style="width:190px;border:3px solid #fa004b" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding" style="padding:20px">
      <img src="hostel.jpg" style="width:100%" onclick="onClick(this)" alt="hostle"><br><br>
    <div class="w3-half">
      <img src="room.jpg" style="width:100%;height:300px" onclick="onClick(this)" alt="main"><br><br>
      <img src="mess.jpg" style="width:100%;height:300px" onclick="onClick(this)" alt="mess">
    </div>

    <div class="w3-half">
      <img src="rooms.jpg" style="width:100%;height:300px" onclick="onClick(this)" alt="Rooms"><br><br>
      <img src="clinic.jpg" style="width:100%;height:300px" onclick="onClick(this)" alt="clinic">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Facilities -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Facilities</b></h1>
    <hr style="width:190px;border:3px solid #fa004b" class="w3-round">
<div  >
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p> Exclusive uninterrupted study room for students after college hours</p>
<p> Uninterrupted power supply, separate Generator for Students</p>
<p>Medical facility available with free medicines provided to sick students</p>
<p>Mineral water provided to all the rooms.</p>
<p>Internet Facility</p>
<p>Security</td></p>
<p>Laundry facility available</p></div>
  </div>
  
  <!-- Rules -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Rules</b></h1>
    <hr style="width:190px;border:3px solid #fa004b" class="w3-round">
<div>

<div  class="html_button btn-left" style="width:20%; float:left;">
<button id="yg" class="btn ocean large">year guidence</button><br><br>
<button id="adm" class="btn ocean large">admission</button><br><br>
<button id="dp" class="btn ocean large">disciplane policy</button>
</div>

<div style="float:right; width:80%; background-color:#00FFFF;color:#011F5B; border-radius:25px">
<table id="p1" style="display:none;padding:20px;">
<tr><td>Students have to pay one month fee and an admission fee of Rs.5,000/- (for the students who are coming for new admission) at the time of hostel allotment.
</td></tr><td>Students who want to stay in the hostel shall submit their parents' consent that there is no objection to the parents for their wards' stay in the hostel.
</td></tr><tr><td>Hostel stay duration, hostel block and room allotted will be for a temporary period.
</td></tr><tr><td>Every student who wants to stay in the hostel shall bring his/her own mattress, pillow, bedsheets, bucket and mugs for his/her own use. Beds only will be provided in the room.
</td></tr><tr><td>After payment of the hostel fee only, temporary hostel admission will be given and room will be allotted to check-in.
</td></tr><tr><td>Students must wear masks and follow social distancing while in the college as well as in the hostel campus and messes.
</td></tr><tr><td>All Covid-19 precautionary steps are being followed at the entrance of the campus, college, library, hostels, messes, etc. and students and parents shall cooperate with the college / hostel / security staff in this regard.
</td></tr><tr><td>For the first time, parents shall come to the college along with the students who want to stay in the campus hostel. They should bring passport size color photos and aadhar cards of the students and parents.
</td></tr></table>

<table id="p2" style="display:none;padding:20px;">
<tr><td> Admission to the Hostel shall be made in the prescribed form, which can be had from the Hostel Office, along with prospectus.
</td></tr><tr><td>The Warden reserves the right to effect any changes that may be felt necessary in routine matters of the Hostel.
</td></tr><tr><td>The students should acquaint themselves thoroughly with the Rules and Regulations of the Hostel before seeking admission.
</td></tr><tr><td>The Hostel Committee reserves the right to admit or reject a candidate without assigning any reasons and to expect any student, if found not amenable to discipline.
</td></tr></table>
<table id="p3" style="display:none;color:black;padding:20px;">
<tr><td>Smoking, Alcohol & Narcotic consumption is strictly prohibited in and around the Hostel premises. Strict action will be taken against offenders.
</td></tr><tr><td>Strict adherence to the prescribed dress code is required. Decency in dressing & demeanor is a must.
</td></tr><tr><td>Loitering in the Hostel campus during the class hours will not be appreciated.
</td></tr><tr><td>The Management & Staff will not be responsible for personal belongings.
</td></tr><tr><td>Late comers will be penalized.
</td></tr><tr><td>Students must keep the Campus & Rooms clean. Defacing walls, equipment, furniture etc., is strictly prohibited.
</td></tr><tr><td>Birthday/Other Celebrations are strictly prohibited in Hostel.
</td></tr><tr><td>Students must turn off all the electrical equipments & lights before leaving their rooms.
</td></tr><tr><td>Students are not allowed to use electric stoves, heaters etc in rooms except in designated places.
</td></tr><tr><td>Students are not allowed to organize any group activities in their room.</td></tr></table>
</div>

<script>
$(document).ready(function(){

$("#yg").click(function(){
$("#p1").slideToggle();
$("#p2").hide();
$("#p3").hide();
});

$("#adm").click(function(){
$("#p2").slideToggle();
$("#p1").hide();
$("#p3").hide();
});

$("#dp").click(function(){
$("#p3").slideToggle();
$("#p2").hide();
$("#p1").hide();
});

});
</script>
</div>
  </div>
  
  <!-- fee-->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Fee structure</b></h1>
    <hr style="width:190px;border:3px solid #fa004b" class="w3-round">
 <p align="justify" id="sty">With a key focus on developing a self-sustained residential campus, Hostel facility is provided with separate accommodation for Male and Female students.
College has a girls hostel inside the campus. Boys hostel is located outside the campus and is being maintained on lease basis.
Ideal hostel facility with homely atmosphere is provided within the campus. Many recreation facilities are also provided.

</p>
<h2>Hostle Fee particulars:</h2>

<center>
<?php
$bn=1;
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$du=mysqli_query($c,"select * from rooms");
echo "<table border=2 cellspacing=2 cellpadding=6 width=97%>";
echo "<tr style='color:white;background-color:brown'>
<th rowspan=2 colspan=1>s.no</th>
<th rowspan=2 colspan=1>Type</th>
<th rowspan=2>single installment</th><th>2 installents</th><th rowspan=1 colspan=2>8 installments</th><th rowspan=2>one sem</th>
</tr>
<tr style='color:white;background-color:brown'>
<th>per installment fee</th><th>1st installment fee</th><th>per each of 2-8 installents fee</th>
</tr><tbody bgcolor='#E9967A'>";

while($r=mysqli_fetch_array($du))
{
echo "<tr><b>";
echo "<td>".$bn."</td>";
echo "<td>".$r['type']."</td>";
echo "<td>".$r['sin']."</td>";
echo "<td>".$r['dou']."</td>";
echo "<td>".$r['m1']."</td>";
echo "<td>".$r['m2']."</td>";
echo "<td>".$r['onesem']."</td>";
echo "</tr></b>";

$bn+=1;
}echo "</tbody></table>"
?>
</center>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
<div>

<div  class="html_button btn-left" style="width:50%; float:left;">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
  <p>contact us for further details:</p>
<p>787898981</p> <p>324354657</p> 
</div>

<div style="float:right; width:50%;">
    <h1 class="w3-xxxlarge w3-text-red"><b>Registration:</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
<a href="#contact" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">register Now</a>
</div>

</div>
  </div>

<!-- End page content -->
</div>
<!--registration-->
<div id="id01"  class="modal">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
		
		<form  action="stureg.php" method="POST">
<div ><center>
<h1 style='color:#fff;padding-top:70px' >STUDENT REGISTRATION FORM</h1>
<table cellspacing="2" align="center" cellpadding="9" border="1px" style=' background-color:#00FFFF;color:#011F5B;background-image:url(cloud.jfif);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%; border-radius:15px'>
<tr><td>student ID</td>
<td><input type="text" placeholder="enter ID" name="pin"/></td>
</tr>
<tr><td>name</td>
<td><input type="text" placeholder="enter name" name="nm"/></td>
</tr>
<tr><td>course</td>
<td><input type="text" placeholder="enter course" name="cs"/></td>
</tr>
<tr><td>address</td>
<td><input type="text" placeholder="enter permanent address" name="add"/></td>
</tr>
<tr><td>phone number</td>
<td><input type="number" placeholder="enter phone number" name="phn"/></td>
</tr>
<tr><td>email</td>
<td><input type="email" placeholder="enter your mail id" name="ei"/></td>
</tr>
<tr><td></td>
<td>
<button type="submit" style="float:right" id="btnn" >submit</button></td>
</tr>
</table>

</center>
</div>
</form>
	</div>
<!--admin login-->
<div id="admm"  class="modal">
		<span onclick="document.getElementById('admm').style.display='none'" class="close" title="Close Modal">×</span>
		

<form action="adlogin.php" method="POST">
<div id="admin" style="margin:100px; border-radius:25px"  align="center">
<h1 style="color:#fff">Admin Login</h1>
<table cellpadding="12" border="ipx" style="background-image:url(cloud.jfif);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%; color:#000; border-radius:25px" >
<tr><td>User name</td>
<td><input type="text" name="au" placeholder="enter username" id="au"/></td>
</tr>
<tr><td>password</td>
<td><input type="password" name="ap" placeholder="enter password" id="ap"/></td>
</tr>
<tr><td></td>
<td><button id="btnn">login</button></td>
</tr>
</table>
</div>
</form>
	</div>

<!--student login-->

<div id="stulogin"  class="modal">
		<span onclick="document.getElementById('stulogin').style.display='none'" class="close" title="Close Modal">×</span>

<div style="margin:100px;border-radius:25px;">
<center><h1 style="color:#fff">student signin:</h1>
<form  action="stlogin.php"  method="POST">
<table align="center" style="background-image:url(cloud.jfif);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%; color:#000;border-radius:25px;" cellpadding="15">
<tr><td>User name:</td>
<td><input type="text" name="su"  style="width:130px;height:25px"/></td>
</tr>
<tr><td>password:</td>
<td><input type="password"name="sp"  style="width:130px;height:25px"/></td>
</tr>
<tr><td></td>
<td><button id="btnn">login</button></td>
</tr>
</table>
</form>
</center></div></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
<!--registration-->
<script>
		var modal = document.getElementById('id01');

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
<!--admlogin-->
<script>
		var modal = document.getElementById('admm');

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
<!--stulogin-->
<script>
		var modal = document.getElementById('stulogin');

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>
</html>
