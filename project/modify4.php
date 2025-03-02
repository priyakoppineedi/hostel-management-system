<?php
session_start();
$c=mysqli_connect("localhost","root","");
$p=$_SESSION['v1'];
$db=mysqli_select_db($c,"bvchdb");
$sin=$_POST["sif"];
$dou=$_POST["dif"];
$m1=$_POST["mif"];
$m2=$_POST["mif2"];
$o=$_POST["ons"];
if(empty($sin)||empty($dou)||empty($m1)||empty($m2)||empty($o))
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('enter each field');
    window.location.href='modify2.php';
</script>");
}
else
{
$i=mysqli_query($c,"UPDATE rooms SET sin='$sin',dou='$dou',m1='$m1',m2='$m2',onesem='$o' WHERE type='$p'");
if(isset($i))
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('updated');
    window.location.href='modify2.php';</script>");
}}
?>