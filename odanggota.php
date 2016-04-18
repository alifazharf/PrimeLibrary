<body>
    <div class='row'>
    <div class='col-sm-8'>
    <div class="panel panel-default">
    <div class="panel-heading">Daftar Informasil Peminjaman</div>
    <div class="panel-body">
    <div class='table-responsive'>
    <table class='table table-striped'>
<?php
    $tampil = "select * from anggota";
    $hasil = mysqli_query($koneksi1,$tampil);
    echo "
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>L/P</th>
                <th>kontak</th>
                <th>surel</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>";
    while ($data=mysqli_fetch_assoc($hasil)){
        echo"
            <tr>
                <td>".$data['id_anggota']."</td>
                <td>".$data['nama']."</td>
                <td>".$data['alamat']."</td>
                <td>".$data['jekel']."</td>
                <td>".$data['kontak']."</td>
                <td>".$data['surel']."</td>
                <td><a href='/adminmenu.php?page=anggota&hapusanggota=".$data['id_anggota']."' class='btn btn-default btn-xs'>Hapus</a>|<a href=/adminmenu.php?page=anggota&editanggota=".$data['id_anggota']."' class='btn btn-default btn-xs'>Edit</a></td>
            </tr>";
    }
    echo "
        </tbody>";
?>
    </table>
    </div>
    </div>
    </div>
    </div>
    <?php
        if (isset($_GET['editanggota'])) {
            include "detilanggota.php";
        }
        if (isset($_GET['hapusanggota'])){
            include "hapusanggota.php";
        }
    ?>
    </div>
<!-- Trigger the modal with a button -->
<div class="row">
    <div class="col-sm-12">
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Tambah Anggota Baru</button>
    </div>
</div>
    </div>




<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <?php 
        include 'tambahanggota.php';
        ?>
      
    </div>
  </div>

</body>