<?php
// Member.php
require 'Model.php';
$members = getAllMembers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
</head>
<body>
    <h1>Data Member</h1>
    <a href="FormMember.php">Tambah Member</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($members as $member): ?>
            <tr>
                <td><?php echo $member['id_member']; ?></td>
                <td><?php echo $member['nama_member']; ?></td>
                <td><?php echo $member['nomor_member']; ?></td>
                <td><?php echo $member['alamat']; ?></td>
                <td><?php echo $member['tgl_mendaftar']; ?></td>
                <td><?php echo $member['tgl_terakhir_bayar']; ?></td>
                <td>
                    <a href="FormMember.php?id=<?php echo $member['id_member']; ?>">Edit</a>
                    <a href="DeleteMember.php?id=<?php echo $member['id_member']; ?>" onclick="return confirm('Anda yakin ingin menghapus member ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
