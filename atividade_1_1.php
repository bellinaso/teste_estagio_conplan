<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço menor de R$50,00</title>
</head>
<body>
    <?php
        $products = array(
            array(
                "name" => "Caneta Azul",
                "price" => 3.50
            ),
            array(
                "name" => "Caderno",
                "price" => 29.90
            ),
            array(
                "name" => "Mochila",
                "price" => 149.99
            ),
            array(
                "name" => "Fone de Ouvido",
                "price" => 45.00
            ),
            array(
                "name" => "Mouse Sem Fio",
                "price" => 59.90
            ),
            array(
                "name" => "Teclado Mecânico",
                "price" => 199.99
            ),
            array(
                "name" => "Luminária",
                "price" => 42.75
            ),
            array(
                "name" => "Pen Drive 32GB",
                "price" => 27.90
            ),
            array(
                "name" => "Webcam HD",
                "price" => 89.00
            ),
            array(
                "name" => "Organizador de Cabos",
                "price" => 12.30
            )
        );

        function filterPrice($array, $price) {
            $filtered_array = array();

            foreach($array as $array_item) {
                if($array_item["price"] < $price) {
                    array_push($filtered_array, $array_item);
                }
            }
            return $filtered_array;
        }
    ?>

    <div style="display: flex; flex-direction: row; gap: 3rem;">
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th colspan="2">LISTA DE PRODUTOS</th>
            </tr>
            <tr>
                <th>PREÇO</th>
                <th>NOME</th>
            </tr>
            <?php
                foreach ($products as $product) {
                    echo '
                        <tr>
                            <td>R$ '.$product["price"].'</td>
                            <td>'.$product["name"].'</td>
                        </tr>
                    ';
                }
            ?>
        </table>
        
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th colspan="2">PRODUTOS ABAIXO DE R$50,00</th>
            </tr>
            <tr>
                <th>PREÇO</th>
                <th>NOME</th>
            </tr>
            <?php
                foreach (filterPrice($products, 50) as $product) {
                    echo '
                        <tr>
                            <td>R$ '.$product["price"].'</td>
                            <td>'.$product["name"].'</td>
                        </tr>
                    ';
                }
            ?>
        </table>
    </div>
</body>
</html>