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
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>Daftar Smartphone Samsung
                    <?php
                    $modelSmartphone = [
                        "Samsung Galaxy S22",
                        "Samsung Galaxy S22+",
                        "Samsung Galaxy A03",
                        "Samsung Galaxy Xcover 5"
                    ];

                    foreach ($modelSmartphone as $device) {
                        echo "<tr><td>$device</td></tr>";
                    }
                    ?>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>
