<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
header('location:login.php');
exit;
}
$id = $_GET['id_artikel'];
$sql = "SELECT * FROM tbl_artikel WHERE id_artikel = '$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Artikel</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen"></body>
<!-- Header -->
<header class="bg-pink-400 text-white text-center py-6 shadow">
<h1 class="text-3xl font-bold">Edit Artikel</h1>
</header>
<div class="flex max-w-7xl mx-auto mt-8 px-4">
<!-- Sidebar -->
<aside class="w-1/4 bg-pink-100 rounded shadow p-4">
<h2 class="text-xl font-semibold text-pink-700 mb-4 text￾center">MENU</h2>
<ul class="space-y-2 text-pink-700">
<li><a href="beranda_admin.php" class="block hover:text-pink-400">Beranda</a></li>
<li><a href="data_artikel.php" class="block font-semibold text-pink-400">Kelola Artikel</a></li>
<li><a href="data_gallery.php" class="block hover:text-pink-400">Kelola Gallery</a></li>
<li><a href="about.php" class="block hover:text-pink-400">About</a></li>
<li>
<a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
class="block text-red-600 hover:underline font￾medium">Logout</a>
</li>
</ul>
</aside>
<!-- Main Content -->
<main class="w-3/4 bg-pink-100 rounded shadow p-6 ml-6">
<form action="proses_edit_artikel.php" method="post" class="space-y-
6">
<input type="hidden" name="id_artikel" value="<?php echo
$data['id_artikel']; ?>">
<div>
<label for="nama_artikel" class="block text-sm font-medium text￾pink-700 mb-1">Judul Artikel</label>
<input type="text" id="nama_artikel" name="nama_artikel" required
value="<?php echo htmlspecialchars($data['nama_artikel']); ?>"
class="w-full p-2 border rounded focus:outline-none focus:ring 
focus:border-blue-500">
</div>
<div>
<label for="isi_artikel" class="block text-sm font-medium text￾pink-700 mb-1">Isi Artikel</label>
<textarea id="isi_artikel" name="isi_artikel" rows="5" required
class="w-full p-2 border rounded focus:outline-none focus:ring 
focus:border-pink-500"><?php echo htmlspecialchars($data['isi_artikel']); 
?></textarea>
<div>
Page | 20
6. proses_edit_artikel.php
7. delete_artikel.php
<div class="flex justify-end space-x-4">
<button type="submit"
class="bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-
400 transition">Update</button>
<a href="data_artikel.php"
class="bg-pink-200 text-gray-700 px-4 py-2 rounded hover:bgpink-400 transition">Batal</a>
</div>
</form>
</main>
</div>
<!-- Footer -->
<footer class="bg-pink-400 text-white text-center py-4 mt-10">
&copy; <?php echo date('Y'); ?> | Created by zahara
</footer>
</body>
</html>