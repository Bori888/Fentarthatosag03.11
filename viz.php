<?php

if(isset($_Post['szamol'])){
    $v=$_POST['v'];
    $a=$_POST['A'];
    $w=$a * $v;
    echo "<p>Terfogat:".$w."<\p>";
    


}
else{

}
?>