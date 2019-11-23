<?php
$id = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM tb_jadwal WHERE jadwal_id = $id");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_jadwal';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_jadwal';</script>";
}
