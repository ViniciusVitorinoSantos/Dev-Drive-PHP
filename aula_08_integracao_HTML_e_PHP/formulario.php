<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
    <title>Minha Página PHP</title>

</head>
<body>
<div>

<?php
    $valor = $_GET['val'];//recebe os dados pelo método GET do html.
    echo"<h2>O valor enviado foi $valor</h2>";
    $rq = sqrt($valor);
    echo"<h2>A raiz quadrada de $valor é : " .number_format($rq,2)."</h2>";//number_format($valor,2) para duas casas decimais.
    echo "<a href=\"formulario.html\"> ← voltar </a>";
?>

</div>
</body>
</html>
