<?php
session_start();
$p=$_SESSION['var6name'];
$ty=$_SESSION['var5name'];
$ins=$_SESSION['vara4'];
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
$du=mysqli_query($c,"select * from rooms where type='$ty'");
if($du)
{
while($r=mysqli_fetch_array($du))
{
$nof=$r['noofrooms'];
$ss=$r['sin'];
}
if($nof<1)
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('Not possible,no rooms available');
    window.location.href='viewrequest2.php';
</script>");
}
else
{
if($ins=="single installment")
{
$de=mysqli_query($c,"select sin from rooms where type='$ty'");
while($rr=mysqli_fetch_array($de)){
$f=$rr['sin'];
}
}
else if($ins=="2 installements")
{
$de=mysqli_query($c,"select dou from rooms where type='$ty'");
while($rr=mysqli_fetch_array($de)){
$f=$rr['dou']*2;
}
}
else if($ins=="8 installements")
{
$de=mysqli_query($c,"select m1,m2 from rooms where type='$ty'");
while($rr=mysqli_fetch_array($de)){
$f=$rr['m1']+($rr['m2']*7);
}
}
else if($ins=="one sem")
{
$de=mysqli_query($c,"select onesem from rooms where type='$ty'");
while($rr=mysqli_fetch_array($de)){
$f=$rr['onesem'];
}}
$ss=substr($ty,1,5).substr($ss,0,3);
$nof=$nof-1;
$i=mysqli_query($c,"UPDATE rooms SET noofrooms='$nof' WHERE type='$ty'");
$kl=mysqli_query($c,"UPDATE reqroom SET alloted='yes',report='0',fees='$f',roomid='$ss' WHERE pin='$p'");
if($kl)
{
echo "<script LANGUAGE='JavaScript'>
    window.alert('sucessfully alloted');
    window.location.href='admin.php';
</script>";
}
}
}
else
{
echo "<br>failed";
}

mysqli_close($c);

?>