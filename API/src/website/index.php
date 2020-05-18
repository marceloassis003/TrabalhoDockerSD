<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pos quarentena || Sistemas distribuidos</title>
</head>
<body>
    <?php
        $result = file_get_contents("http://node-container:9000/quarentena");
        $quarentena = jason_decode($result);
    ?>

    <table>
    <thead>
        <tr> 
            <th>Atividade</th>
            <th>descriçao</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($quarentena as $quarentena): ?>
            <tr> 
                <td>?php echo $quarentena->Atividade; ?></td>
                <td>?php echo $quarentena->descricao; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>