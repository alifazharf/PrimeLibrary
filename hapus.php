<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $hapus = "delete from tambah_buku where id='$id'";
    $hasil = mysql_query($hapus);
    if($hasil){
        header("location: tampil.php");
    }
    else{
        echo "Hapus data gagal";
    }

?>