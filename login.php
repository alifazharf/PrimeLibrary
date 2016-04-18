<?php
    session_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi1,"select * from admin where nama='$username' and passwd='$password'");
    $kolom = mysqli_fetch_assoc($query);
    $idadmin = $kolom['id_admin'];
    $count = mysqli_num_rows($query);

    if($count == 1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['id_admin'] = $idadmin;
        header("location: adminmenu.php");
    }
    else{
        echo "<script> alert('Username atau Password salah !');
        window.location = '/formlogin.html'
         </script>";
    }

?>n