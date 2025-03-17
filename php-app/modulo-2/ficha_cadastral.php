<?php 
    $name = "João Silva";
    $age = 25;
    $genre = 'M';
    $monthly_salary = 2210.30;
    $annul_salary = $monthly_salary * 12;
    $is_employed = false ? 'Empregado' : 'Desempregado';
    $retirement_age = ($genre == 'M') ? 65 : 62;
    $years_to_retirement = ($age >= $retirement_age) ? 'Pode se aposentar' : ($retirement_age - $age);
    $skills = ['PHP', 'JavaScript', 'HTML', 'CSS'];
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
    <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?=$name?></strong></p>
            <p>Idade: <strong><?=$age?></strong></p>
            <p>Sexo: <strong><?=$genre?></strong></p>
            <p>Salário Mensal: <strong>R$ <?=number_format($monthly_salary, 2, ',', '.')?></strong></p>
            <p>Salário Anual: <strong>R$ <?=number_format($annul_salary, 2, ',', '.')?></strong></p>
            <p>Status de Emprego: <strong><?=$is_employed?></strong></p>
            <p>Anos para Aposentadoria: <strong><?=$years_to_retirement?></strong></p>
            <p>Habilidades: <strong><?=implode(', ', $skills)?></strong></p>
        </div>
    </div>
</body>

</html>