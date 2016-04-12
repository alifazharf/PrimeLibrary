<?php
	include "koneksi.php";
	$isbn = $_POST['isbn'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];
    
    if(empty($isbn) or empty($judul_buku) or empty($penulis) or empty($penerbit) or empty($tahun_terbit) or empty($deskripsi)){
        echo "<script> alert('Data tidak lengkap') </script>";
    }
    else{
        $input = "insert into tambah_buku(isbn,judul_buku,penulis,penerbit,tahun_terbit,deskripsi) values ('$isbn','$judul_buku','$penulis','$penerbit',$tahun_terbit,'$deskripsi')";
        $hasil = mysqli_query($koneksi1,$input);
        if($hasil){
            header("location: tampil.php");
        }
        else{
            echo "input data gagal";
        }
    }
	
?>


