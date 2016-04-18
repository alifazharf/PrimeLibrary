<?php
	include "koneksi.php"; 
	$uISBN = $_POST['ISBN'];
	$utahun_terbit = $_POST['tahun_terbit'];
	$upenerbit = $_POST['penerbit'];
	$upenulis = $_POST['penulis'];
	$ujudul = $_POST['judul'];
	$que = "update buku set tahun_terbit = '".$utahun_terbit."', penerbit = '".$upenerbit."', penulis = '".$upenulis."', judul = '".$ujudul."' where ISBN='".$uISBN."'";
	$berhasil = mysqli_query($koneksi1,$que);
	if ($berhasil){
		echo "
			<script>
                alert('Data berhasil diupdate :D');
                window.location='/adminmenu.php?page=buku';
            </script>
		";
	} else {
		echo "
			<script>
                alert('data gagal diupdate :(');
                window.location='/adminmenu.php?page=buku';
            </script>
		";
	}

?>