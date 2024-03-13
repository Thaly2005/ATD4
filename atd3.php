<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo, negativo ou neutro</title>
</head>
<body>
<form method="post" action="">
        <label for="number">Informe um número:</label>
        <input type="text" name="number" id="number" required>
        <button type="submit" name="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['number'];
 
        if ($num > 0){
            echo " O número informado é positivo";
        }elseif($num < 0){
          echo " O número informado é negativo";
        }else{
            echo " O número é neutro";
        }
    }
?>
</body>
</html>