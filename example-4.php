<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? null;
    $nome = trim($nome);
    $nome = stripslashes($nome);
    $nome = htmlspecialchars($nome);
    echo var_dump($nome);
    exit;
}

/**
 * < => &lt
 * > => &gt
 * " => &quote
 * ' => &#039
 * & => &amp
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 4</title>
</head>
<body>
    <form action="example-4.php" method="post">
        <input type="text" name="nome">
        <input type="submit" value="enviar">
    </form>
</body>
</html>