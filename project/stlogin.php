<?php
session_start();
$u=$_POST["su"];
$_SESSION['suser']=$u;
$p=$_POST["sp"];
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
if(empty($u)||empty($p))
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
if($u==$r['usid'])
{
if($p==$r['pw'])
{               
echo ("<script LANGUAGE='JavaScript'>
    window.location.href='stupage.php';
    </script>");
}
else{
echo  ("<script LANGUAGE='JavaScript'>
    window.alert('incorrect password');
    window.location.href='home.php';
    </script>");}
}
}

echo  ("<script LANGUAGE='JavaScript'>
    window.alert('invalid datails');
    window.location.href='home.php';
    </script>");
}
mysqli_close($c);
?>