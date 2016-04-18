<?php
	include "koneksi.php"; 
	$id_admin = $_POST['id_admin'];
	$nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jekel = $_POST['jekel'];
    $kontak = $_POST['kontak'];
    $passwd = $_POST['passwd'];
    $surel = $_POST['surel'];
	
	$que = "update admin set nama = '$nama' ,alamat = '$alamat' ,jekel = '$jekel' ,kontak = '$kontak' ,passwd = '$passwd' ,surel = '$surel' where id_admin=$id_admin ";
	
	$berhasil = mysqli_query($koneksi1,$que);
	if ($berhasil){
		echo "
			<script>
                alert('Data berhasil diupdate :D');
                window.location='/adminmenu.php?page=admin';
            </script>
		";
	} else {
		echo "
			<script>
                alert('data gagal diupdate :(');
                window.location='/adminmenu.php?page=admin';
            </script>
		";
	}

?>