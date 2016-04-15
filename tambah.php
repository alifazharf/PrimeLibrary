<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Isi Data Buku</h4>
</div>
<div class="modal-body">

<form role="form" method="post" action="prosestambah.php">
    <input class="form-control" type="text" name="isbn" placeholder="ISBN" autocomplete="off"><br>
    <input class="form-control" type="date" name="tahun_terbit" placeholder="Tanggal Terbit" autocomplete="off"><br>
    <input class="form-control" type="text" name="penerbit" placeholder="Penerbit" autocomplete="off"><br>
    <input class="form-control" type="text" name="penulis" placeholder="Penulis" autocomplete="off"><br>
    <input class="form-control" type="text" name="judul" placeholder="Judul Buku" autocomplete="off"><br>
    <!-- tanggal import langsung dari sistem -->
<div class="modal-footer">
    <input class="btn btn-primary" id="tombol" type="submit" value="Simpan">
    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
</div>
</form>
</div>
</div>