<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha ==123){
    header("Location: liberado.php");
    echo "Senha correta, pode entrar";
}else{
    header("Location: bloqueado.php");
    echo "Acesso bloqueado" ;
}
?>