<!DOCTYPE html>
<html>
<head>
    <title>Program Cetak Karakter</title>
</head>
<body>   
    <form method="post">
        <input type="text" id="karakter_input" name="karakter_input" required>
        <button type="submit" name="kirim">submit</button>
    </form>
    
    <?php
    function printCharacter($input) {
        $input = strtoupper($input); 
        $length = strlen($input);
        
        for ($i = 0; $i < $length; $i++) {
            $char = $input[$i];
            echo strtoupper($char); 
            for ($j = 1; $j < $length; $j++) {
                echo strtolower($char); 
            }
        }
    }
    
    if (isset($_POST['kirim'])) {
        $karakter_input = $_POST['karakter_input'];
        printCharacter($karakter_input);
    }
    ?>
</body>
</html>
