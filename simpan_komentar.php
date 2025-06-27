<?php
$conn = new mysqli("localhost", "root", "", "zaharafauziyah_d1a240012");
$id_artikel = $_POST['id_artikel'];
$nama = $_POST['nama_pengirim'];
$komentar = $_POST['isi_komentar'];
$sql = "INSERT INTO tbl_komentar (id_artikel, nama_pengirim, isi_komentar)
        VALUES ('$id_artikel', '$nama', '$komentar')";
if ($sql) {
echo "<script>alert('Gambar berhasil ditambahkan.'); 
window.location='index.php';</script>";
} else {
echo "<script>alert('Gagal menyimpan data ke database.'); 
history.back();</script>";
}