<form action="add_comment.php" method="POST">
    <input type="hidden" name="article_id" value="1"> <!-- ID artikel -->
    <input type="text" name="name" placeholder="Nama Anda" required><br>
    <textarea name="comment" placeholder="Tulis komentar..." required></textarea><br>
    <button type="submit">Kirim Komentar</button>
</form>