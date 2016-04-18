<?php
	include "koneksi.php";
    $ISBN = $_POST['ISBN'];
	$alasan = $_POST['alasan'];

    
    if(empty($alasan) or empty($ISBN)){
        echo "
                <script>
                    alert('Data harus lengkap');
                    window.location='adminmenu.php?page=Pengadaan';
                </script>
            ";
    }
    else{
        $input = "insert into pengadaan_buku values('$ISBN','$alasan')";
        $hasil = mysqli_query($koneksi1,$input);
        echo mysqli_error($koneksi1);
        if($hasil){
            echo "
                <script>
                    alert('Data berhasil dimasukkan :D');
                    window.location='/adminmenu.php?page=Pengadaan';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('data gagal dimasukkan :( ');
                    window.location='/adminmenu.php?page=Pengadaan';
                </script>
            ";
        }
    }
	
?>