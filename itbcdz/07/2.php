<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D07-2</title>
</head>
<body>
    <a href="1.php">Zadatak1</a>
    <a href="2.php">Zadatak2</a>
    <a href="3.php">Zadatak3</a>

    <p>2. Knjiga ima n poglavlja (broj n unosite sami).</p>
    <p>Čitalac je prvog dana pročitao a poglavlja, a drugog dana dva poglavlja više nego prvog dana.</p>
    <p>Na osnovu dodeljenih vrednosti, na ekranu ispisati koliko poglavlja je preostalo čitaocu da pročita do kraja knjige.</p>
    <p>Pretpostaviti da su vrednosti promenljivih n i a ispravno unete.</p>

    <hr>

    <?php
        $n = 18;
        
        echo "Knjiga ima $n poglavlja.<br>";
        //$a1 = 5;
        $a1 = rand(1, 8);
        echo "Prvog dana citalac je procitao $a1 poglavlja.<br>";
        $a2 = $a1 + 2;
        echo "Drugog dana citalac je procitao $a2 poglavlja.<br>";
        $neprocitano = $n -$a1 - $a2;
        echo "Ostalo mu je da procita jos $neprocitano poglavlja.<br>";
    ?>

    <hr>
    <h4>Osveziti stranicu za druge podatke</h4>    
</body>
</html>