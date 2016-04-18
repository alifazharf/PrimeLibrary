<body>
    <div class='row'>
    <div class='col-sm-8'>
    <div class="panel panel-default">
    <div class="panel-heading">Daftar Informasi Buku</div>
    <div class="panel-body">
    <div class='table-responsive'>
    <table class='table table-striped'>
<?php
    $tampil = "select * from buku";
    $hasil = mysqli_query($koneksi1,$tampil);
    echo "
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Judul buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun terbit</th>
                <th>Tangal Import</th>
                <th>Tersedia</th>
                <th>Aksi</th>
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
                <td><a href='/adminmenu.php?page=buku&hapusadmin=".$data['ISBN']."' class='btn btn-default btn-xs'>Hapus</a>|<a href=/adminmenu.php?page=buku&editadmin=".$data['ISBN']."' class='btn btn-default btn-xs'>Edit</a></td>
            </tr>";
    }
    echo "
        </tbody>";
?>
    </table>
    </div>
    </div>
    </div>
<!-- Trigger the modal with a button -->
<div class="row">
    <div class="col-sm-12">
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Tambah Buku</button>
    </div>
</div>
    </div>    
    <?php
        if (isset($_GET['editadmin'])) {
            include "detilbuku.php";
        }
        if (isset($_GET['hapusadmin'])){
            include "hapus.php";
        }
    ?>
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
