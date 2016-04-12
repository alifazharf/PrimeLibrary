<?php
	include "koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$namalengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];

    if(empty($username) or empty($password) or empty($namalengkap) or empty($email)){
        echo "<script> alert('Data tidak lengkap') </script>";
    }
    else{
        $input = "insert into admin values ('$username','$password','$namalengkap','$email')";
        $hasil = mysql_query($input);
        if($hasil){
            header("location: formlogin.html");
        }
        else{
            echo "Registrasi gagal";
        }
    }
	
?>


