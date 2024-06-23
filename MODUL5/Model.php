<?php
// Model.php
require 'Koneksi.php';

// Member
function getAllMembers() {
    $pdo = koneksiDatabase();
    $stmt = $pdo->query("SELECT * FROM member");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?");
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id]);
}

function deleteMember($id) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("DELETE FROM member WHERE id_member = ?");
    return $stmt->execute([$id]);
}

// Buku
function getAllBooks() {
    $pdo = koneksiDatabase();
    $stmt = $pdo->query("SELECT * FROM buku");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertBook($judul, $penulis, $penerbit, $tahun_terbit) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun_terbit]);
}

function updateBook($id, $judul, $penulis, $penerbit, $tahun_terbit) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?");
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun_terbit, $id]);
}

function deleteBook($id) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("DELETE FROM buku WHERE id_buku = ?");
    return $stmt->execute([$id]);
}

// Peminjaman
function getAllLoans() {
    $pdo = koneksiDatabase();
    $stmt = $pdo->query("SELECT * FROM peminjaman");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertLoan($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
}

function updateLoan($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("UPDATE peminjaman SET id_member = ?, id_buku = ?, tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?");
    return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id]);
}

function deleteLoan($id) {
    $pdo = koneksiDatabase();
    $stmt = $pdo->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    return $stmt->execute([$id]);
}
?>
