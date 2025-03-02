<?php
session_start();
$u=$_SESSION['suser'];
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$s=$_POST["d"];
$m=$_POST["m"];
$dj=$_POST["dj"];
$dd=$_POST['tp'];
$in=$_POST['in'];

if(empty($u)||empty($s)||empty($in)||empty($dj)||empty($m)||empty($dd))
{echo("<script LANGUAGE='JavaScript'>
    window.alert('enter each field');
    window.location.href='stupage.php';
</script>");
}
$G="no";
$de=mysqli_query($c,"select * from reqroom where usid='$u'");
while($r=mysqli_fetch_array($de))
{
$gh=$r['alloted'];
$G="yes";
}
if($gh==$G)
{
echo "<script LANGUAGE='JavaScript'>
    window.alert('check your status');
    window.location.href='stupage.php';
</script>";
}
else{

$du=mysqli_query($c,"select * from stu_reg WHERE usid='$u'");
if($du)
{
while($r=mysqli_fetch_array($du))
{
$pi=$r['pinno'];
$na=$r['Name'];
$co=$r['Course'];
$a=$r['Address'];
$ph=$r['Phoneno'];
$e=$r['Emailid'];
}
mysqli_query($c,"delete from reqroom where pin='$pi'");
$z=mysqli_query($c,"INSERT INTO reqroom (pin,n,co,ad,phn,ei,usid,t,ni,du,ms,dj) VALUES ('$pi','$na','$co','$a','$ph','$e','$u','$dd','$in','$s','$m','$dj')");
if($z)
{
echo("<script>
window.alert('request sent');
window.location.href='stupage.php';
</script>");
}
else
echo("failed........try again");
}

else
echo('enter correct userid');
mysqli_close($c);
}

?>