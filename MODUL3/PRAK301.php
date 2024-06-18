<!DOCTYPE html>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>

<form method="post" action="">
    <label for="total_participants">Jumlah Peserta:</label>
    <input type="number" id="total_participants" name="total_participants" min="1" required><br>
    <button type="submit">Cetak</button><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_participants = $_POST['total_participants'];
    $index = 1;

    while ($index <= $total_participants) {
        $text_color = ($index % 2 != 0) ? 'red' : 'green';
        echo '<span style="color: ' . $text_color . '; font-family: \'Times New Roman\', Times, serif;"><br>Peserta ke-' . $index . '</span><br>';
        $index++;
    }
}
?>

</body>
</html>
