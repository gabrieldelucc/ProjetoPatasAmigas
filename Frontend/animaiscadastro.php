<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais Cadastrados</title>
    <link rel="stylesheet" href="estilos.css"> 
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .container {
            width: 60%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            font-size: 24px;
            color: #008080;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #008080;
            color: white;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
        .pagination a {
            color: #008080;
            padding: 10px;
            margin: 5px;
            text-decoration: none;
        }
    </style>
    
</head>

<body>
<?php include "menu.php"; ?>

<div class="container">
    <h1>Animais Cadastrados</h1>
    <p>Confira os animais cadastrados na sua ONG</p>
    <table>
        <thead>
        <tr>
            <th>Animal</th>
            <th>Porte</th>
            <th>Faixa Etária</th>
        </tr>
        </thead>
        <tbody>

        <?php
        // Conexão com o banco de dados
        $servername = "localhost"; // ou o endereço do seu servidor
        $username = "root"; // seu usuário do MySQL
        $password = ""; // sua senha do MySQL
        $dbname = "tcc_clovis2"; // nome do seu banco de dados

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se houve erro na conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Consulta para buscar os dados dos animais cadastrados
        $sql = "SELECT nomeAnimal, porteAnimal, etariaAnimal, fotoAnimal FROM cadastroanimal";
        $result = $conn->query($sql);


// Verifica se há resultados e os exibe
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Codifica a imagem BLOB em base64
        $imagemBase64 = base64_encode($row['fotoAnimal']);
        $imagemSrc = 'data:image/jpeg;base64,' . $imagemBase64; // Ajuste o tipo de imagem conforme necessário

        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nomeAnimal']) . "</td>";
        echo "<td>" . htmlspecialchars($row['porteAnimal']) . "</td>";
        echo "<td>" . htmlspecialchars($row['etariaAnimal']) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum animal cadastrado.</td></tr>";
}




        // Fecha a conexão com o banco
        $conn->close();
        ?>
        </tbody>
    </table>
    <div class="pagination">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">...</a>
        <a href="#">10</a>
    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>
