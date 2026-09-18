<?php

require_once("conexao.php");

$nome = "Teste";
$email = "teste@gmail.com";
$telefone = "38 9999-9999";
$senha = "1";

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$envio = $conexao->prepare("
    INSERT INTO usuarios (nome, email, telefone, senha)
    VALUES (?, ?, ?, ?)
");

$envio->bind_param(
    "ssss",
    $nome,
    $email,
    $telefone,
    $senhaHash
);

if ($envio->execute()) {

    echo "<script>
        alert('Usuário cadastrado com sucesso!');
        window.location.href = '../login.php';
    </script>";

    exit();

} else {

    error_log("Erro ao cadastrar usuário: " . $envio->error);

    echo "<script>
        alert('Erro ao cadastrar usuário!');
        window.history.back();
    </script>";

    exit();
}

$envio->close();
$conexao->close();