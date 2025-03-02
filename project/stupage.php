<?php
session_start();
$z=$_SESSION['suser'];
?><!DOCTYPE html>
<html lang="en">
<head>
<title>HMS-student</title>
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

#btnn{
    border-radius: 5px !important;
    color: #fff;
    font-size: 16px;
    background: #77c043;
    padding: 1px;
    border: 0;
    min-width: 100px;
    transition: 2s all ease;}
</style>
</head>
<body>

<!-- Sidebar/menu --><script>
$(document).ready(function(){

$("#stlhi2").click(function(){
$("#stlhi").slideToggle();
}); 
});
</script>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    
<a class="w3-bar-item w3-padding-large"><i><b  style="color:blue">HMS</b></i></a>    <a id="1" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a id="2" class="w3-bar-item w3-button w3-padding-large w3-hide-small">book</a> 
    <a id="3" class="w3-bar-item w3-button w3-padding-large w3-hide-small">status</a> 
<a id="5" class="w3-bar-item w3-button w3-padding-large w3-hide-small">feestructure</a>
 <a  href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Pay</a> 
    
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    
    <a href="home.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">logout</i></a>
  </div>
</div>




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin:30px">

  
  <!-- Photo grid (modal) -->
<div style='margin-top:90px'>
 <div class="w3-row-padding w3-text-white w3-large" id="view" style="margin-top:40px">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="hostel.jpg" alt="Hostel" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">hostel</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="movie.jpg" alt="projection" style="width:100%;height:200px">
            <span class="w3-display-bottomleft w3-padding">Hostel</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="students.jpg" alt="students" style="width:100%;height:200px">
            <span class="w3-display-bottomleft w3-padding">Walkway</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="mess.jpg" alt="mess" style="width:100%;height:200px">
            <span class="w3-display-bottomleft w3-padding">Canteen</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="sports.jpg" alt="sports" style="width:100%;height:200px">
            <span class="w3-display-bottomleft w3-padding">Rooms</span>
          </div>
        </div>
      </div>
    </div>
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


  <!-- Book-->
<div id="book" style="display:none">
  <div class="w3-container" id="showcase" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Book Now:</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
<div >
 <form action="request.php" method="POST">
<div style="margin:20px;"><center>
<table cellspacing="2" align="center" cellpadding="9" border="2px"  style="background:#E0FFFF;border-radius:10px;">

<tr><td>Type of room</td>
<td><select name="tp">
<option value="NON-AC ROOM WITH COMMON TOILET (4-BED)" selected>NON-AC ROOM WITH COMMON TOILET (4-BED)</option>
<option value="Non A/C Common Toilet (3-bed)" >	Non A/C Common Toilet (3-bed)</option>
<option value="Non A/C attached (3-bed)" >Non A/C attached (3-bed)</option>
<option value="NON-AC ROOM WITH COMMON TOILET  (1-BED)" >NON-AC ROOM WITH COMMON TOILET  (1-BED)</option>
<option value="AC ROOM WITH COMMON  TOILET  (4-BED)" >AC ROOM WITH COMMON  TOILET  (4-BED)</option>
<option value="A/C Common Toilet (3-bed)" >A/C Common Toilet (3-bed)</option>
<option value="AC DELUXE ROOM WITH ATTACHED TOILET WITHOUT STUDY ROOM (3 Bed)" >AC DELUXE ROOM WITH ATTACHED TOILET WITHOUT STUDY ROOM (3 Bed)</option>
<option value="AC DELUXE ROOM WITH ATTACHED TOILET WITH STUDY ROOM (3-BED)" >AC DELUXE ROOM WITH ATTACHED TOILET WITH STUDY ROOM (3-BED)</option>
<option value="A/C attached (2-bed)" > A/C attached (2-bed)</option>
<option value="AC SUPER DELUXE ROOM WITH ATTACHED TOILET  (2-BED)" >AC SUPER DELUXE ROOM WITH ATTACHED TOILET  (2-BED)  </option>
</select>

</td>
</tr>
<tr><td>Installements</td>
<td>
<select name="in">
<option value="one sem">one sem</option>
<option value="single installment" selected>single installment </option>
<option value="2 installements">2 installements  </option>
<option value="8 installements">8 installements  </option>
</select></td>
</tr>
<tr><td>duration</td>
<td>
<input type="radio"  name="d" value="AcademicYear" checked/>AcademicYear<br>
<input type="radio"  name="d" value="Single Semester"/>Single Semester<br>
</td>
</tr>

<tr><td>Mess</td>
<td>
<input type="radio"  name="m" value="vegetarian" checked/>vegetarian<br>
<input type="radio"  name="m" value="Non-vegetarian"/>Non-vegetarian </td>
</tr>
<tr><td>Date Of Joining</td>
<td><input type="date" name="dj"/></td>
</tr>
<tr><td></td>
<td><button id="btnn"/>Book</button></td>
</tr>
</table>

</center>
</div>
</form></div>
  </div></div>
  
<!-- status-->
<div class="w3-container" id="services" style="margin-top:75px;display:none">
    <h1 class="w3-xxxlarge w3-text-red"><b>check your Status:</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
<div>your report and allotment status will be updated within 3days....
<center><h1>Details:                     </h1>
<?php
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$fgg=1;
$du=mysqli_query($c,"select * from reqroom");
while($r=mysqli_fetch_array($du)){
if($r['usid']==$z)
{
$fgg=9;
}
}
if($fgg==9)
{
$du=mysqli_query($c,"select * from reqroom where usid='$z'");
if($du)
{
echo "<table border=1 cellspacing=2 cellpadding=6 style='background-color:rgba(0,0,0,0.1);border-radius:10px;'>";
while($r=mysqli_fetch_array($du))
{echo "<tr>";
echo "<td>student ID</td>";
echo "<td>".$r['pin']."</td></tr>";
echo "<tr><td>name</td>";
echo "<td>".$r['n']."</td></tr>";
echo "<tr><td>course</td>";
echo "<td>".$r['co']."</td></tr>";
echo "<tr><td>address</td>";
echo "<td>".$r['ad']."</td></tr>";
echo "<tr><td>phone.no</td>";
echo "<td>".$r['phn']."</td></tr>";
echo "<tr><td>emailID</td>";
echo "<td>".$r['ei']."</td></tr>";
echo "<tr><td>UserID</td>";
echo "<td>".$r['usid']."</td></tr>";
echo "<tr><td>type of room</td>";
echo "<td>".$r['t']."</td></tr>";
echo "<tr><td>no.of installments</td>";
echo "<td>".$r['ni']."</td></tr>";
echo "<tr><td>Duration</td>";
echo "<td>".$r['du']."</td></tr>";
echo "<tr><td>Mess</td>";
echo "<td>".$r['ms']."</td></tr>";
echo "<tr><td>Date of Joining</td>";
echo "<td>".$r['dj']."</td></tr>";
echo "<tr bgcolor='#E0FFFF'><td>fees</td>";
echo "<td>".$r['fees']."</td></tr>";
echo "<tr bgcolor='#E0FFFF'><td>Allotment</td>";
echo "<td>".$r['alloted']."</td></tr>";
echo "<tr bgcolor='#E0FFFF'><td>Room ID</td>";
echo "<td>".$r['roomid']."</td></tr>";
echo "<tr><td>Report</td>";
echo "<td>".$r['report']."</td></tr>";
echo "</table>";
}
}
}
else{

echo "<h2>book your room............</h2>";
}
?>
</center>

</div>
 </div>
  
  <!-- Fee structure -->
  <div class="w3-container" id="designers" style="display:none;margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Fee structure</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
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
</tr>
<tbody bgcolor='#E9967A'>";

while($r=mysqli_fetch_array($du))
{
echo "<tr>";
echo "<td>".$bn."</td>";
echo "<td>".$r['type']."</td>";
echo "<td>".$r['sin']."</td>";
echo "<td>".$r['dou']."</td>";
echo "<td>".$r['m1']."</td>";
echo "<td>".$r['m2']."</td>";
echo "<td>".$r['onesem']."</td>";
echo "</tr>";

$bn+=1;
}echo "</tbody></table>"
?>
</center>
  </div>
<hr>
  <!-- Contact -->
  <div class="w3-container" id="contact">
<div>

<div  class="html_button btn-left" style="width:50%; float:left;">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
  <p>contact us for further details:</p>
<p>787898981</p> <p>324354657</p> 
</div>

  </div>
<!-- End page content -->
</div>



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

<script>
$(document).ready(function(){

$("#1").click(function(){
$("#view").show();
$("#services").hide();
$("#designers").hide();
$("#book").hide();
});
$("#2").click(function(){
$("#book").show();
$("#services").hide();
$("#designers").hide();
$("#view").hide();
});
$("#3").click(function(){
$("#services").show();
$("#designers").hide();
$("#view").hide();
$("#book").hide();
});
$("#5").click(function(){
$("#designers").show();
$("#view").hide();
$("#services").hide();
$("#book").hide();
});

});
</script>
</body>
</html>
