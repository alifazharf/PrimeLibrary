<?php
	include "koneksi.php";
?>
<h3><center>Tambah Data</center></h3>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="head">
    <form method="post" action="prosestambah.php">
        <input class="masuk" type="text" name="isbn" placeholder="ISBN" autocomplete="off"><br>
        <input class="masuk" type="text" name="judul_buku" placeholder="Judul buku" autocomplete="off"><br>
        <input class="masuk" type="text" name="penulis" placeholder="Penulis" autocomplete="off"><br>
        <input class="masuk" type="text" name="penerbit" placeholder="Penerbit" autocomplete="off"><br>
        <input class="masuk" type="text" name="tahun_terbit" placeholder="Tahun terbit" autocomplete="off"><br>
        <!--<input class="masuk" type="text" name="deskripsi" placeholder="Deskripsi" autocomplete="off"><br>-->
        <textarea class="masuk" cols="40" rows="60" name="deskripsi" placeholder="Deskripsi"></textarea>
        <input id="tombol" type="submit" value="Simpan">
    </form>
</div>