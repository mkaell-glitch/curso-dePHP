<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em PHP</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binario 0 = octal
    // $num = 010;
    // echo "o valor da variavel e $num";

    // $v = "jesus cristo de nazaré";
    // var_dump($v);

    // $num = 3e2; //3 X 10(2)
    // echo "o valor é $num";

    // $v = (int)"nhonho";
    // var_dump($v);

    // $num = (int)"950";
    // var_dump($num);

    //$casado = true;
    //var_dump($casado);
    //echo "o valor para casado é $casado";

    //$vet = [5, 2.5, "ronaldo", 3, false];
    //var_dump($vet)

    class pessoa {
        private string $nome;
    }

    $p = new pessoa;
    var_dump($p)
    ?>
</body>
</html>