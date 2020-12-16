<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D07-3</title>
</head>
<body>
    <a href="1.php">Zadatak1</a>
    <a href="2.php">Zadatak2</a>
    <a href="3.php">Zadatak3</a>

    <p>3. Pera i Mika su kupili dva ista džempera.</p>
    <p>Pera je dao p dinara, Mika je dao m dinara i dobili su kusur od k dinara.</p>
    <p>Brojeve p, m i k odredite proizvoljno.</p>
    <p>Na osnosvu unetih vrednosti, na ekranu ispisati koliki kusur treba da dobije Pera,</p>
    <p>a koliki kusur treba da dobije Mika, da bi jednako platili svako svoj džemper.</p>
      
    <hr>

    <?php
        $p = 1000;
        $m = 2000;
        $k = 1400;

        echo "Pera je dao: $p dinara<br>";
        echo "Mika je dao: $m dinara<br>";
        echo "<hr>";
        $cenaDzempera = ($p + $m - $k) / 2;
        echo "Cena dzempera je: $cenaDzempera dinara<br>";
        echo "Perin kusur je: " . ($p - $cenaDzempera) . " dinara<br>";
        echo "Mikin kusur je: " . ($m - $cenaDzempera) . " dinara<br>";
    ?>
</body>
</html>