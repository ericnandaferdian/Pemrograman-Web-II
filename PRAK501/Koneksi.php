<?php
// Koneksi.php
function koneksiDatabase() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=prak5', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    }
}
?>
