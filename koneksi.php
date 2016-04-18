<?php
    $koneksi1 = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "be7d56dd592022", "10d1761f","PrimeLibrary");
    if (!$koneksi1) {
    	die("Connection failed: " . mysqli_connect_error());
	}
?>