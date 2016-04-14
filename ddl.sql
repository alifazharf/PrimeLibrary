create table buku(
	ISBN varchar(20),
	tahun_terbit Date,
	penerbit varchar(25),
	penulis varchar(25),
	judul varchar(25),
	tanggal_impor Date,
	tersedia boolean
)

create table admin(
	id_admin int,
	nama varchar(25),
	alamat varchar(50),
	jekel char(1),
	kontak varchar(25),
	passwd varchar(25),
	surel varchar(25)
)

create table anggota(
	id_anggota int,
	nama varchar(25),
	alamat varchar(50),
	jekel char(1),
	kontak varchar(25),
	passwd varchar(25),
	surel varchar(25)
)

create table peminjaman(
	id_peminjaman int,
	id_admin int,
	id_anggota int,
	tgl_pengembalian date,
	tgl_peminjaman date,
	denda real,
	primary key (id_peminjaman),
	foreign key (id_admin) references admin(id_admin),
	foreign key (ISBN) references buku(ISBN),
	foreign key (id_anggota) references anggota(id_anggota)
)

create table pengadaan_buku(
	ISBN int,
	alasan varchar(1000),
	foreign key (ISBN) references buku(ISBN)
)