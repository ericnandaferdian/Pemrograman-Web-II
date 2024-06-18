<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        table {
            border: 1px solid;
        }

        th, td {
            border: 1px solid;
            text-align: left;
            padding: 2px;
        }

        th.judul {
            background-color: red;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th class="judul">Daftar Smartphone Samsung</th>
            </tr>
            <?php
            $samsungModels = [
                "Galaxy S22" => "Samsung Galaxy S22",
                "Galaxy S22+" => "Samsung Galaxy S22+",
                "Galaxy A03" => "Samsung Galaxy A03",
                "Xcover 5" => "Samsung Galaxy Xcover 5"
            ];

            foreach ($samsungModels as $model => $name) {
                echo "<tr><td>$name</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
