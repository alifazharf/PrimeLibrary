<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Isi Data Anggota Baru</h4>
</div>
<div class="modal-body">

<form role="form" method="post" action="addanggota.php">
    <input class="form-control" type="text" name="nama" placeholder="Nama" autocomplete="off"><br>
    <input class="form-control" type="text" name="alamat" placeholder="Alamat" autocomplete="off"><br>
    <input class="form-control" type="text" name="jekel" placeholder="Jenis Kelamin (gunakan huruf penanda)" autocomplete="off"><br>
    <input class="form-control" type="text" name="kontak" placeholder="Kontak (dapat berupa akun media sosial)" autocomplete="off"><br>
    <input class="form-control" type="password" name="passwd" placeholder="Password" autocomplete="off"><br>
    <input class="form-control" type="email" name="surel" placeholder="Surel" autocomplete="off"><br>
    <!-- tanggal import langsung dari sistem -->
<div class="modal-footer">
    <input class="btn btn-primary" id="tombol" type="submit" value="Simpan">
    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
</div>
</form>
</div>
</div>