<?php
$idade = $_POST['idade'];
$altura = $_POST['altura'];

if($idade > 0 && $idade <122 && $altura>0 && $altura < 2.5){
    echo "Você tem $idade ano(s) e mede $altura metros";
}else{
    echo "Você digitou algum valor incorretamente , tente novamente";
}
?>