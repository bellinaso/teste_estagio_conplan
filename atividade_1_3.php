<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de nota</title>
</head>
<body>
    <div>
        <form action="/atividade_1_3.php" method="post">
            <h1>Calculadora de média</h1>
            <div class="form-row">
                <label for="first-grade">
                    1&deg; nota
                </label>
                <input type="number" name="first_grade" id="first-grade" placeholder="Insira aqui a 1&deg; nota" required>
            </div>
            <div class="form-row">
                <label for="second-grade">
                    2&deg; nota
                </label>
                <input type="number" name="second_grade" id="second-grade" placeholder="Insira aqui a 2&deg; nota" required>
            </div>
            <div class="form-row">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <div>
        <?php
            if($_POST) {
                if(
                isset($_POST["first_grade"]) && $_POST["first_grade"] != null &&
                isset($_POST["second_grade"]) && $_POST["second_grade"] != null
                ) {
                    $first_grade = $_POST["first_grade"];
                    $second_grade = $_POST["second_grade"];

                    $grade_avg = ($first_grade + $second_grade)/2;
                    $grade_approved =  $grade_avg >= 7 ? "Aprovado" : "Reprovado";

                    echo '<p>Média do aluno: '.$grade_avg.'</p>';
                    echo '<p>Situação do aluno: '.$grade_approved.'</p>';
                }
                else {
                    echo '<p>Algo deu errado! Verifique se todos os campos foram preenchidos corretamente.</p>';
                }
            }
        ?>
    </div>
</body>
</html>