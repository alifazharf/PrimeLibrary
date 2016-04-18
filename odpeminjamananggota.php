<body>
    <div class='row'>
    <div class='col-sm-8'>
    <div class='table-responsive'>
    <table class='table table-striped'>
<?php
    $tampil = "select ISBN,judul,tgl_pengembalian from buku natural join peminjaman where id_anggota=".$_SESSION['id_anggota'];
    $hasil = mysqli_query($koneksi1,$tampil);
    echo "
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Judul buku</th>
                <th>Tanggal Pengembalian</th>
            </tr>
        </thead>
        <tbody>";
    while ($data=mysqli_fetch_assoc($hasil)){
        echo"
            <tr>
                <td>".$data['ISBN']."</td>
                <td>".$data['judul']."</td>
                <td>".$data['tgl_pengembalian']."</td>
            </tr>";
    }
    echo "
        </tbody>";
?>
    </table>
    </div>
    </div>
    </div>

  
</body>
