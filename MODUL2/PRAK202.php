<!DOCTYPE html>
<html>
<head>
    <title>PRAK202</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="inputNama">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['inputNama'])) { ?>
            <span style="color:red">*nama tidak boleh kosong</span>
        <?php } 
        ?>
        <br>

        NIM: <input type="text" name="inputNIM">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['inputNIM'])) { ?>
            <span style="color:red">*nim tidak boleh kosong</span>
        <?php } 
        ?>
        <br>

        Jenis Kelamin: <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['inputJenisKelamin'])) { ?>
            <span style="color:red">*jenis kelamin tidak boleh kosong</span>
        <?php } ?><br>
        
        <input type="radio" name="inputJenisKelamin" value="Laki-laki">Laki-laki <br>
        <input type="radio" name="inputJenisKelamin" value="Perempuan">Perempuan
        <br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNama = $_POST['inputNama'];
        $inputNIM = $_POST['inputNIM'];
        $inputJenisKelamin = $_POST['inputJenisKelamin'];

        if (!empty($inputNama) && !empty($inputNIM) && !empty($inputJenisKelamin)) {
            echo "<br><b>Output : </b><br>";
            echo "<br>$inputNama <br>";
            echo "$inputNIM <br>";
            echo "$inputJenisKelamin";
        }
    }
    ?>
</body>
</html>
