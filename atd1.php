<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
    <h1>Código para verificação - Par ou Impar</h1>

    <form method="POST">
    Digite um número inteiro:
    <input type="number" name="number" />
    <input type="submit" value="Enviar" />
</form>

    <!-- Código PHP -->
    <?php
    if (isset($_POST['number'])) {
    $resto = $_POST['number'] % 2;
    if ($resto == 0) {
        echo "O número ".$_POST['number']." é par.";
    } else {
        echo "O número ".$_POST['number']." é ímpar.";
    }
} ?>
</body>
</html>