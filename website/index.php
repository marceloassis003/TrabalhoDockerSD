<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pos quarentena || Sistemas distribuidos</title>
</head>
<body>
    <?php
        $result = file_get_contents("http://sd-node-container:9001/quarentena");
        $quarentena = json_decode($result);
    ?>

    <table>
    <thead>
        <tr> 
            <th>Atividade</th>
            <th>descriçao</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($quarentena as $quarentenas): ?>
            <tr> 
                <td>?php echo $quarentenas->Atividade; ?></td>
                <td>?php echo $quarentenas->descricao; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>