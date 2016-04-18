<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="well">
			<h4>Form Pelapoan Buku Hilang</h4>

			<form role='form' action='addhilang.php' method='post'>
				
				<div class="form-group">
					<label for="peminjaman">Buku Hilang Pada Id Peminjaman</label>
				      <select multiple class="form-control" id="peminjaman" name="peminjaman">
				        <?php
			        	$que = "Select id_peminjaman from peminjaman where status = 'Belum Kembali'";
						$stha = mysqli_query($koneksi1,$que);
				        while($r = mysqli_fetch_assoc($stha)) {
							$rows = array();
				    		echo "<option>".$r['id_peminjaman']."</option>";
						}
				         ?>
				      </select>	
				</div>

				<div class="form-group">
					<label for="denda">Denda Pengganti</label>
				    <input type='number' class='form-control' id='denda' name='denda'>
				</div>

				<button type='submit' class='btn btn-default'>Hilang</button>
			</form>
		</div>
	</div>
	<div class="col-sm-4"></div>
</div>