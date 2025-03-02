<?php
session_start();
$pin=$_SESSION['spin'];

$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$us=$_POST["us"];
$pc=$_POST["pc"];
$cp=$_POST["cp"];
if(empty($us)||empty($pc)||empty($cp)||empty($pin))
{echo("<script LANGUAGE='JavaScript'>
    window.alert('enter each field');
    window.location.href='crstupid.html';
</script>");
}
else
{
$du=mysqli_query($c,"select * from stu_reg");
while($r=mysqli_fetch_array($du))
{
if($us==$r['usid'])
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('please enter another valid user id..........the user id you have entered has already chosen by someone');
    window.location.href='crstupid.html';</script>");
}
}#while
if($pc!=$cp)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('password does not match');
    window.location.href='crstupid.html';</script>");
}
else
{
$i=mysqli_query($c,"UPDATE stu_reg SET usid='$us',pw='$pc' WHERE pinno='$pin'");
if(isset($i))
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('your account has been created.........');
    window.location.href='home.php';</script>");
}
else
echo("failed");
}#else
}#else
mysqli_close($c);
?>