<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilyés Borbála</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <?php
    $elsoSzint = 'Ökoszisztéma';
    $masodikSzint = 'Társadalom';
    $harmadikSzint = 'Gazdaság';
    $negyedikSzint = 'Pénz';
    echo"<div class = 'egesz'>";

    echo"<div class= 'kep'>";
    echo"<img src='kep.PNG' alt='kep'>";
    echo"</div>";

    echo"<div class = 'szoveg'>";
    echo "<h1>A fentarthatóság szintjei</h1>";
    echo "<li>$elsoSzint</li>";
    echo "<li>$masodikSzint</li>";
    echo "<li>$harmadikSzint</li>";
    echo "<li>$negyedikSzint</li>";
    echo"</div>";

    echo"</div>";
    
    


    ?>
<table>
  <tr>
    <th>A megújuló erőforrások fogyasztása</th>
    <th>A környezet helyzete</th>
    <th>Fenntarthatóság</th>
  </tr>
  <tr>
    <td>több, mint amit a természet újratermelni képes</td>
    <td>a környezet pusztul</td>
    <td>nem fenntartható</td>
  </tr>
  <tr>
    <td>a természet újratermelő kapacitásával azonos mértékű</td>
    <td>környezeti egyensúly</td>
    <td>fenntartható, nem változó állapot</td>
  </tr>
  <tr>
    <td>kevesebb, mint amit a természet újratermelni képes</td>
    <td>a környezet megújul</td>
    <td>fenntartható fejlődés</td>
  </tr>
</table>

</body>
</html>
