<?php 
	include "koneksi.php";
    session_start();
	if(empty($_SESSION['username'])){
        echo "<script>alert('Login Dahulu')</script>";
        header("location: formlogin.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prime Library</title>
	<link rel="stylesheet" href="animate.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			margin-left: 10px;
			margin-right: 10px;
			margin-top: 10px;
		}s
	</style>
</head>
<body>

<div class="row">
	<div class="col-sm-12">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" >PrimeLibrary</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="/adminmenu.php?page=buku">Buku</a></li>
		      <li><a href="/adminmenu.php?page=admin">Admin</a></li>
		      <li><a href="/adminmenu.php?page=anggota">Anggota</a></li> 
		      <li><a href="/adminmenu.php?page=peminjaman">Peminjaman</a></li>
		      <li><a href="/adminmenu.php?page=Pengadaan">Pengadaan</a></li>
		      <li><a href="/adminmenu.php?page=hilang">Buku Hilang</a></li>
		      <li><a href="/adminmenu.php?page=pelaporan">Pelaporan</a></li> 
		    </ul>
			<ul class="nav navbar-nav navbar-right">
		      <li><a><?php echo "Halo, ".$_SESSION['username']."(".$_SESSION['id_admin'].")"; ?></a></li>
		      <li><a href="/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		    </ul>
		  </div>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<?php
		if (isset($_GET['page'])) {
			# code...
			switch ($_GET['page']) {
				case 'buku':
					include "tampil.php";
					break;

				case 'admin':
					include "odadmin.php";
					break;

				case 'anggota':
					include "odanggota.php";
					break;

				case 'peminjaman':
					include "odpeminjaman.php";
					break;

				case 'Pengadaan':
					include "Pengadaan.php";
					break;

				case 'hilang':
					include "bukuhilang.php";
					break;

				case 'pelaporan':
					echo "pelaporan";
					break;
				
				default:
					include "tampil.php";
					break;
			}
		} else {
			include 'tampil.php';
		}
		?>
	</div>
</div>

</body>
</html>