<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>formulario com validações</title>
    <style>
        h2 {
            font-family: Impact Arial sans-sefif;
            text-shadow: 1px 1px 1px blue;
        }

        a {
            color: blue; /* Cor padrão do link */
            transition: color 0.3s, font-size 0.3s; /* Adiciona uma transição suave */
        }

        a:hover {
            text-decoration: none; /* Remove o sublinhado do link */
            color: black; /* Cor ao passar o mouse */
            font-size: 1.2em; /* Aumenta o tamanho do texto ao passar o mouse */
        }
    </style>
</head>
<body>
<div>
    <?php

    $nome = isset($_GET["nome"]) ? $_GET["nome"] : $_GET["Nome não informado!"]; //isset -> se foi configurado
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : $_GET[" Ano não informado"];
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : $_GET["Sexo não informado"];
    $idade = date("Y") - $ano;


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $ano = filter_input(INPUT_POST, "ano", FILTER_VALIDATE_INT);
        $sexo = filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING);

        if ($nome && $ano && $sexo) {
            $idade = date("Y") - $ano;
            echo "<h2>$nome nasceu em $ano, é $sexo e tem $idade anos de idade.</h2>";
        } else {
            echo "<h2>Dados inválidos. Por favor, preencha todos os campos corretamente.</h2>";
        }
    }
    echo "<button><a href=\"exercicio02.html\">🚶‍♂️voltar</a></button>";
    ?>
</div>
</body>
</html>
