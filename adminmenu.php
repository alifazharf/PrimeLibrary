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
		      <li><a href="?page=buku">Buku</a></li>
		      <li><a href="?page=admin">Admin</a></li>
		      <li><a href="?page=anggota">Anggota</a></li> 
		      <li><a href="?page=peminjaman">Peminjaman</a></li>
		      <li><a href="?page=pengembalian">Pengembalian</a></li>
		      <li><a href="?page=hilang">Buku Hilang</a></li>
		      <li><a href="?page=pelaporan">Pelaporan</a></li> 
		    </ul>
			<ul class="nav navbar-nav navbar-right">
		      <li><a><?php echo "Halo, ".$_SESSION['username']; ?></a></li>
		      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
					echo "olah data admin";
					break;

				case 'anggota':
					echo "oldah data ";
					break;

				case 'peminjaman':
					echo "peminjaman";
					break;

				case 'pengembalian':
					echo "pengembalian";
					break;

				case 'hilang':
					echo "hilang";
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