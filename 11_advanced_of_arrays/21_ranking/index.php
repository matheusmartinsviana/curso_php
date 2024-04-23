<?php //sort: asort para ordenar array associativo | sort para ordenar uma estrutura de dados simples array | ksort para ordenar o array pela chave | arsort para ordenar o array descrecentemente

$players = [
    'madZd' => 12192,
    'opTry' => 14392,
    'qs_scope' => 21213,
    'm4tzada' => 31121,
    '1shotz' => 12119
];

arsort($players);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            margin: 0;
        }

        table {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        tbody {
            flex-direction: column;
        }

        td:hover {
            background-color: #D9D9D9;
        }

    </style>

</head>

<body>
    <table>
        <caption>Ranking de Players com mais Commits na temporada 3 de Análise e Desenvolvimento de Sistemas</caption>
        <thead>
            <tr>
                <th>Player</th>
                <th>Commits</th>
            </tr>
        <tbody>
            <?php
            foreach ($players as $player => $commit) {
                echo "<tr> <td> $player </td>";
                echo "<td> $commit </td> </tr>";
            }
            ?>
        </tbody>
        </thead>
    </table>
</body>

</html>