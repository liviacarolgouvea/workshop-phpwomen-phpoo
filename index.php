<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão acadêmica</title>
</head>
<body>
    <?php
    require './Pessoa.php';
    require './Estudante.php';
    require './Professor.php';
    $estudante = new Estudante('Maria', '9895-4258', 'maria@maria.com');
    echo $estudante->disciplinasMatriculadas();
    ?>

    <br><hr>

    <?php
    $ira = $estudante->atualizaIRA(9);
    echo "Novo IRA {$ira} <br>";

    $ira2 = $estudante->atualizaIRA(5);
    echo "Novo IRA {$ira2} <br>";
    ?>

    <br><hr>

    <?php
        $estudante->nome = 'Maria';
        $estudante->matricula = '999999999';
        $dadosEstudante = $estudante->verEstudante();
        foreach ($dadosEstudante as $key => $value) {
            echo "{$key}: {$value} <br>";
        }

        //$estudante->inserirDados();
    ?>

    <br><hr>

    <?php
    $professor = new Professor('José', '9853-7541', 'jose@jose.com.br');
    $professor->criaProfessor('PHP OO', '4.000');
    ?>
</body>
</html>