<?php
$id = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM tb_testi WHERE testi_id = $id");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_testi';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_testi';</script>";
}
