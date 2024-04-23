<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>

<body>
    <table border="1px">
        <caption>Tabela de informações sobre um carro</caption>
        <thead>
            <tr>
                <th scope='col'>Modelo</th>
                <th scope='col'>Ano</th>
                <th scope='col'>Km</th>
                <th scope='col'>Estado dos pneus</th>
                <th scope='col'>Número de portas</th>
                <th scope='col'>Passagem por leilão</th>
                <th scope='col'>Vel. Máxima</th>
            </tr>
        <tbody>
            <tr>

                <?php
                $carro = [
                    'Modelo' => 'Sedan',
                    'Ano' => 2024,
                    'Km' => 1000,
                    'Estado dos pneus' => 'Novo',
                    'Número de portas' => '4',
                    'Passagem por leilão' => 'Não',
                    'Vel. Máxima' => '300 Km/h',
                ];

                foreach ($carro as $key => $value) {
                    echo "<td scope=\"row\" >$value</td>";
                }
                ?>
            </tr>
        </tbody>
        </thead>
    </table>
</body>

</html>