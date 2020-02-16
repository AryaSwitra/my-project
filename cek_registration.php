<?php
include 'kon.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

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
					alert('pilih lah gambar terlebih dahulu !');window.location='registration.php'
				  </script>";
				  exit();
			return false;
		}
		if (!in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
					alert('yang anda upload bukan file gambar !');window.location='registration.php'
				  </script>";
				  exit();
			return false;
		}
		if ($ukuranFile>1000000) {
				echo "<script>
					alert('ukuran gambar teralu besar !');window.location='registration.php'
				  </script>";
				  exit();
			return false;		
		}
 move_uploaded_file($tempName, '../images/'.$namaFile);
 return $namaFile;
}
if (isset($_POST['login'])) {
	$username = $_POST['nama'];
	$password = $_POST['password'];
	$jk = $_POST['jenis_kelamin'];
	$gambar = $_FILES['gambar']['name'];
	// var_dump($gambar);
	upload();
	$input = mysqli_query($kon, "INSERT INTO data VALUES ('', '$username', '$password', '$jk', '$gambar')");					
	if ($input == 1) {
		echo "<script>alert('Registrasi Berhasil');window.location='login.php'</script>";
	}else{
		echo "<script>alert('Registrasi gagal di ubah');window.location='index.php'</script>";
	}
}
	
?>