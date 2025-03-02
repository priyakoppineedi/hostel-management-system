<?php

$c=mysqli_connect("localhost","root","");

$db=mysqli_select_db($c,"bvchdb");

$t=$_POST["tyrm"];
$nof=$_POST["nor"];
$sin=$_POST["sif"];
$dou=$_POST["dif"];
$m1=$_POST["mif"];
$m2=$_POST["mif2"];
$o=$_POST["ons"];
if(empty($t)||empty($nof)||empty($sin)||empty($dou)||empty($m1)||empty($m2)||empty($o))
{echo("<script LANGUAGE='JavaScript'>
    window.alert('enter each field');
    window.location.href='admin.php';
</script>");
}
else
{
$du=mysqli_query($c,"select * from rooms");
while($r=mysqli_fetch_array($du))
{
if($t==$r['type'])
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('room is already existing with the name you had entered');
    window.location.href='admin.php';</script>");
}
}
$i=mysqli_query($c,"INSERT INTO rooms VALUES ('$t','$nof','$nof','$sin','$dou','$m1','$m2','$o')");
if($i)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('sucessfully added');
    window.location.href='admin.php';</script>");
}
else
echo("failed");
}

mysqli_close($c);
?>