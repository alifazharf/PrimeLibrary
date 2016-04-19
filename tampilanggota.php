<body>
    <div class='row'>
    <div class='col-sm-12'>
    <div class='table-responsive'>
    <div class="panel panel-default">
    <div class="panel-heading">Daftar Informasi Buku Tersedia</div>
    <div class="panel-body">
    <table class='table table-striped'>
<?php
    $tampil = "select * from buku where tersedia = true";
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
            </tr>
        </thead>
        <tbody>";
    while ($data=mysqli_fetch_assoc($hasil)){
            echo "<tr>";
                echo "<td>".$data['ISBN']."</td>";
                echo "<td>".$data['judul']."</td>";
                echo "<td>".$data['penulis']."</td>";
                echo "<td>".$data['penerbit']."</td>";
                echo "<td>".$data['tahun_terbit']."</td>";
                echo "<td>".$data['tanggal_impor']."</td>";
                if ($data['tersedia']){
                    echo "<td>Ya</td>";
                } else {
                    echo "<td>Tidak</td>";
                }
            echo "</tr>";
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
