<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
        <form action="test.php" method="post">
        <div>
            <label name="n1">numero 1:</label>
            <input type="number" name="n1">
        </div>
        <div>
            <label name="n2">numero 2:</label>
            <input type="number" name="n2">
        </div>
        <div>
            <!--<input name="ope">
            <label>operação:</label>-->
                <input type="radio" name="ope" value="*" id="x">
                <label for="*">*</label><br>
                <input type="radio" name="ope" value="/" id="d">
                <label for="d">/</label><br>
                <input type="radio" name="ope" value="+" id="ma">
                <label for="ma">+</label><br>
                <input type="radio" name="ope" value="-" id="me">
                <label for="me">-</label>
        </div>
        <div>
            <input type="submit">
        </div>
        </form>
</body>
</html>

<?php
//Crie uma pagina com formulario onde o usuario escolha a operação e 2 numeros e o action do formulario faça o calculo e apresente. 
?>