<?php
	include "koneksi.php";
    $id_peminjaman = $_POST['peminjaman'];
    $denda = $_POST['denda'];
    
    $que = "Select ISBN from peminjaman where id_peminjaman = '$id_peminjaman'";
    $stha = mysqli_query($koneksi1,$que);
	$kolom = mysqli_fetch_assoc($stha);
    $ISBN = $kolom['ISBN'];

    
    if(empty($id_peminjaman) or empty($denda)){
        echo "
                <script>
                    alert('Data harus lengkap');
                    window.location='adminmenu.php?page=hilang';
                </script>
            ";
    }
    else{
        $input = "update peminjaman set total_denda=$denda, status ='Buku Hilang' where id_peminjaman=$id_peminjaman";
        $hasil = mysqli_query($koneksi1,$input);
        $input = "update buku set tersedia = false where ISBN='$ISBN'";
        $hasil2 = mysqli_query($koneksi1,$input);
        $input = "insert into buku_hilang values('$ISBN',$id_peminjaman) ";
        $hasil3 = mysqli_query($koneksi1,$input);
        echo $ISBN." ".$id_peminjaman."\n";
        echo mysqli_error($koneksi1);
        if($hasil and $hasil2 and $hasil3){
            echo "
                <script>
                    alert('Data berhasil dimasukkan :D');
                    window.location='/adminmenu.php?page=hilang';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('data gagal dimasukkan :( ');
                    window.location='/adminmenu.php?page=hilang';
                </script>
            ";
        }
    }
	
?>