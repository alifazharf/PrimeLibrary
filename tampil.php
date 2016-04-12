<link rel="stylesheet" type="text/css" href="style.css">
<?php
    include "koneksi.php";
    session_start();
    if(empty($_SESSION['username'])){
        echo "<script>alert('Login Dahulu')</script>";
    }
    else{
    echo"
    <a href='logout.php'>LOGOUT</a><br>
    <div class='search'>
        <form method='post' action='search.php'>
            <input name='cari' type='text' placeholder='Search' autocomplete='off'>
            <input type='submit' value='cari'>
        </form>
        </div>    
    ";
    echo "<center>Selamat datang ".$_SESSION['username']."</center>";
    $tampil = "select *from tambah_buku order by id";
    $hasil = mysqli_query($koneksi1,$tampil);
    $total = mysqli_num_rows($hasil);
    echo "<table>
            <tr>
                <th>ISBN</th>
                <th>Judul buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun terbit</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>";
    $no = 1;
    while($data = mysqli_fetch_array($hasil)){
        echo"
            <tr>
                <td>$no</td>
                <td>$data[isbn]</td>
                <td>$data[judul_buku]</td>
                <td>$data[penulis]</td>
                <td>$data[penerbit]</td>
                <td>$data[tahun_terbit]</td>
                <td>$data[deskripsi]</td>
                <td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='hapus.php?id=$data[id]'>Hapus</a></td>
            </tr>
            ";
        $no++;
    }
    echo "</table>";
    echo "Jumlah buku: $total buku";    
    echo"
    <div class='add'>
        <form method='post' action='tambah.php'>
            <input type='submit' value='Tambah data'>
        </form>
    </div>
    ";
    }
    
?>
