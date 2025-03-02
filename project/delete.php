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
    window.alert('not posible........');
    window.location.href='admin.php';</script>");
}

$du=mysqli_query($c,"select * from reqroom WHERE pin='$z'");

while($r=mysqli_fetch_array($du))
{
$k=$r['t'];
}
$de=mysqli_query($c,"select noofrooms from rooms WHERE type='$k'");
while($r=mysqli_fetch_array($de))
{
$nn=$r['noofrooms'];
}
$nn=$nn+1;
$f=mysqli_query($c,"UPDATE rooms SET noofrooms=$nn WHERE type='$k'");
mysqli_query($c,"delete from stu_reg where pinno='$z'");
$xyz=mysqli_query($c,"delete from reqroom where pin='$z'");
if($xyz)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('Removed and unallocated.......');
    window.location.href='admin.php';</script>");
}
else
echo("<script LANGUAGE='JavaScript'>
    window.alert('not posible........');
    window.location.href='admin.php';</script>");


mysqli_close($c);
?>