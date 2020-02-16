<?php
include "kon.php";
session_start();
if (!isset($_SESSION['id'])) {
	header("location:index.php");
}
	// echo "<a href='cek_logout.php'>logout</a>";
	
// cara mengetahui siapa yang sedang login
	$cek = $_SESSION['id']; 
	$user = mysqli_query($kon, "SELECT * FROM data where id = '$cek' ");
	$data = mysqli_num_rows($user);
	// print_r($cek);


 if ($data > 0) {
 	$cari = mysqli_fetch_assoc($user);
 	// print_r($cari);
 	$cek = $cari['nama'];
 	echo "selamat datang $cek";
 	echo "<br> <br>";
	echo "<form><input type='submit' value='logout' formaction='cek_logout.php'></form>";

// cara mengambil data yang di inginkan
	// $user1 = mysqli_fetch_assoc($user);
	// print_r($user1);
	echo "<br>";
	echo $cari['Jenis_kelamin'];
	echo "<br> <br>";
	echo $cari['nama'];
	echo "<br> <br>";
 }

// 



?>
<form action="ubah.php">
<button>ubah</button>
</form>

<!-- <form action="cek_ubah.php" method="post">
<br> <br>


<br>
<br>
<input type="submit" value="ubah">
</form> -->


