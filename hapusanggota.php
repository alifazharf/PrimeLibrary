<?php
    include "koneksi.php";
    $id = $_GET['hapusanggota'];
    $hapus = "delete from anggota where id_anggota='$id'";
    $hasil = mysqli_query($koneksi1,$hapus);
    if($hasil){
        echo "
            <script>
                alert('data terhapus');
                window.location='/adminmenu.php?page=anggota';
            </script>
        ";
    }
    else{
        echo "Hapus data gagal";
    }

?>