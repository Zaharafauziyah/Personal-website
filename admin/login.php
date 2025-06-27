<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Administrator</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('../images/.gif');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">
  <div class="bg-pink-100/10 backdrop-blur-md shadow-lg rounded-lg p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-pink-400 mb-6">Login Administrator</h2>
    <form action="cek_login.php" method="post" class="space-y-5">
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" name="username" id="username" required
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" required
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div class="flex justify-between">
        <button type="submit"
          class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">Login</button>
        <button type="reset"
          class="bg-pink-400 text-white font-bold py-2 px-4 rounded hover:bg-pink-500">Cancel</button>
      </div>
    </form>
    <p class="text-center text-gray-500 mt-4">&copy; 2025 - zahara</p>
  </div>
</body>
</html>