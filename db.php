<?php
$db_host = "localhost";
$db_user = "kmc0487";
$db_passwd = "dot0487!";
$db_name = "kmc0487";
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

if (mysqli_connect_errno($conn)) {
echo "fail " . mysqli_connect_error();
} else {
echo "good";
}
?>
