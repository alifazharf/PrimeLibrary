<?php
    include "koneksi.php";
    $id = $_GET['hapusadmin'];
    $hapus = "delete from buku where ISBN='$id'";
    $hasil = mysqli_query($koneksi1,$hapus);
    if($hasil){
        echo "
            <script>
                alert('data terhapus');
                window.location='/adminmenu.php';
            </script>
        ";
    }
    else{
        echo "Hapus data gagal";
    }

?>