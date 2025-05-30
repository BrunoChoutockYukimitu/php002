<?php
$tabuada = $_POST['tabuada'];
$num =  0;
while($num<10){
    $num = $num + 1;
    echo $num * $tabuada . "<br>";
    }

?>