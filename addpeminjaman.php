<?php
	include "koneksi.php";
    $id_admin = $_POST['id_admin'];
	$id_anggota = $_POST['id_anggota'];
    $ISBN = $_POST['ISBN'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $denda = $_POST['denda'];

    
    if(empty($id_anggota) or empty($ISBN) or empty($tgl_pengembalian) or empty($denda)){
        echo "
                <script>
                    alert('Data harus lengkap');
                    window.location='adminmenu.php?page=peminjaman';
                </script>
            ";
    }
    else{
        $input = "insert into peminjaman (id_admin,id_anggota,ISBN,tgl_pengembalian,tgl_peminjaman,denda,status) values(".$id_admin.",".$id_anggota.",'$ISBN','$tgl_pengembalian',CURDATE(),$denda,'Belum Kembali')";
        $hasil = mysqli_query($koneksi1,$input);
        echo mysqli_error($koneksi1);
        if($hasil){
            $input = "update buku set tersedia = false where ISBN='$ISBN'";
            $hasil = mysqli_query($koneksi1,$input);
            echo "
                <script>
                    alert('Data berhasil dimasukkan :D');
                    window.location='/adminmenu.php?page=peminjaman';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('data gagal dimasukkan :( ');
                    window.location='/adminmenu.php?page=peminjaman';
                </script>
            ";
        }
    }
	
?>