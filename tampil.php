<body>
<?php
    $tampil = "select * from buku";
    $hasil = mysqli_query($koneksi1,$tampil);
    echo "<div class='row'>";
    echo "<div class='col-sm-12'>";
    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped'>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Judul buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun terbit</th>
                <th>Tangal Import</th>
                <th>Tersedia</th>
            </tr>
        </thead>
        <tbody>";
    while ($data=mysqli_fetch_assoc($hasil)){
        echo"
            <tr>
                <td>".$data['ISBN']."</td>
                <td>".$data['judul']."</td>
                <td>".$data['penulis']."</td>
                <td>".$data['penerbit']."</td>
                <td>".$data['tahun_terbit']."</td>
                <td>".$data['tanggal_impor']."</td>
                <td>".$data['tersedia']."</td>
            </tr>";
    }
    echo "
        </tbody>
    </table>
    </div>
    </div>
    </div>";  
?>

<!-- Trigger the modal with a button -->
<div class="row">
    <div class="col-sm-12">
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Tambah Buku</button>
    </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <?php 
        include 'tambah.php';
        ?>
      
    </div>
  </div>

</body>
