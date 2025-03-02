<?php
session_start();
$z=$_SESSION['suser'];
?><!DOCTYPE html>
<html lang="en">
<head>
<title>HMS-Admin</title>
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
	background-size:100% 100%;font-family: "Poppins",}
</style>
</head>
<body>

<!-- Sidebar/menu --><script>
$(document).ready(function(){

$("#stlhi2").click(function(){
$("#stlhi").slideToggle();
});
 $("#222").click(function(){
$("#22").slideToggle();
}); 
 $("#333").click(function(){
$("#33").slideToggle();
}); 
});
</script>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<a class="w3-bar-item w3-padding-large"><i><b  style="color:blue">HMS</b></i></a>        
<a id="1" class="w3-bar-item w3-button w3-padding-large">Residents</a>
    <a id="2" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Requests</a>    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Edit_Rooms <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
     
        <a href="#" id="3" class="w3-bar-item w3-button w3-padding-large">Add</a>
        <a href="#"  class="w3-bar-item w3-button w3-padding-large" id="222">Delete</a>
	<a id="22" style="display:none;padding:2px"><form action="deleteroom.php" method="POST">
	<div><input type="text" name="z" placeholder="enter room name/type" /><br>
	<input type="submit" style="float:right;
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    background: #FF0000;
    border: 0;
    transition: 1s all ease;" value="Delete"></div>
	</form></a>
        <a href="#"   id="333" class="w3-bar-item w3-button w3-padding-large">Modify</a>
	<a id="33" style="display:none;paddind:1px"><form action='middle.php' method='POST'>
	<input type="text" placeholder="enter room name" name="z"/><br>
	<button style="float:right;
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    background: #23bbee;
    border: 0;
    transition: 1s all ease;">view</button>
	</form>
	</a>
      </div>
    </div>
    <a id="5" href="#designers" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Room_Details</a>
    <a  href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm" class="w3-bar-item w3-button w3-padding-large w3-hide-small">payments</a> 
    
    <a href="home.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">logout</i></a>
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
<div class="w3-main" style="margin:30px">

  
  <!-- Photo grid (modal) -->
<div id="view">
<center>
<form action='report.php' method='POST'>
<input type="text" placeholder="enter student ID of resident" name="z" style="margin:30px"/>
<button style="
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    border:2px solid green;
    background: #23bbee;
    padding: 4px;
    min-width: 120px;
    transition: 1s all ease;">Report</button>
</form><hr>
<form action='delete.php' method='POST'>
<input type="text" placeholder="enter student ID of resident" name="z" style="margin:30px"/>
<button style="
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    background: #FF0000;
    padding: 5px;
    border: 0;
    min-width: 120px;">Delete</button>
</form><hr>
<?php
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$du=mysqli_query($c,"select * from reqroom WHERE alloted='yes'");
echo "<table border=1 cellpadding=3 style='color:white;background-color:brown;
-webkit-text-size-adjust: 90%;
'>";
echo "<tr>";
echo "<th> Rno </th> <th> Room ID</th><th> Name</th><th>Course</th><th>Address</th><th>Phone.no</th>
<th>EmailID</th><th>UserID</th><th>No.of Installments</th><th>Duration</th>
<th>Mess</th><th>Date of Joining</th><th>report</th><th>fees</th>";
echo "</tr><tbody bgcolor='#fcb79f' style='color:#000;-webkit-text-size-adjust: 90%;'>";
while($r=mysqli_fetch_array($du))
{echo "<tr>";
echo "<td>".$r['pin']."</td>";
echo "<td>".$r['roomid']."</td>";
echo "<td>".$r['n']."</td>";
echo "<td>".$r['co']."</td>";
echo "<td>".$r['ad']."</td>";
echo "<td>".$r['phn']."</td>";
echo "<td>".$r['ei']."</td>";
echo "<td>".$r['usid']."</td>";
echo "<td>".$r['ni']."</td>";
echo "<td>".$r['du']."</td>";
echo "<td>".$r['ms']."</td>";
echo "<td>".$r['dj']."</td>";
echo "<td>".$r['report']."</td>";
echo "<td>".$r['fees']."</td>";
echo "</tr>";
}echo "</tbody></table>"
?>
</center>
</div>


  <!--Requests-->
<div id="book" style="display:none">
  <div class="w3-container" id="showcase" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>requests:</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
<center>
<div style="width:50%;float:right;">
<form action='viewrequest2.php' method='POST'>
<input type="text" placeholder="enter rig no" name="z" style="margin:30px"/>

<button style="
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    background: #23bbee;
    border:2px solid green;
    transition: 1s all ease;">view</button>
</form></div>
<div style="width:50%;float:left;"><?php
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$ab="yes";
$du=mysqli_query($c,"select * from reqroom WHERE alloted='0'");
echo "<table border=1 cellspacing=2 cellpadding=6  style='
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.2);'>";
echo "<tr>";
echo "<th> Rno </th> <th> Name</th>";
echo "</tr>";
while($r=mysqli_fetch_array($du))
{echo "<tr>";
echo "<td>".$r['pin']."</td>";
echo "<td>".$r['n']."</td>";
echo "</tr>";
}
echo "</table>";
?></div>
</center></div>
</div>
  
<!--Add room-->
<div class="w3-container" id="services" style="margin-top:75px;display:none">
    <h1 class="w3-xxxlarge w3-text-red"><b>Enter room details:</b></h1>
    <hr style="width:50px;border:5px solid #005f69" class="w3-round">
<center>
<div>
<form action="addaroom.php" method="POST">
<table border=1 cellspacing=2 cellpadding=6  style="
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.1);">
<tr><td>room type:</td>
<td><input type="text" name="tyrm" placeholder="room name"/></td></tr>
<tr><td>no.of rooms:</td>
<td><input type="number" name="nor"/></td></tr>
<tr><td>Academic year Fees as per installments:</td>
<td></td></tr>
<tr><td>single installment</td>
<td><input type="number" name="sif" placeholder="single installment fee"/></td></tr>
<tr><td>2 installments:</td>
<td><input type="number" name="dif" placeholder="enter fee per installment"/></td></tr>
<tr><td>8 installments:</td>
<td width=100px><input type="number" name="mif" placeholder="enter fee of 1st installment"/><br>
<input type="number" name="mif2" placeholder="enter fee per each of 2-8 installments"/></td></tr>
<tr><td>fee or single sem:</td>
<td><input type="number" name="ons" placeholder="enter fee for single semister"/></td></tr>
<tr><td></td>
<td><input type="submit" style="
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    border:2px solid green;
    background: #23bbee;
    padding: 5px;
    min-width: 150px;
    transition: 1s all ease;"/><tr>
</table>
</form>
</div></center>
 </div>
  
<!-- room details -->
<div class="w3-container" id="designers" style="margin-top:75px;display:none">
<h1 class="w3-xxxlarge w3-text-red"><b>Room details:</b></h1>
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
echo "<table border=2 cellspacing=2 width=87%>";
echo "<tr style='color:white;background-color:brown'>
<th rowspan=3 colspan=1>s.no</th>
<th rowspan=3 colspan=1>Type</th>
<th rowspan=3 colspan=1>total rooms</th>
<th rowspan=3 colspan=1>available rooms</th>
<th rowspan=1 colspan=5>Fees</th>
</tr>
<tr style='color:white;background-color:brown' height=40px><th rowspan=2>single installment</th><th>2 installents</th><th rowspan=1 colspan=2>8 installments</th><th rowspan=2>one sem</th>
</tr>
<tr style='color:white;background-color:brown'>
<th>per installment</th><th>1st installment</th><th>per each of 2-8 installents</th>
</tr>";

while($r=mysqli_fetch_array($du))
{
echo "<tbody bgcolor='#fcb79f'><tr>";
echo "<td>".$bn."</td>";
echo "<td>".$r['type']."</td>";
echo "<td>".$r['noofrooms1']."</td>";
echo "<td>".$r['noofrooms']."</td>";
echo "<td>".$r['sin']."</td>";
echo "<td>".$r['dou']."</td>";
echo "<td>".$r['m1']."</td>";
echo "<td>".$r['m2']."</td>";
echo "<td>".$r['onesem']."</td>";
echo "</tr></tbody>";

$bn+=1;
}echo "</table>"
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
