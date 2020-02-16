<?php

$kon = mysqli_connect("localhost", "root", "", "data");

if (mysqli_connect_error()) {
	echo "koneksi gagal". mysqli_connect_error();
}


?>