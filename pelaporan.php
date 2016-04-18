<ul class="nav nav-tabs">
  <li><a href="/adminmenu.php?page=pelaporan&lapor=adabuku">Laporan Pengadaan Buku</a></li>
  <li><a href="/adminmenu.php?page=pelaporan&lapor=buku">Laporan Inventaris Buku</a></li>
  <li><a href="/adminmenu.php?page=pelaporan&lapor=pinjam">Laporan Peminjaman Buku</a></li>
</ul>

<div class="row">
	<div class="col-sm-12">
		<table class='table table-striped'>
<?php
	if (isset($_GET['lapor'])){
	    switch ($_GET['lapor']) {
	    	case 'adabuku':
	    		include "lapengbuk.php";
	    		break;

	    	case 'buku':
	    		include "lapinbuk.php";
	    		break;

	    	case 'pinjam':
	    		include "lapin.php";
	    		break;
	    	
	    	default:
	    		# code...
	    		break;
	    }
	}
?>
		</table>
	</div>
</div>