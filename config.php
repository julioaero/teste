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
<?php
if (isset($_POST['submit'])) {
 include_once('config.php');
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 // Insere os dados na tabela tb_inscritos 
 $resultado = mysqli_query($conexao, "INSERT INTO tb_inscritos(nome, email) VALUES
('$nome', '$email')");
}
?>
