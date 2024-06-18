<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <form method="post">
        Batas Bawah: <input type="number" name="lower_limit" required><br>
        Batas Atas: <input type="number" name="upper_limit" required><br>
        <input type="submit" name="print" value="Cetak">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lower_limit = $_POST['lower_limit'];
        $upper_limit = $_POST['upper_limit'];

        $number = $lower_limit;
        do {
            if (($number + 7) % 5 == 0) {
                echo '<img src="star-images-9441.png" alt="Star" width="20" height="20">';
            } else {
                echo $number . " ";
            }
            $number++;
        } while ($number <= $upper_limit);
    }
    ?>
</body>
</html>
