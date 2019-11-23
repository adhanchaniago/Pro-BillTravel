<?php $koneksi = mysqli_connect("localhost", "root", "mysql", "db_travel");
$no = 1;
// Untuk Rupiah
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka);
    return $hasil_rupiah;
}
