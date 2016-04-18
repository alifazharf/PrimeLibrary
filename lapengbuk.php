<?php
    $tampil = "select * from  pengadaan_buku";
    $hasil = mysqli_query($koneksi1,$tampil);
    echo "
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Alasan</th>
            </tr>
        </thead>
        <tbody>";
    while ($data=mysqli_fetch_assoc($hasil)){
        echo"
            <tr>
                <td>".$data['ISBN']."</td>
                <td>".$data['alasan']."</td>
            </tr>";
    }
    echo "
        </tbody>";
?>