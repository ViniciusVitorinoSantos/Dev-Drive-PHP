<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
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
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página PHP</title>
</head>
<body>
<div>
    <?php
    $nome = issset($_POST['nome']) ? $_POST['nome'] :"não preenchido!";
    $idade= isset($_POST['idade']) ? $_POST['idade'] :"não preenchido!";
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] :"não preenchido!";
    ?>
</div>
</body>
</html>
