<?php 
include 'koneksi.php';
 
$username = $_POST['uname'];
$password = md5($_POST['psw']);
 
$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:logged.php");
}else{
	header("location:index.php");	
}
 
?>