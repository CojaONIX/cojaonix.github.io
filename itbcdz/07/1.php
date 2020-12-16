<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D07-1</title>
</head>
<body>
    <a href="1.php">Zadatak1</a>
    <a href="2.php">Zadatak2</a>
    <a href="3.php">Zadatak3</a>

    <h3>1. Izvršiti konverziju temperature iz Farenhajta u Kelvine i obratno, ukoliko su date sledeće dve formule:</h3>
    <p>Celzijus = (Farenhajt - 32) * 5/9</p>
    <p>Kelvin = Celzijus + 273.15</p>

    <hr>

    <h4>
        <?php
            //$testF = -15;
            //$testK = 300;
            $testF = date('s') - 20;
            $testK = rand(0, 500);
            $FtoK = round(($testF - 32) * 5 / 9 + 273.15, 2);
            $KtoF = ($testK - 273.15) * 9 / 5 + 32;
            echo "Test vrednost F - sekunde trenutnog vremena umanjeno za 20<br>$testF F = $FtoK K<br>";
            echo "Test vrednost K - random broj u rasponu od 0 do 500<br>$testK K = $KtoF F<br>";
        ?>
    </h4>

    <hr>
    <h4>Osveziti stranicu za druge podatke</h4>
</body>
</html>