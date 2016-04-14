<head>
  <title>Prime Library</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
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
    $tampil = "select * from buku";
    $hasil = mysqli_query($koneksi1,$tampil);
    echo "<div class='row'>";
    echo "<div class='col-sm-2'></div>";
    echo "<div class='col-sm-8'>";
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
                <th>tersedia</th>
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
    <div class='col-sm-2'></div>";  
    echo"
    </div>
    <div class='add'>
        <form method='post' action='tambah.php'>
            <input class='btn btn-default' type='submit' value='Tambah data'>
        </form>
    </div>
    ";
    }  
?>
</body>
