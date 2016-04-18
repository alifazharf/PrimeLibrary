<?php
    session_start();
    include "koneksi.php";
    $usernamea = $_POST['usernamea'];
    $passworda = $_POST['passworda'];

    $query = mysqli_query($koneksi1,"select * from anggota where nama='$usernamea' and passwd='$passworda'");
    $kolom = mysqli_fetch_assoc($query);
    $idanggota = $kolom['id_anggota'];  
    $count = mysqli_num_rows($query); 

    if($count == 1){
        $_SESSION['usernamea'] = $usernamea;
        $_SESSION['passworda'] = $passworda;
        $_SESSION['id_anggota'] = $idanggota;
        header("location: anggotamenu.php");
    }
    else{
        echo "<script> alert('Username atau Password salah !');
            window.location = '/'
        </script>";
    }

?>n