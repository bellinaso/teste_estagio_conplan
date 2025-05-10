<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade dos usuários</title>
</head>
<body>
    <?php
        $users = array(
            array(
                "name" => "Fulano",
                "age" => 30
            ),
            array(
                "name" => "Ciclano",
                "age" => 15
            ),
            array(
                "name" => "Beltrano",
                "age" => 12
            ),
            array(
                "name" => "Alcano",
                "age" => 30
            ),
            array(
                "name" => "Alcino",
                "age" => 30
            ),
            array(
                "name" => "Bruno :)",
                "age" => 18
            ),
        );

        $mature_users = array_filter($users, function($u) { return $u["age"] >= 18; });
        $minor_users = array_filter($users, function($u) { return $u["age"] < 18; });
    ?>

    <div style="display: flex; flex-direction: row; gap: 3rem;">
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th colspan="2">LISTA DE PESSOAS</th>
            </tr>
            <tr>
                <th>NOME</th>
                <th>IDADE</th>
            </tr>
            <?php
                foreach ($users as $user) {
                    echo '
                        <tr>
                        <td>'.$user["name"].'</td>
                            <td>'.$user["age"].'</td>
                        </tr>
                    ';
                }
            ?>
        </table>
        
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th colspan="2">PESSOAS MAIORES DE IDADE</th>
            </tr>
            <tr>
                <th>NOME</th>
                <th>IDADE</th>
            </tr>
            <?php
                foreach ($mature_users as $user) {
                    echo '
                        <tr>
                        <td>'.$user["name"].'</td>
                            <td>'.$user["age"].'</td>
                        </tr>
                    ';
                }
            ?>
        </table>

        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th colspan="2">PESSOAS MENORES DE IDADE</th>
            </tr>
            <tr>
                <th>NOME</th>
                <th>IDADE</th>
            </tr>
            <?php
                foreach ($minor_users as $user) {
                    echo '
                        <tr>
                        <td>'.$user["name"].'</td>
                            <td>'.$user["age"].'</td>
                        </tr>
                    ';
                }
            ?>
        </table>
    </div>
</body>
</html>