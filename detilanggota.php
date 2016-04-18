<!-- Mebdapatkan buku sesuai ISBN -->
<?php 
	$selected = $_GET['editanggota'];
	$query = "select * from anggota where id_anggota='$selected";
	$que = mysqli_query($koneksi1,$query);
	$admin = mysqli_fetch_assoc($que);
?>

<div class='col-sm-4'>
	<div class='well' class='slideOutUp'>
		<h4>Informasi Admin</h4>
		<form role='form' action='updateanggota.php' method='post'>

		  <div class='form-group'>
		    <label for='id'>Id Admin</label>
		    <input class="form-control" type="text" name="id_anggota" placeholder="Nama" autocomplete="off" value="<?php echo $admin['id_anggota']; ?>" readonly>
		  </div>

		  <div class='form-group'>
		    <label for='tahun_terbit'>Nama</label>
		    <input class="form-control" type="text" name="nama" placeholder="Nama" autocomplete="off" value="<?php echo $admin['nama']; ?>">
		  </div>

		  <div class='form-group'>
		    <label for='tahun_terbit'>Alamat</label>
		    <input class="form-control" type="text" name="alamat" placeholder="Alamat" autocomplete="off" value="<?php echo $admin['alamat']; ?>">
		  </div>

		  <div class='form-group'>
		    <label for='penerbit'>Jenis Kelamin</label>
		    <input class="form-control" type="text" name="jekel" placeholder="Jenis Kelamin (gunakan huruf penanda)" autocomplete="off" value="<?php echo $admin['jekel']; ?>">
		  </div>

		  <div class='form-group'>
		    <label for='penulis'>Kontak</label>
		    <input class="form-control" type="text" name="kontak" placeholder="Kontak (dapat berupa akun media sosial)" autocomplete="off" value="<?php echo $admin['kontak']; ?>">
		  </div>

		  <div class='form-group'>
		    <label for='judul'>Password</label>
		    <input class="form-control" type="password" name="passwd" placeholder="Password" autocomplete="off" value="<?php echo $admin['passwd']; ?>">
		  </div>

		  <div class='form-group'>
		    <label for='judul'>Surel</label>
		    <input class="form-control" type="email" name="surel" placeholder="Surel" autocomplete="off" value="<?php echo $admin['surel']; ?>">
		  </div>

		  <button type='submit' class='btn btn-default'>Update</button>
		</form>

	</div>
</div>