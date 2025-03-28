<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    //mostra os erros
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    // Controles
    $txt = isset($_POST['t']) ? $_POST['t'] : "Texto não informado!";
    $tam = isset($_POST['tam']) ? $_POST['tam'] : "Tamanho não informado!";
    $cor = isset($_POST['cor']) ? $_POST['cor'] : "#000000"; // Cor padrão preto
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Personalizar texto</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
    echo "<span class='texto'>$txt</span>";
    echo "<br/>";
    echo '<a href="txtPersonal.html"><button> 🚶‍♂️ VOLTAR</button></a>';
    ?>
</div>
</body>
</html>