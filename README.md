# Personal-website!Deskripsi
Deskripsi

Studi kasus ini bertujuan untuk membangun sebuah aplikasi web personal yang bersifat dinamis, di mana pemilik web dapat mengelola konten secara mandiri melalui halaman admin. Aplikasi dikembangkan menggunakan PHP dan menyimpan data menggunakan database MySQL. Tampilan antarmuka dirancang menggunakan Tailwind CSS agar responsif, modern, dan mudah dikustomisasi.

Website ini memiliki dua bagian utama:

Halaman Publik, yang dapat diakses oleh semua pengunjung.
Halaman Admin, yang hanya dapat diakses setelah login, digunakan untuk mengelola konten.
Fitur-fitur

Login & Logout (Halaman login admin dengan validasi, Sistem sesi untuk melindungi halaman admin, Logout untuk mengakhiri sesi dengan aman)
Manajemen Artikel (Tambah artikel (judul + isi), Edit artikel yang sudah ada, Hapus artikel, Tampilkan daftar artikel di halaman utama, Sidebar "Daftar Artikel" yang terupdate otomatis)
Manajemen Gallery (Upload gambar beserta judul, Ganti gambar dan judul yang sudah ada, Hapus gambar, Tampilkan gambar di halaman galeri publik dalam grid responsif)
Manajemen About (Tambah deskripsi tentang diri, Edit dan hapus bagian “About”, Tampilkan deskripsi di halaman publik about.php)
Dashboard Statistik Admin (Menampilkan ringkasan jumlah: Artikel & Gambar di gallery)
Halaman Publik yang Rapi & Dinamis (Artikel terbaru ditampilkan otomatis, Galeri responsif dan ringan, Tentang Saya tampil dengan struktur informatif)
Teknologi yang Digunakan

Bahasa Pemrograman : PHP
Database : MySQL
Frontend : Tailwind CSS, HTML
Server Side : Apache / XAMPP
Struktur Folder
![Screenshot (110)](https://github.com/user-attachments/assets/8de61775-9b00-497f-8760-ca3a4430b22e)
Halaman ini merupakan tampilan utama yang menyajikan daftar artikel terbaru yang telah dipublikasikan. Artikel ditampilkan secara ringkas dan rapi dengan susunan dua kolom: kolom artikel terbaru di sebelah kiri, dan daftar judul artikel lainnya di sebelah kanan. Pengunjung dapat membaca cuplikan artikel untuk mengetahui isi singkatnya sebelum mengakses halaman lengkap.
![Screenshot (111)](https://github.com/user-attachments/assets/c76fe3a7-46a4-41fe-98c5-ca7323445765)
Elemen Tambahan – Komentar
Elemen tambahan pada halaman ini adalah fitur komentar yang terletak di bagian bawah artikel. Pengunjung dapat mengisi nama dan menulis komentar sebagai tanggapan terhadap artikel yang dibaca. Kolom komentar ini terdiri dari form input nama, kolom teks komentar, serta tombol kirim dan batal. Fitur ini menambah interaksi antara pembaca dan penulis artikel dalam halaman personal web.
![Screenshot (112)](https://github.com/user-attachments/assets/a1d163ca-941f-4819-b5f8-451df2a7516b)
Halaman Gallery

Halaman Gallery menampilkan berbagai foto pribadi atau momen penting pemilik web. Dalam halaman ini, ditampilkan galeri foto seperti:
	•	Foto bersama teman saat pembagian ijazah.
	•	Foto wisuda.
	•	Momen perayaan Hari Guru.
	•	Foto-foto di lingkungan sekolah.
Setiap foto memiliki keterangan di bawahnya, sehingga pengunjung dapat memahami konteks atau kenangan dari foto tersebut.

![image](https://github.com/user-attachments/assets/4f30bc97-df69-4147-a401-377141d15366)

Halaman About

Halaman ini berisi profil singkat dari pemilik website, yaitu Zahara Fauziyah. Teks ditampilkan dalam kotak berwarna pink yang menarik dan ramah pembaca. Dalam deskripsinya, Zahara memperkenalkan diri secara santai, menceritakan hobi, alasan memilih jurusan Sistem Informasi, dan perjalanan pendidikan dari SD hingga menjadi mahasiswa Universitas Subang.


![image](https://github.com/user-attachments/assets/be3df0a8-6fba-4990-8046-2ba8106aedb7)

Halaman Dashboard Admin

Halaman ini merupakan halaman awal yang muncul setelah admin berhasil login. Tampilan dashboard didesain dengan nuansa warna pink yang menarik dan karakter visual yang lucu. Di bagian tengah halaman terdapat sambutan untuk admin serta informasi jumlah artikel dan jumlah foto di galeri. Navigasi utama terletak di sisi kiri halaman, berisi menu untuk beranda, kelola artikel, kelola galeri, about, dan logout.


