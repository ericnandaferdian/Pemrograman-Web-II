<!DOCTYPE html>
<html>
<head>
    <title>PRAK304</title>
</head>
<body>
    <?php
    session_start();
    
    if (!isset($_SESSION['star_count'])) {
        $_SESSION['star_count'] = 1;
    }
    
    function displayStars($count) {
        for ($i = 0; $i < $count; $i++) {
            echo '<img src="star-images-9441.png" alt="Star" width="50" height="50">';
        }
    }
    
    if (isset($_POST['show'])) {
        $_SESSION['star_count'] = $_POST['star_count'];
    }
    
    if (isset($_POST['increase'])) {
        $_SESSION['star_count']++;
    }
    
    if (isset($_POST['decrease']) && $_SESSION['star_count'] > 1) {
        $_SESSION['star_count']--;
    }
    ?>

    <?php
    if (!isset($_POST['show']) && !isset($_POST['increase']) && !isset($_POST['decrease'])) {
        ?>
        <form method="post">
            <label for="star_count">Jumlah Bintang:</label>
            <input type="number" id="star_count" name="star_count" min="1" value="<?php echo $_SESSION['star_count']; ?>">
            <button type="submit" name="show">Tampilkan</button>
        </form>
        <?php
    }
    ?>

    <?php
    if (isset($_POST['show']) || isset($_POST['increase']) || isset($_POST['decrease'])) {
        echo "<p>Jumlah bintang: " . $_SESSION['star_count'] . "</p>";
        displayStars($_SESSION['star_count']);
    }
    ?>

    <?php
    if (isset($_POST['show']) || isset($_POST['increase']) || isset($_POST['decrease'])) {
        ?>
        <form method="post">
            <button type="submit" name="increase">Tambah</button>
            <button type="submit" name="decrease">Kurang</button>
        </form>
        <?php
    }
    ?>
</body>
</html>
