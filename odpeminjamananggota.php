<body>
    <div class='row'>
    <div class='col-sm-12'>
    <div class='table-responsive'>
    <div class="panel panel-default">
    <div class="panel-heading">Daftar Informasi Buku yang Dipinjam</div>
    <div class="panel-body">
    <table class='table table-striped'>
<?php
    $tampil = "select ISBN,judul,tgl_pengembalian,denda,total_denda from buku natural join peminjaman where id_anggota=".$_SESSION['id_anggota'];
    $hasil = mysqli_query($koneksi1,$tampil);
    echo "
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Judul buku</th>
                <th>Tanggal Buku Harus Dikembalikan</th>
                <th>Denda / Hari (Rp)</th>
                <th>Total Denda Keterlambatan</th>
            </tr>
        </thead>
        <tbody>";
    while ($data=mysqli_fetch_assoc($hasil)){
        echo"
            <tr>
                <td>".$data['ISBN']."</td>
                <td>".$data['judul']."</td>
                <td>".$data['tgl_pengembalian']."</td>
                <td>".$data['denda']."</td>
                <td>".$data['total_denda']."</td>
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
    </div>
    </div>

  
</body>
