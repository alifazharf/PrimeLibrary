<!DOCTYPE html>
<html>
<head>
	<title>Prime Library</title>
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
	            background-color: #757575; 
	        }
	    </style>
</head>
<body>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<h1>Prime Library</h1>
		<br>
		<br>
	</div>
	<div class="col-sm-4"></div>
</div>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<ul class="nav nav-tabs">
		  <li><a href="/?pilih=anggota">Anggota</a></li>
		  <li><a href="/?pilih=admin">Admin</a></li>
		</ul>
	</div>
	<div class="col-sm-4"></div>
</div>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<br>
	<br>
	<?php 
		if (isset($_GET['pilih'])){
			switch ($_GET['pilih']) {
				case 'anggota':
					include 'formloginanggota.html';
					break;
				case 'admin':
					include 'formlogin.html';
					break;
			}
		} else {
			include 'formloginanggota.html';
		}
	 ?>
	</div>
	<div class="col-sm-4"></div>
</div>

<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<br>
		<br>
		<br>
		<img src="/buku.png" width="100%">
	</div>
	<div class="col-sm-4"></div>
</div>

</body>
</html>
