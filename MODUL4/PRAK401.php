<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 10px;
        }
        td {
            padding: 5px; 
            border: 1px solid black;
            text-align: center;
            font-size: 15px; 
            width: 30px; 
            height: 30px; 
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="panjang">Panjang :</label>
        <input type="text" id="panjang" name="panjang" required><br>
        <label for="lebar">Lebar :</label>
        <input type="text" id="lebar" name="lebar" required><br>
        <label for="nilai">Nilai :</label>
        <input type="text" id="nilai" name="nilai" required><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];

        $values = explode(" ", $nilai);
        $totalValues = count($values);

        if ($totalValues != $panjang * $lebar) {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        } else {
            echo "<table>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $values[$i * $lebar + $j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
