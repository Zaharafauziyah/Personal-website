<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
header('location:login.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambah About</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
<!-- Header -->
<header class="bg-pink-500 text-white text-center py-6 shadow">
<h1 class="text-3xl font-bold">Tambah Data About</h1>
</header>
<div class="flex max-w-7xl mx-auto mt-8 px-4">
 <!-- Sidebar -->
<aside class="w-1/4 bg-pink-100 rounded shadow p-4">
<h2 class="text-xl font-semibold text-pink-600 mb-4 textcenter">MENU</h2>
<ul class="space-y-2 text-pink-900">
<li><a href="beranda_admin.php" class="block hover:text-pink-400">Beranda</a></li>
<li><a href="data_artikel.php" class="block hover:text-pink-400">Kelola Artikel</a></li>
<li><a href="data_gallery.php" class="block hover:text-pink-400">Kelola Gallery</a></li>
<li><a href="about.php" class="block font-semibold text-pink-800">About</a></li>
<li>
<a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
class="block text-red-600 hover:underline fontmedium">Logout</a>
</li>
</ul>
</aside>
<!-- Main Content -->
<main class="w-3/4 bg-pink-100 rounded shadow p-6 ml-6">
<form action="proses_add_about.php" method="post" class="space-y-6">
<div>
<label for="about" class="block text-sm font-medium text-pink-700 
mb-1">About</label>
<textarea id="about" name="about" rows="5" required
class="w-full p-2 border rounded focus:outline-none focus:ring 
focus:border-pink-500"></textarea>
</div>
<div class="flex justify-end space-x-4">
<button type="submit"
class="bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-800 transition">Simpan</button>
<a href="about.php"
class="bg-pink-300 text-pink-700 px-4 py-2 rounded hover:bgpink-400 transition">Batal</a>
</div>
</form>
</main>
</div>
<!-- Footer -->
<footer class="bg-pink-500 text-white text-center py-4 mt-10">
&copy; <?php echo date('Y'); ?> | Created by zahara
</footer>
</body>
</html>