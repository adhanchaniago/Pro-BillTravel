<?php
$id = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM tb_paket WHERE paket_id = $id");
$pecah = $ambil->fetch_object();
$nama = $pecah->paket_foto;
unlink("images/" . $nama);

$hapus = $koneksi->query("DELETE FROM tb_paket WHERE paket_id = $id");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_paket';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_paket';</script>";
}
