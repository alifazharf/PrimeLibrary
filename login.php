<?php
    session_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi1,"select * from admin where nama='$username' and passwd='$password'");
    //$cocok = mysqli_num_rows($query);
    if($query){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: adminmenu.php");
    }
    else{
        echo "<script> alert('Username atau Password salah !') </script>";
    }

?>