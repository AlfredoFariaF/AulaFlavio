<?php

include("conexao.php");

$cpf= $_POST["cpf"];
$nome= $_POST["nome"];
$senha= $_POST["senha"];
$cpfantigo= $_POST["cpfantigo"];

include("validador.php");

if(!validarCPF($cpf)){
    header("Location: alterar.php?ERR=1");
    return 1;
}

if(!validarSenha($senha)){
    header("Location: alterar.php?ERR=2");
    return 2;
}

if(!validarNome($nome)){
    header("Location: alterar.php?ERR=3");
    return 3;
}

$sql = "update usuarios set cpf = ?, senha = ?, nome = ? where cpf = ?";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("ssss", $cpf, $senha, $nome, $cpfantigo);
    $stmt->execute();
    header("Location: alterar.php");

}else{
    die("erro");
}
?>