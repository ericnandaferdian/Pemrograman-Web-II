<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
</head>
<body>
    <form method="post">
        Masukkan suhu: <input type="text" name="temperature" required><br>
        Dari:<br>
        <input type="radio" name="original_unit" value="celcius" checked> Celcius (C)<br>
        <input type="radio" name="original_unit" value="fahrenheit"> Fahrenheit (F)<br>
        <input type="radio" name="original_unit" value="reamur"> Reamur (Re)<br>
        <input type="radio" name="original_unit" value="kelvin"> Kelvin (K)<br>
        Ke:<br>
        <input type="radio" name="target_unit" value="celcius" checked> Celcius (C)<br>
        <input type="radio" name="target_unit" value="fahrenheit"> Fahrenheit (F)<br>
        <input type="radio" name="target_unit" value="reamur"> Reamur (Re)<br>
        <input type="radio" name="target_unit" value="kelvin"> Kelvin (K)<br>
        <input type="submit" name="convert" value="Konversi">
    </form>
    <br>

    <?php
    function convertTemperature($value, $from, $to) {
        if($from == $to) {
            return $value;
        }
        switch($from) {
            case 'celcius':
                switch($to) {
                    case 'fahrenheit': return ($value * 9/5) + 32;
                    case 'reamur': return $value * 4/5;
                    case 'kelvin': return $value + 273.15;
                }
                break;
            case 'fahrenheit':
                switch($to) {
                    case 'celcius': return ($value - 32) * 5/9;
                    case 'reamur': return ($value - 32) * 4/9;
                    case 'kelvin': return ($value + 459.67) * 5/9;
                }
                break;
            case 'reamur':
                switch($to) {
                    case 'celcius': return $value * 5/4;
                    case 'fahrenheit': return ($value * 9/4) + 32;
                    case 'kelvin': return ($value * 5/4) + 273.15;
                }
                break;
            case 'kelvin':
                switch($to) {
                    case 'celcius': return $value - 273.15;
                    case 'fahrenheit': return ($value * 9/5) - 459.67;
                    case 'reamur': return ($value - 273.15) * 4/5;
                }
                break;
        }
    }

    if(isset($_POST['convert'])){
        $temperature = $_POST['temperature'];
        $original_unit = $_POST['original_unit'];
        $target_unit = $_POST['target_unit'];

        $result = convertTemperature($temperature, $original_unit, $target_unit);
        echo "<b>Hasil Konversi:</b> " . $result . "°" . strtoupper($target_unit[0]);
    }
    ?>
</body>
</html>
