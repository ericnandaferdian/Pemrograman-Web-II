<?php
// FormPeminjaman.php
require 'Model.php';

$loan = null;
if (isset($_GET['id'])) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$_GET['id']]);
    $loan = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_peminjaman'])) {
        updateLoan($_POST['id_peminjaman'], $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    } else {
        insertLoan($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    header('Location: Peminjaman.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
</head>
<body>
    <h1><?php echo isset($loan) ? 'Edit Peminjaman' : 'Tambah Peminjaman'; ?></h1>
    <form action="FormPeminjaman.php" method="post">
        <?php if (isset($loan)): ?>
            <input type="hidden" name="id_peminjaman" value="<?php echo $loan['id_peminjaman']; ?>">
        <?php endif; ?>
        <label>ID Member:</label>
        <input type="number" name="id_member" value="<?php echo isset($loan) ? $loan['id_member'] : ''; ?>" required><br>
        <label>ID Buku:</label>
        <input type="number" name="id_buku" value="<?php echo isset($loan) ? $loan['id_buku'] : ''; ?>" required><br>
        <label>Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" value="<?php echo isset($loan) ? $loan['tgl_pinjam'] : ''; ?>" required><br>
        <label>Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" value="<?php echo isset($loan) ? $loan['tgl_kembali'] : ''; ?>" required><br>
        <button type="submit"><?php echo isset($loan) ? 'Update' : 'Tambah'; ?></button>
    </form>
</body>
</html>
