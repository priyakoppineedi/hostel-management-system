<?php
session_start();
?>
<html>
<head>
<title>bvcits-hostel-accomodation</title>
<link rel="stylesheet" href="main.css">
<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
<link rel="stylesheet" href="maincss.css">
<style>body{background-image:url(cloud.jfif);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%;font-family: "Poppins", sans-serif;font-size:16px;}</style>
</head>
<body style="margin:0px;">
<div class="top">
<a href="admin.php" class="w3-bar-item w3-button w3-padding-large" style="color:#fff">Back</a>
    
</div>

<div>
<div style="padding-top:40px;width:60%;float:left;">
<h1 style="padding-left:60px;">Details:</h1>
<center>
<?php
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$z=$_POST['z'];

$fgg=1;
$du=mysqli_query($c,"select * from reqroom");
while($r=mysqli_fetch_array($du)){
if($r['pin']==$z)
{
$fgg=9;
}
}
if($fgg!=9)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('not found....');
    window.location.href='admin.php';</script>");
}
else
$du=mysqli_query($c,"select * from reqroom where pin='$z'");
if($du)
{
echo "<table border=1 cellspacing=2 cellpadding=6 
		margin:10px'>";

while($r=mysqli_fetch_array($du))
{echo "<tr>";
echo "<td>Reg.no</td><td>".$r['pin']."</td></tr>";
$vc=$r['pin'];
$_SESSION['var6name']=$vc;
echo "<tr><td> Name</td><td>".$r['n']."</td></tr>";
echo "<tr><td>Course</td><td>".$r['co']."</td></tr>";
echo "<tr><td>Address</td><td>".$r['ad']."</td></tr>";
echo "<tr><td>Phone.no</td><td>".$r['phn']."</td></tr>";
echo "<tr><td>EmailID</td><td>".$r['ei']."</td></tr>";
echo "<tr><td>UserID</td><td>".$r['usid']."</td></tr>";
echo "<tr style='background-color:#ffeb3b'><td>Type of Room</td><td>".$r['t']."</td></tr>";
$mc=$r['t'];
$_SESSION['var5name']=$mc;
echo "<tr style='background-color:#ffeb3b'><td>No.of Installments</td><td>".$r['ni']."</td></tr>";
$bhn=$r['ni'];
$_SESSION['vara4']=$bhn;
echo "<tr style='background-color:#ffeb3b'><td>Duration</td><td>".$r['du']."</td></tr>";
echo "<tr style='background-color:#ffeb3b'><td>Mess</td><td>".$r['ms']."</td></tr>";
echo "<tr style='background-color:#ffeb3b'><td>Date of Joining</td><td>".$r['dj']."</td>";
echo "</tr>";
echo "</table>";
}
}

mysqli_close($c);
?>
</div></center>
<div style="width:40%;float:right;padding:100px">
<div style="padding-bottom:100px">
<form action='checkroom.php' method='POST'>
<input type='submit' value='Allocate'

style="
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    background: #77c043;
    padding: 5px;
    border: 0;
    min-width: 150px;
    transition: 1s all ease;"
></form>
</div>
<div>
<h3 >Report</h3>
<form action="reportgene.php" method="POST">
<textarea rows=5 columns=150 name="rep"></textarea>
<br>
<input type='submit' 
style="
    border-radius: 5px !important;
    color: #fff;
    font-size: 17px;
    background: #23bbee;
    padding: 5px;
    border: 0;
    min-width: 150px;
    transition: 1s all ease;"/>
</div>
<script>
$(document).ready(function(){

$("#wvx").click(function(){
$("#pr").show();
});

});
</script>


</body>
</html>