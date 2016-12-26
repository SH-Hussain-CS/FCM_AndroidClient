<?php

$host = "localhost";
$db_user="root";
$db_password="codebrew2015";
$db_name="test_DB";

$con=mysqli_connect($host,$db_user,$db_password,$db_name);
if($con)
    echo "connection success...";
else
    echo "connection Error...";

?>
