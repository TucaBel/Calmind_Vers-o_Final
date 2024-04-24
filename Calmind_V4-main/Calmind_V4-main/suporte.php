<?php
include_once("conexao.php");

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


$sql = "INSERT INTO mensagens_suporte (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
if (mysqli_query($conexao, $sql)) {
    header("Location: suporte.html");
} else {

    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
