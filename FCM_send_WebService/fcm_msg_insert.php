<?php

require "init.php";
$fcm_token=$_POST["fcm_token"];
$sql="insert into fcm_notification values ('".$fcm_token."');";
$res = mysqli_query($con,$sql);

mysqli_close($con);
?>
