<?php
session_start();
$a=$_POST["z"];
$_SESSION['v1']=$a;
echo '<script>
window.location.href="modify2.php";
</script>';
?>