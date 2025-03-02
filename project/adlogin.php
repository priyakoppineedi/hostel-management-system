<?php
$u=$_POST["au"];
$p=$_POST["ap"];
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"bvchdb");
if(empty($u)||empty($p))
{
echo("<script LANGUAGE='JavaScript'>
    window.alert('enter each field');
    window.location.href='home.php';
</script>");
}
else
{
$du=mysqli_query($c,"select * from admlogin");
while($r=mysqli_fetch_array($du))
{
if($u==$r['uid'])
{
if($p==$r['pw'])
{               
echo ("<script LANGUAGE='JavaScript'>
    window.location.href='admin.php';
    </script>");
}
else
{echo("<script LANGUAGE='JavaScript'>
    window.alert('enter correct password');
    window.location.href='home.php';
</script>");
}
}

}
echo("<script LANGUAGE='JavaScript'>
    window.alert('invalid details');
    window.location.href='home.php';
</script>");
}
?>