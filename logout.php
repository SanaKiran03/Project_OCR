<?php
session_start();
include("includes/config.php");
$_SESSION['login']=="";
date_default_timezone_set('Asia/Karachi');
$ldate=date( 'd-m-Y h:i:s A', time () );
$uid=$_SESSION['login'];
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE studentRegno = '$uid' ORDER BY id DESC LIMIT 1");
session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script>
