<?php
// FormMember.php
require 'Model.php';

$member = null;
if (isset($_GET['id'])) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$_GET['id']]);
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_member'])) {
        updateMember($_POST['id_member'], $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    } else {
        insertMember($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    }
    header('Location: Member.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Member</title>
</head>
<body>
    <h1><?php echo isset($member) ? 'Edit Member' : 'Tambah Member'; ?></h1>
    <form action="FormMember.php" method="post">
        <?php if (isset($member)): ?>
            <input type="hidden" name="id_member" value="<?php echo $member['id_member']; ?>">
        <?php endif; ?>
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo isset($member) ? $member['nama_member'] : ''; ?>" required><br>
        <label>Nomor Member:</label>
        <input type="text" name="nomor" value="<?php echo isset($member) ? $member['nomor_member'] : ''; ?>" required><br>
        <label>Alamat:</label>
        <textarea name="alamat" required><?php echo isset($member) ? $member['alamat'] : ''; ?></textarea><br>
        <label>Tanggal Mendaftar:</label>
        <input type="datetime-local" name="tgl_mendaftar" value="<?php echo isset($member) ? date('Y-m-d\TH:i', strtotime($member['tgl_mendaftar'])) : ''; ?>" required><br>
        <label>Tanggal Terakhir Bayar:</label>
        <input type="date" name="tgl_terakhir_bayar" value="<?php echo isset($member) ? $member['tgl_terakhir_bayar'] : ''; ?>" required><br>
        <button type="submit"><?php echo isset($member) ? 'Update' : 'Tambah'; ?></button>
    </form>
</body>
</html>
