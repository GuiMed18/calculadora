<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="4; URL='calculadora.php '"/>
    <title>Resultado</title>
</head>
<body>
<?php
$fst = $_POST['a'];
$first_num = (int) $fst;

$scn = $_POST['b'];
$second_num = (int) $scn;

$calc = $_POST['oper'];

if ($first_num == false || $second_num == false) {
   echo "Preencha todos os campos!";
           
} else {
    switch ($calc) {
        case '+':
            $soma = $first_num + $second_num;
            echo "A soma entre $first_num e $second_num é $soma";
            break;

        case '-':
            $subtracao = $first_num - $second_num;
            echo "A subtração de $first_num e $second_num é $subtracao";
            break;

        case '/':
            $divisao = $first_num / $second_num;
            echo "A divisão entre $first_num e $second_num é $divisao";
            break;
        case 'X':
            $multiplicacao = $first_num * $second_num;
            echo "A multiplicação entre $first_num e $second_num é $multiplicacao";
            break;
        
    }
    
}
?>
</body>
</html>
