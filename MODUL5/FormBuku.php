<?php
// FormBuku.php
require 'Model.php';

$book = null;
if (isset($_GET['id'])) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$_GET['id']]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_buku'])) {
        updateBook($_POST['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    } else {
        insertBook($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    header('Location: Buku.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
</head>
<body>
    <h1><?php echo isset($book) ? 'Edit Buku' : 'Tambah Buku'; ?></h1>
    <form action="FormBuku.php" method="post">
        <?php if (isset($book)): ?>
            <input type="hidden" name="id_buku" value="<?php echo $book['id_buku']; ?>">
        <?php endif; ?>
        <label>Judul Buku:</label>
        <input type="text" name="judul" value="<?php echo isset($book) ? $book['judul_buku'] : ''; ?>" required><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" value="<?php echo isset($book) ? $book['penulis'] : ''; ?>" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="<?php echo isset($book) ? $book['penerbit'] : ''; ?>" required><br>
        <label>Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" value="<?php echo isset($book) ? $book['tahun_terbit'] : ''; ?>" required><br>
        <button type="submit"><?php echo isset($book) ? 'Update' : 'Tambah'; ?></button>
    </form>
</body>
</html>
