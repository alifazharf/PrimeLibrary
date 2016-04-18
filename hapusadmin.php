<?php
    include "koneksi.php";
    $id = $_GET['hapus'];
    $hapus = "delete from admin where id_admin='$id'";
    $hasil = mysqli_query($koneksi1,$hapus);
    if($hasil){
        echo "
            <script>
                alert('data terhapus');
                window.location='/adminmenu.php?page=admin';
            </script>
        ";
    }
    else{
        echo "Hapus data gagal";
    }

?>