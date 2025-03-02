<?php
session_start();
$p=$_SESSION['v1'];
$ff=$_POST['e'];
if(empty($ff))
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('not possible');
    window.location.href='modify2.php';</script>");
}
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$de=mysqli_query($c,"select * from rooms where type='$p' ");
while($r=mysqli_fetch_array($de))
{
$b=$r['noofrooms1'];
$b2=$r['noofrooms'];
}
$b=$b+$ff;
$b2=$b2+$ff;
$i=mysqli_query($c,"UPDATE rooms SET noofrooms1='$b',noofrooms='$b2' WHERE type='$p'");
if(isset($i))
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('updated');
    window.location.href='modify2.php';</script>");
}

?>