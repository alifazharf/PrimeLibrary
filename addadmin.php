<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jekel = $_POST['jekel'];
    $kontak = $_POST['kontak'];
    $passwd = $_POST['passwd'];
    $surel = $_POST['surel'];

    
    if(empty($nama) or empty($alamat) or empty($jekel) or empty($kontak) or empty($passwd) or empty($surel)){
        echo "
                <script>
                    alert('Data harus lengkap');
                    window.location='adminmenu.php?page=admin';
                </script>
            ";
    }
    else{
        $input = "insert into admin (nama,alamat,jekel,kontak,passwd,surel) values('$nama','$alamat','$jekel','$kontak','$passwd','$surel')";
        $hasil = mysqli_query($koneksi1,$input);
        if($hasil){
            echo "
                <script>
                    alert('Data berhasil dimasukkan :D');
                    window.location='/adminmenu.php?page=admin';
                </script>
            ";
        }
        else{
            echo $tahun_terbit;
            echo "
                <script>
                    alert('data gagal dimasukkan :(');
                    window.location='/adminmenu.php?page=admin';
                </script>
            ";
        }
    }
	
?>