<link rel="stylesheet" type="text/css" href="style.css">
<?php
    include "koneksi.php";
    $nama = $_POST['cari'];
    $cari = "select * from mahasiswa where nama like '%$nama%'";
    $hasil = mysql_query($cari);
    echo "Hasil pencarian untuk ".$nama;
    echo "<table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>";
    if($hasil){
        while($data = mysql_fetch_array($hasil)){
            echo"
                <tr>
                    <td>".$data['nama']."</td>
                    <td>".$data['nim']."</td>
                    <td>".$data['jurusan']."</td>
                </tr>
                ";
            }    
    }
    echo "</table>";
    
?>