<?php
session_start();
$K=$_SESSION['var6name'];
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");

$z=$_POST['rep'];
$xyz=mysqli_query($c,"UPDATE reqroom SET report='$z' WHERE pin='$K'");
if($xyz)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('report has been sent');
    window.location.href='admin.php';</script>");
}
else
echo("<script LANGUAGE='JavaScript'>
    window.alert('failed');
    window.location.href='admin.php';</script>");

mysqli_close($c);

?>