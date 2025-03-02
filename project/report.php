<?php
session_start();
$vc=$_POST["z"];
$_SESSION['var6name']=$vc;
?><html>
<body bgcolor=#E0FFFF style="padding:100px;margin:0px;">
<?Php
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$fgg=1;
$du=mysqli_query($c,"select * from reqroom");
while($r=mysqli_fetch_array($du)){
if($r['pin']==$vc)
{
$fgg=9;
}
}
if($fgg!=9)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('enter valid reg.no.....');
    window.location.href='admin.php';</script>");
}
?>
<button onClick="location.href='viewresidents.html'">back</button><br>
<form action="reportgene.php" method="POST">
<textarea rows=30 columns=200 name="rep" style="width:50%"></textarea>
<br>
<input type='submit' /></form></body></html>