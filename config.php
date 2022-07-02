<?php
define('DB_SERVER','localhost');
define('DB_USER','u994498672_root');
define('DB_PASS' ,'divyaLM51');
define('DB_NAME', 'u994498672_amtDB');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>