<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="post">
        <label for="tinggi">Tinggi :</label>
        <input type="text" name="tinggi"> <br>
        <label for="url_gambar">Alamat Gambar :</label>
        <input type="text" name="url_gambar"> <br>
        <button type="submit" name="tombol_cetak">Cetak</button>
    </form>

    <?php
        if( isset($_POST['tombol_cetak']) ) {
            $tinggi = $_POST['tinggi'];
            $baris = 1;
            $gambar = $_POST['url_gambar'];
            $spasi = $tinggi;
        }  
    ?>
    <?php if( isset($_POST['tombol_cetak']) ) : ?>
        <?php while($baris <= $tinggi) { ?>
            <?php for($s = 1; $s < $baris; $s++) { ?>
                <img style="width: 25px; opacity: 0;" src="<?= $gambar; ?>" alt="">
            <?php } ?>
            <?php for($g = $spasi; $g >= $baris; $g--) { ?>
                <img style="width : 25px" src="<?= $gambar; ?>" alt="">
            <?php } ?>
        <br>
        <?php 
            $baris++;
            $spasi = $tinggi;
        ?>
        <?php } ?>
    <?php endif; ?>
</body>
</html>
