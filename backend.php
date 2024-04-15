<?php
        if (isset($_GET['szemetem'])){
            $kivalasztottSzemet = $_GET["szemetem"];
            if($kivalasztottSzemet == "papir" ||
            $kivalasztottSzemet == "nylon csomagolas" ){
                echo"kék színes gyüjtö";
            }
            elseif($kivalasztottSzemet == "bab konzerv" ||
            $kivalasztottSzemet == "tejes doboz" ){
                echo"Sárga gyüjtő";
            }
            else{
                echo"NEm háznál gyüjtendő";
            }
        }
        else{
            echo"Még nem érkezett adat az ürlapról";
        }
    ?>