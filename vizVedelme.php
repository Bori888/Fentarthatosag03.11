<?php
    include_once "viz.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <?php
    $teteje="<h1>Hogyan takarékoskodjunk a vizzel?</h1><h2>A Föld édes viz</h2>";
    echo $teteje;
    ?>
    <form action="viz.php" method="post">
        <label for="v">A folyadék áramlási képessége</label>
        <input type="number" name="v" id="v" value=1>
        <br>
        <label for="A">A folyadék áram keresztmetszete(m2): </label>
        <input type="number" name="a" id="A" value=1>
        <input type="submit" name="Számol" id="szamol" value="szamol">

    </form>


</body>
</html>