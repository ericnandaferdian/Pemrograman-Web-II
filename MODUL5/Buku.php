<?php
// Buku.php
require 'Model.php';
$books = getAllBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku</h1>
    <a href="FormBuku.php">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo $book['id_buku']; ?></td>
                <td><?php echo $book['judul_buku']; ?></td>
                <td><?php echo $book['penulis']; ?></td>
                <td><?php echo $book['penerbit']; ?></td>
                <td><?php echo $book['tahun_terbit']; ?></td>
                <td>
                    <a href="FormBuku.php?id=<?php echo $book['id_buku']; ?>">Edit</a>
                    <a href="DeleteBuku.php?id=<?php echo $book['id_buku']; ?>" onclick="return confirm('Anda yakin ingin menghapus buku ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
