<!DOCTYPE html>
<html>
<head>
    <title>PRAK201</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Nama 1: <input type="text" name="nama1"><br>
    Nama 2: <input type="text" name="nama2"><br>
    Nama 3: <input type="text" name="nama3"><br>
    <input type="submit" name="submit" value="Urutkan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = [$_POST['nama1'], $_POST['nama2'], $_POST['nama3']];
    sort($nama);

    foreach ($nama as $val) {
        echo "<p>$val</p>";
    }
}
?>

</body>
</html>
