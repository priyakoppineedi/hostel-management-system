<?php
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$z=$_POST['z'];
if(empty($z))
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('you have to enter the room name/type.....');
    window.location.href='admin.php';</script>");
}
$du=mysqli_query($c,"select * from rooms");
while($r=mysqli_fetch_array($du))
{
$bh=$r['type'];
if($z===$bh)
{
$n=$r['noofrooms'];
$nn=$r['noofrooms1'];
if($nn==$n)
{
$x=mysqli_query($c,"delete from rooms where type='$z'");
if($x)
echo("<script LANGUAGE='JavaScript'>
    window.alert('Room Deleted.....');
    window.location.href='admin.php';</script>");
}
else
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('Its not possible to delete the specified room.....');
    window.location.href='admin.php';</script>");
}
}
}
echo("<script LANGUAGE='JavaScript'>
    window.alert('the room you specified is not found.....');
    window.location.href='admin.php';</script>");

mysqli_close($c);
?>