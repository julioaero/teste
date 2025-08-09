<?php

$db_servidor = 'localhost';
$db_usuario = 'root';
$db_senha = ''; 
$db_nomeDB = 'db_clientes';

$conexao = new mysqli($db_servidor, $db_usuario, $db_senha, $db_nomeDB);

if($conexao -> connect_errno) {
    echo "Erro";
} else {
    echo "Parabéns! Você agora está inscrito para receber novidades e conteúdos exclusivos!";
} 
?>