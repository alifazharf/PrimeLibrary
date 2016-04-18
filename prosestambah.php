<?php
	include "koneksi.php";
	$isbn = $_POST['isbn'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];
    $judul = $_POST['judul'];

    
    if(empty($isbn) or empty($tahun_terbit) or empty($penerbit) or empty($penulis) or empty($judul)){
        echo "
                <script>
                    alert('Data harus lengkap');
                    window.location='adminmenu.php';
                </script>
            ";
    }
    else{
        $input = "insert into buku values('$isbn','$tahun_terbit','$penerbit','$penulis','$judul',CURDATE(),true);";
        $hasil = mysqli_query($koneksi1,$input);
        if($hasil){
            echo "
                <script>
                    alert('Data berhasil dimasukkan :D');
                    window.location='/adminmenu.php';
                </script>
            ";
        }
        else{
            echo $tahun_terbit;
            echo "
                <script>
                    alert('data gagal dimasukkan :(');
                    window.location='/adminmenu.php';
                </script>
            ";
        }
    }
	
?>


