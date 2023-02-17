<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="calcula.php" id="calculadora" method="post">
        <label for="a">Digite o primeiro número</label>
        <input type="number" name="a">
        <br><br>

        <label for="b">Digite o segundo número</label>
        <input type="number" name="b">
        <br><br>

        <label for="operacoes">Escolha a operação</label>
        <select name="oper" style="margin-left: 3.5em;">
            <optgroup label="Operação">
                <option value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="/">Divisão</option>
                <option value="X">Multiplicação</option>
            </optgroup>
        </select>

        <input type="submit" value="Calcular!">

    </form>



</body>

</html>