<!-- Mebdapatkan buku sesuai ISBN -->
<?php 
	$selected = $_GET['editadmin'];
	$query = "select * from buku where ISBN='$selected";
	$que = mysqli_query($koneksi1,$query);
	$bukus = mysqli_fetch_assoc($que);
echo "
<div class='col-sm-4'>
	<div class='well' class='slideOutUp'>
		<h4>Informasi buku</h4>
		<form role='form' action='updatebuku.php' method='post'>

		  <div class='form-group'>
		    <label for='tahun_terbit'>ISBN</label>
		    <input type='text' class='form-control' id='ISBN' name='ISBN' value='".$bukus['ISBN']."'readonly>
		  </div>

		  <div class='form-group'>
		    <label for='tahun_terbit'>Tahun terbit</label>
		    <input type='date' class='form-control' id='tahun_terbit' name='tahun_terbit' value='".$bukus['tahun_terbit']."'>
		  </div>

		  <div class='form-group'>
		    <label for='penerbit'>Penerbit</label>
		    <input type='text' class='form-control' id='penerbit' name='penerbit' value='".$bukus['penulis']."'>
		  </div>

		  <div class='form-group'>
		    <label for='penulis'>Penulis</label>
		    <input type='text' class='form-control' id='penulis' name='penulis' value='".$bukus['penerbit']."'>
		  </div>

		  <div class='form-group'>
		    <label for='judul'>Judul</label>
		    <input type='text' class='form-control' id='judul' name='judul' value='".$bukus['judul']."'>
		  </div>

		  <button type='submit' class='btn btn-default'>Update</button>
		</form>

	</div>
</div>
";
?>