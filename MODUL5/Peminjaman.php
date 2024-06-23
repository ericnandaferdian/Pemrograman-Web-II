<?php
// Peminjaman.php
require 'Model.php';
$loans = getAllLoans();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman</title>
</head>
<body>
    <h1>Data Peminjaman</h1>
    <a href="FormPeminjaman.php">Tambah Peminjaman</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Member</th>
            <th>ID Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($loans as $loan): ?>
            <tr>
                <td><?php echo $loan['id_peminjaman']; ?></td>
                <td><?php echo $loan['id_member']; ?></td>
                <td><?php echo $loan['id_buku']; ?></td>
                <td><?php echo $loan['tgl_pinjam']; ?></td>
                <td><?php echo $loan['tgl_kembali']; ?></td>
                <td>
                    <a href="FormPeminjaman.php?id=<?php echo $loan['id_peminjaman']; ?>">Edit</a>
                    <a href="DeletePeminjaman.php?id=<?php echo $loan['id_peminjaman']; ?>" onclick="return confirm('Anda yakin ingin menghapus peminjaman ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
