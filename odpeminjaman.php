<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="row">
  <div class="col-sm-3">
  	<div class="well">
		<h4>Form Peminjaman</h4>
		<form role='form' action='addpeminjaman.php' method='post'>

		  <div class='form-group'>
		    <label for='id_admin'>Id Penanggung Jawab</label>
		    <input type='text' class='form-control' id='id_admin' name='id_admin' value="<?php echo $_SESSION['id_admin'] ?>" readonly>
		  </div>
		  <br>
		  <label for="id_anggota">Id Angggota yang meminjam</label>
	      <select multiple class="form-control" id="id_anggota" name="id_anggota">
	        <?php
        	$que = "Select id_anggota from anggota";
			$stha = mysqli_query($koneksi1,$que);
	        while($r = mysqli_fetch_assoc($stha)) {
				$rows = array();
	    		echo "<option>".$r['id_anggota']."</option>";
			}
	         ?>
	      </select>
	      <br>
		  <label for="ISBN">ISBN buku yang dipinjam</label>
	      <select multiple class="form-control" id="ISBN" name="ISBN">
	        <?php
        	$que = "Select ISBN from buku where tersedia = true";
			$stha = mysqli_query($koneksi1,$que);
	        while($r = mysqli_fetch_assoc($stha)) {
				$rows = array();
	    		echo "<option>".$r['ISBN']."</option>";
			}
	         ?>
	      </select>
	      <br>
	      <div class='form-group'>
		    <label for='denda'>Denda / Hari (Rp)</label>
		    <input type='number' class='form-control' id='denda' name='denda'>
		  </div>
		  <br>
		  <div class='form-group'>
		    <label for='tgl_pengembalian'>Tanggal Buku Akan Dikembalikan</label>
		    <input type='date' class='form-control' id='tgl_pengembalian' name='tgl_pengembalian' >
		  </div>

		  <button type='submit' class='btn btn-default'>Pinjam</button>
		</form>
  	</div>
  </div>
  <div class="col-sm-9">
 	<div class="panel panel-default">
 		<div class="panel-heading">Daftar Informasil Peminjaman</div>
 		<div class="panel-body">
 			<table class="table table-striped" >
 				<thead>
		            <tr>
		                <th>Id </th>
		                <th>Id Penanggung</th>
		                <th>Id Peminjam</th>
		                <th>ISBN Buku</th>
		                <th>Tanggal Peminjaman</th>
		                <th>Tanggal Pengembalian</th>
		                <th>Tanggal Dikembalikan</th>
		                <th>Total Denda</th>
		                <th>Denda /hari (Rp)</th>
		                <th>Status</th>
		            </tr>
		        </thead>
		        <tbody>
	        		<?php 
	        			$que = "select * from peminjaman order by id_peminjaman";
	        			$res = mysqli_query($koneksi1,$que);
	        			while ($data=mysqli_fetch_assoc($res)){
	        				echo "<tr>";
	        				echo "<td>".$data['id_peminjaman']."</td>";
	        				echo "<td>".$data['id_admin']."</td>";
	        				echo "<td>".$data['id_anggota']."</td>";
	        				echo "<td>".$data['ISBN']."</td>";
	        				echo "<td>".$data['tgl_peminjaman']."</td>";
	        				echo "<td>".$data['tgl_pengembalian']."</td>";
	        				echo "<td>".$data['tgl_dikembalikan']."</td>";
	        				echo "<td>".$data['total_denda']."</td>";
	        				echo "<td>".$data['denda']."</td>";
	        				if($data['status'] == 'Sudah Kembali'){
	        					echo "<td>Sudah Kembali</td>";
	        				} elseif ($data['status'] == 'Belum Kembali')
	        				 {
	        					echo "<td><a class='btn btn-default btn-xs' href='/adminmenu.php?page=peminjaman&kembali=".$data['id_peminjaman']."&buku=".$data['ISBN']."&denda=".$data['denda']."&tglkembali=".$data['tgl_pengembalian']."'> Sudah Kembali ?</a></td>";
	        				} elseif ($data['status'] == 'Buku Hilang') {
	        					echo "<td>Buku Hilang</td>";
	        				}
	        				echo "</tr>";
	        			}
	        		?>
		        </tbody>
 			</table>
 		</div>
 	</div>

  </div>
</div>

</body>
<?php 
	if(isset($_GET['kembali']) and isset($_GET['buku'])){
		$que = "update peminjaman set status = 'Sudah Kembali' where id_peminjaman=".$_GET['kembali'];
	    $res1 = mysqli_query($koneksi1,$que);
	    $que = "update buku set tersedia = true where ISBN='".$_GET['buku']."'";
	    $res2 = mysqli_query($koneksi1,$que);
	    if ($res1 and $res2){
	    	//kalkulasi denda
	    	//1. mendapatkan selang hari
	    	$now = time();
		    $your_date = strtotime($_GET['tglkembali']);
		    $datediff = $now - $your_date;
		    $selang = floor($datediff/(60*60*24));
		    $denda =  (int) $_GET['denda'];

		    if ($selang>0){
		    	$totaldenda = $denda * $selang;
		    	$pesan = "Buku Telah Dikembalikan, Peminjam Dikenakan denda sebesar ".$totaldenda;
			    $que = "update peminjaman set total_denda = $totaldenda, tgl_dikembalikan = CURDATE() where id_peminjaman='".$_GET['kembali']."'";
		    	$res3 = mysqli_query($koneksi1,$que);
		    } else {
		    	$pesan = "Buku Telah Dikembalikan, Tidak ada denda";
		    	$que = "update peminjaman set total_denda = 0, tgl_dikembalikan = CURDATE() where id_peminjaman='".$_GET['kembali']."'";
		    	$res3 = mysqli_query($koneksi1,$que);
		    }


	    	echo "<script>
	    		alert('$pesan');
	    		window.location = '/adminmenu.php/?page=peminjaman';
	    	</script>";
	    }
	}
 ?>
</html>