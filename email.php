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
  echo "Inscrição realizada com sucesso";
}

//INSERINDO NO BANCO DE DADOS

$inserirDados = "INSERT INTO usuarios (nome, sobrenome, email, mensagem) VALUES ('$nome','$sobrenome','$email','$mensagem')";
$resultadoUsuario = mysqli_query($conn, $inserirDados);


