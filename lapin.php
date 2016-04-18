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
	        					echo "<td>Belum Kembali</td>";
	        				} elseif ($data['status'] == 'Buku Hilang') {
	        					echo "<td>Buku Hilang</td>";
	        				}
	        				echo "</tr>";
	        			}
	        		?>