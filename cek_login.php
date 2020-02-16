<?php
session_start();

include 'kon.php';

$username = $_POST['nama'];
$password = $_POST['password'];

$login = mysqli_query($kon, "SELECT * FROM data WHERE nama = '$username' and password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0 ) {
$user = mysqli_fetch_array($login);
$_SESSION['id'] = $user['id'];// cara agar halaman home tidak dapat di akses sebelum login
// print_r($_SESSION['id']);
header("location: index.php");
}
else{
	echo "<script>alert('data tidak di temukan');window.location='login.php'</script>";
}
?>