<?php

session_start();
$c=mysqli_connect("localhost","root","");
if($c)
echo "connected";

$db=mysqli_select_db($c,"bvchdb");

$id=$_POST["pin"];
$_SESSION['spin']=$id;
$n=$_POST["nm"];
$cs=$_POST["cs"];
$add=$_POST["add"];
$ph=$_POST["phn"];
$e=$_POST["ei"];
if(empty($id)||empty($n)||empty($cs)||empty($add)||empty($ph)||empty($e))
{echo("<script LANGUAGE='JavaScript'>
    window.alert('enter each field');
    window.location.href='home.php';
</script>");
}
else
{
$du=mysqli_query($c,"select * from stu_reg");
while($r=mysqli_fetch_array($du))
{
if($id==$r['pinno']&&$r['usid']!=NULL)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('an account is already existing with the pin you had entered');
    window.location.href='home.php';</script>");
}
}
mysqli_query($c,"delete from stu_reg where pinno='$id'");
$i=mysqli_query($c,"INSERT INTO stu_reg (pinno,Name,Course,Address,Phoneno,Emailid) VALUES ('$id','$n','$cs','$add','$ph','$e')");
if($i)
{
echo("<script LANGUAGE='JavaScript'>
    window.location.href='crstupid.html';</script>");
}
else
echo("failed");
}

mysqli_close($c);
?>