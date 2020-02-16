<?php
session_start();
include 'kon.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
// cara mengubah data sesuai dengan user yang sedang login
$cek = $_SESSION['id']; 

function upload(){

		$namaFile = $_FILES ['gambar']['name'];
		$ukuranFile = $_FILES ['gambar']['size'];
		$error = $_FILES ['gambar']['error'];
		$tempName = $_FILES ['gambar']['tmp_name'];
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png']; 
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if ($error === 4) {
			echo "<script>
					alert('pilih lah gambar terlebih dahulu !');window.location='index.php'
				  </script>";
				  exit();
			return false;
		}
		if (!in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
					alert('yang anda upload bukan file gambar !');window.location='index.php'
				  </script>";
				  exit();
			return false;
		}
		if ($ukuranFile>1000000) {
				echo "<script>
					alert('ukuran gambar terlalu besar !');window.location='index.php'
				  </script>";
				  exit();
			return false;		
		}
 move_uploaded_file($tempName, '../images/'.$namaFile);
 return $namaFile;
}

if (isset($_POST['ubah'])) {
	$jk = $_POST["jenis_kelamin"];
	$nama = $_POST["nama"];
	$gambarLama = $_POST["gambarLama"];
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	}
	else{
		$gambar = upload();
		
	}
	$query = mysqli_query($kon, "UPDATE `data` SET `nama`='$nama', `Jenis_kelamin`='$jk', `gambar`='$gambar'  WHERE id = '$cek'");
	if ($query == 1) {
		echo "<script>alert('data berhasil di ubah');window.location='index.php'</script>";
	}else{
		echo "<script>alert('data gagal di ubah');window.location='index.php'</script>";
	}
	
}
?>