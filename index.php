<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #444;
            margin-bottom: 20px;
        }
        .php-info {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 8px;
            display: inline-block;
        }
        .table-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        table {
            width: 80%;
            max-width: 600px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #6c7ae0;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h1>Informações do PHP e Carros</h1>

    <div class="php-info">
        <?php
        ini_set("display_errors", 1);
        echo 'Versão Atual do PHP: ' . phpversion();
        ?>
    </div>

    <?php
    $servername = "db";
    $username = "root";
    $password = "root";
    $database = "mydb";

    // Criar conexão
    $link = new mysqli($servername, $username, $password, $database);

    // Verificar conexão
    if (mysqli_connect_errno()) {
        printf("Falha na conexão: %s\n", mysqli_connect_error());
        exit();
    }

    // Query para obter dados
    $query = "SELECT * FROM carro";

    echo '<div class="table-container"><table>';
    echo '<tr><th>ID</th><th>Nome</th><th>Cor</th></tr>';

    if ($result = mysqli_query($link, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["nome"] . '</td>';
            echo '<td>' . $row["cor"] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
    }

    echo '</table></div>';

    mysqli_close($link);
    ?>

</body>

</html>
