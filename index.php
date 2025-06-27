<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Personal Web | Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
  <!-- Header -->
  <header class="bg-pink-500 text-white text-center p-6 text-2xl font-bold">
    Personal Web | Zahara Fauziyah
  </header>
  <!-- Navigation -->
  <nav class="bg-pink-300 text-white py-3">
    <ul class="flex justify-center space-x-10 font-medium text-lg">
      <li><a href="index.php" class="hover:underline">Artikel</a></li>
      <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
      <li><a href="about.php" class="hover:underline">About</a></li>
      <li><a href="admin/login.php" class="hover:underline">Login</a></li>
    </ul>
  </nav>
  <!-- Main Content -->
  <main class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6
mt-6">
    <!-- Artikel Utama -->
    <section class="md:col-span-2 bg-pink-300 p-6 rounded shadow">
      <h2 class="text-xl font-bold  mb-4 text-pink-900">Artikel Terbaru</h2>
      <div class="space-y-4">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='border-b pb-4'>";
          echo "<img src='images/{$data['foto']}' class='w-48 h-48 objectcover' alt='Gambar'>";
          echo "<h3 class='text-lg font-semibold text-pink-600'>" .
            htmlspecialchars($data['nama_artikel']) . "</h3>";
          echo "<p>" . htmlspecialchars($data['isi_artikel']) . "</p>";
          echo "</div>";
        }
        ?>
      </div>
    </section>
    <!-- Sidebar -->
    <aside class="bg-pink-300 p-6 rounded shadow">
      <h2 class="text-lg font-bold mb-4 text-pink-800">Daftar Artikel</h2>
      <ul class="space-y-2 list-disc list-inside text-gray-700">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<li>" . htmlspecialchars($data['nama_artikel']) . "</li>";
        }
        ?>
      </ul>
    </aside>
  </main>



  <!-- Form Komentar -->
  <h2 class="text-lg font-bold mb-4 text-pink-800 text-center uppercase tracking-wide">
    Tulis Komentar
  </h2>
  <div class="flex justify-center">
    <form action="simpan_komentar.php" method="POST" class="w-full max-w-md">
      <input type="hidden" name="id_artikel" value="<?php echo $id_artikel; ?>">

      <label>Nama:</label><br>
      <input type="text" name="nama_pengirim" required class="w-full border p-2 mb-4"><br>

      <label>Komentar:</label><br>
      <textarea name="isi_komentar" rows="4" required class="w-full border p-2 mb-4"></textarea><br>

      <div class="flex justify-between mt-4">
  <a href="artikel.php?id=<?= $id_artikel ?>" 
     class="bg-pink-500 text-white py-3 px-3 rounded hover:bg-pink-900">
    Kirim Komentar
  </a>

  <button type="submit"
     class="bg-pink-200 text-white py-3 px-2 rounded hover:bg-pink-500">
    Batal Kirim
  </button>
</div>
        
        
        </a>
      </div>
    </form>
  </div>
  <form action="simpan_komentar.php" method="POST">

  </form>

  <!-- Footer -->
  <footer class="bg-pink-500 text-white text-center py-4 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by suka boba
  </footer>
</body>

</html>