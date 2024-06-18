<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Nilai : <input type="text" name="nilai"><br>
    <button type="submit">Konversi</button><br><br>
</form>

<?php
    function ubahAngkaMenjadiKata($nilai) {
        if ($nilai == 0) {
            return 'Nol';
        } elseif ($nilai > 0 && $nilai <= 10) {
            return 'Satuan';
        } elseif ($nilai > 10 && $nilai < 20) {
            return 'Belasan';
        } elseif ($nilai >= 20 && $nilai < 100) {
            return 'Puluhan';
        } elseif ($nilai >= 100 && $nilai < 600) {
            return 'Ratusan';
        } else {
            return 'Nilai yang dimasukkan melebihi batas yang ditentukan';
        }
    }

    $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : '';

    if (!empty($nilai)) {
        $hasilUbah = ubahAngkaMenjadiKata($nilai);
        echo "<b>Hasil: $hasilUbah</b>";
    }
?>
</body>
</html>
