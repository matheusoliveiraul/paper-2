<?php

//Dados do formulario
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


//Conectando ao servidor
$nomeServidor = "localhost";
$database = "registro";
$usuario = "root";
$senha = "";
// criando conexao
$conn = mysqli_connect($nomeServidor, $usuario, $senha, $database);

// verificando conexao
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
} else {
  echo "A conexão foi um Sucesso";
}

//INSERINDO NO BANCO DE DADOS
//Houve um erro quando a mensagem tinha aspas '', verificar isso

$inserirDados = "INSERT INTO usuarios (nome, sobrenome, email, mensagem) VALUES ('$nome','$sobrenome','$email','$mensagem')";
$resultadoUsuario = mysqli_query($conn, $inserirDados);
