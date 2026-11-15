<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio de PHP</title>
</head>
<body>
    <?php
        $dividendo = $_GET["d1"] ?? 0;
        $divisor = $_GET["d2"] ?? 1;
    ?>  
    <main>
        <h1>anatomia de uma Divisão</h1>
        <form action="" method="get"></form>
            <label for="di">Dividendo:</label>
            <input type="number" name="d1" id="d1" value="<?= $dividendo ?>" min>
            <label for="d2">Divisor:</label>
            <input type="number" name="d2" id="d2" value="<?= $divisor?>" min="1">
            <input type="submit" value="Calcular">
</form>
    </main>

    <section>
        <h2>estrutura da divisão</h2>
        <?php
            //calculos
            $resultado = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $resultado ?></td>
            </tr>
        </table>
    </section>
</body>
</html>