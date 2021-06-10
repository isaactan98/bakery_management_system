<?php
$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"bakery_system");

session_start();

$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($connection,"select username from login where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
if(!isset($login_session)){
	mysqli_close($connection);
	header('location:login.php');
}
?>