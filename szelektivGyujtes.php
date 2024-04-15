<?php
include_once "backend.php"
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
    $szemet = array("papir", "bab konzerv","tejes doboz", "sörös üveg","sörös doboz", "nylon csomagolas")
    ?>
    <form action="#" method="get">
        <label for="szemetem">kidobando szemet</label>
        <select name="szemetem" id="szemetem">
        <?php
        foreach ($szemet as $ertek){
            echo "<option value=\"$ertek\">$ertek</option>";
        }
        ?>
        </select>
        <br>
        <input type="image" img src='forras/kuka.jpg' alt='kukak'name="kuka" id="kuka"></input>

    </form>
    
    <a href="vizVedelme.php">viz valami</a>
</body>
</html>