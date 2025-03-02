<?php
session_start();
?>
<html>
<head>
<title>HMS-modify-room</title>
<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
<link rel="stylesheet" href="main.css">
<style>
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
    transition: 1s all ease;}</style>
</head>

<body style="margin:0px;">
<div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="admin.php" class="w3-bar-item w3-button w3-padding-large">Back</a>
  </div>
</div>
<div style="float:left;margin-left:4%;margin-top:7%;width:47%;">

<?php
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$z=$_SESSION['v1'];
if(empty($z))
{echo("<script LANGUAGE='JavaScript'>
    window.alert('enter room name..');
    window.location.href='admin.php';</script>");
}
$fgg=1;
$du=mysqli_query($c,"select * from rooms");
while($r=mysqli_fetch_array($du)){
if($r['type']==$z)
{
$fgg=9;
}
}
if($fgg!=9)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('room not found');
    window.location.href='admin.php';</script>");
}
$du=mysqli_query($c,"select * from rooms where type='$z'");
if($du)
{
echo "<table border=1 cellspacing=2 cellpadding=6>";
while($r=mysqli_fetch_array($du))
{
echo "<tr><td>type</td>";
echo "<td>".$r['type']."</td></tr>";
$s7=$r['type'];
$_SESSION['vara22']=$s7;
echo "<tr><td>no.of rooms</td>";
echo "<td>".$r['noofrooms1']."</td><td id='1'><button id='btnn'>change</button></td></tr>";
$s6=$r['noofrooms1'];
echo "<tr><td>available rooms</td>";
echo "<td>".$r['noofrooms']."</td><td></td></tr>";
echo "<tr><td>fees</td><td></td><td id=2><button id='btnn'>change</button></td></tr>";
echo "<tr><td>single installment</td>";
echo "<td>".$r['sin']."</td><td></td></tr>";
$s5=$r['sin'];
echo "<tr><td>2 installments </td>";
echo "<td>".$r['dou']."</td><td ></td></tr>";
$s4=$r['dou'];
echo "<tr><td>8 installments </td>";
echo "<td>".$r['m1'];
$s3=$r['m1'];
echo ",    ".$r['m2']."</td><td></td></tr>";
$s2=$r['m2'];
echo "<tr><td>one semister </td>";
echo "<td>".$r['onesem']."</td><td></td></tr>";
$s1=$r['onesem'];
}
echo "</table>";
}

mysqli_close($c);
?>
</div>
<div style="float:right;margin-right:3%;margin-top:7%;width:40%;">
<div id="d1" style="display:none">
<form action="modify3.php" method="POST">
Enter number of rooms you want to add:<br>
<input type="number" name="e"/>
<button style="
    color: #fff;
    border-radius: 3px !important;
    background: #23bbee;">ok</button>
</form></div>

<div id="d2" style="display:none;">
<h2>Enter new fee datails</h2>
<form action="modify4.php" method="POST">
<table border=1 cellspacing=2 cellpadding=6>
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
<td><input type="submit" value="change" style="
    color: #fff;
    border-radius: 3px !important;
    background: #23bbee;"/><tr>
</table>
</form>
</div>
</div>
<script>
$(document).ready(function(){

$("#back").click(function(){
window.location="modify.php";
});
$("#1").click(function(){
$("#d1").fadeToggle();
$("#d2").hide();
});
$("#2").click(function(){
$("#d2").fadeToggle();
$("#d1").hide();
});
});
</script>
</body>
</html>