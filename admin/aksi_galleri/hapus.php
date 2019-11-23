<?php
$id = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM tb_galleri WHERE galleri_id = $id");
$pecah = $ambil->fetch_object();
$nama = $pecah->galleri_foto;
unlink("images/" . $nama);

$hapus = $koneksi->query("DELETE FROM tb_galleri WHERE galleri_id = $id");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_galleri';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_galleri';</script>";
}
