<?php
include("valida.php");
?>
<html lang="pt-br">
<head>
    <title>Primeiro</title>
    <link rel="stylesheet" href="css_primeiro.css">
    <link rel="stylesheet" href="css_lista.css">
</head>
<body>
    <div id="container_all">
        <div id="container_cabecalho">
                <h1>
                    <div class="apress">
                        Olá <?=$_SESSION["nome"];?>
                    </div>
                </h1>
                <a href="sair.php">
                    <div class="botao">SAIR</div>
                </a>
        </div>
        <div id="container_menu">
            <h2>MENU</h2>
            <div id="menu_opt">
                <a class="menu" href="cadastrar.php">CADASTRAR USUARIO</a><br><br>
                <a class="menu" href="listar.php">LISTAR USUARIOS</a><br><br> 
                <a class="menu" href="alterar.php">ALTERAR CADASTRO</a><br><br><br><br>
                <a class="home"href="primeiro.php">HOME</a>
            </div>
        </div>
        <div id="container_body">
            <center>
                <h2>Listar usuarios</h2>
                <table>
                    <tr id="cor_tabprim">
                        <td><div class="titulo">CPF</div></td>
                        <td><div class="titulo">NOME</div></td>
                        <td><div class="titulo">SENHA</div></td>
                    </tr>
                    <?php
                    include("conexao.php");

                    $sql="select * from usuarios";
                    $resultado = $conn->query($sql);

                    while($row = $resultado->fetch_assoc()){
                    ?>
    
                    <tr id="cor_tabseg">
                        <td><div class="corpo"><?=$row["cpf"];?></div></td>
                        <td><div class="corpo"><?=$row["nome"];?></div></td>
                        <td><div class="corpo"><?=$row["senha"];?></div></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </center>
        </div>
    </div>
</body>
</html>