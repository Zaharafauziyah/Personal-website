<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
header('location:login.php');
exit;
}
$judul = mysqli_real_escape_string($db, $_POST['nama_artikel']);
$isi = mysqli_real_escape_string($db, $_POST['isi_artikel']);
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
// Pastikan folder 'images' tersedia
$folder = '../images/';
$target = $folder . basename($foto);
// Validasi upload dan simpan ke database
if (move_uploaded_file($tmp, $target)) {
$sql = "INSERT INTO tbl_artikel (nama_artikel, isi_artikel, foto) VALUES ('$judul', '$isi', 
'$foto')";
$query = mysqli_query($db, $sql);
if ($query) {
echo "<script>alert('Artikel berhasil ditambahkan.'); 
window.location='data_artikel.php';</script>";
} else {
echo "<script>alert('Gagal menyimpan data ke database.'); 
history.back();</script>";
}
} else {
echo "<script>alert('Gagal menyimpan artikel.'); 
history.back();</script>";
}
?>