<?php
	include "koneksi.php"; 
	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jekel = $_POST['jekel'];
    $kontak = $_POST['kontak'];
    $passwd = $_POST['passwd'];
    $surel = $_POST['surel'];
	
	$que = "update anggota set nama = '$nama' ,alamat = '$alamat' ,jekel = '$jekel' ,kontak = '$kontak' ,passwd = '$passwd' ,surel = '$surel' where id_anggota=$id_anggota ";
	
	$berhasil = mysqli_query($koneksi1,$que);
	if ($berhasil){
		echo "
			<script>
                alert('Data berhasil diupdate :D');
                window.location='/adminmenu.php?page=anggota';
            </script>
		";
	} else {
		echo "
			<script>
                alert('data gagal diupdate :(');
                window.location='/adminmenu.php?page=anggota';
            </script>
		";
	}

?>