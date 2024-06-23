<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Scores</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin-top: 20px; 
        }
        th, td {
            padding: 8px; 
            border: 1px solid black;
            text-align: left;
            font-size: 14px; 
        }
        th {
            background-color: #BFBEBE; 
        }
    </style>
</head>
<body>
    <?php
    $students = [
        ["Nama" => "Andi", "NIM" => "2101001", "UTS" => 87, "UAS" => 65],
        ["Nama" => "Budi", "NIM" => "2101002", "UTS" => 76, "UAS" => 79],
        ["Nama" => "Tono", "NIM" => "2101003", "UTS" => 50, "UAS" => 41],
        ["Nama" => "Jessica", "NIM" => "2101004", "UTS" => 60, "UAS" => 75],
    ];

    function hitungNilaiAkhir($uts, $uas) {
        return ($uts * 0.4) + ($uas * 0.6);
    }

    function tentukanGrade($nilaiAkhir) {
        if ($nilaiAkhir >= 80) {
            return "A";
        } elseif ($nilaiAkhir >= 70) {
            return "B";
        } elseif ($nilaiAkhir >= 60) {
            return "C";
        } elseif ($nilaiAkhir >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    foreach ($students as $index => $student) {
        $nilaiAkhir = hitungNilaiAkhir($student["UTS"], $student["UAS"]);
        $students[$index]["Nilai Akhir"] = $nilaiAkhir;
        $students[$index]["Grade"] = tentukanGrade($nilaiAkhir);
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student["Nama"]); ?></td>
                    <td><?php echo htmlspecialchars($student["NIM"]); ?></td>
                    <td><?php echo htmlspecialchars($student["UTS"]); ?></td>
                    <td><?php echo htmlspecialchars($student["UAS"]); ?></td>
                    <td><?php echo number_format($student["Nilai Akhir"], 1); ?></td>
                    <td><?php echo htmlspecialchars($student["Grade"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
