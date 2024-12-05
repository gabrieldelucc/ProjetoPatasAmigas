<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoções</title>
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <style>
        /* Css temporario aqui, só pra n fundir com o do cauã dnv ;() */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
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
        footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }
        .Menufod {
            width: 100px;
            background-color: #a0a0a0;
            padding: 20px;
            height: 63%;
            position: fixed;
            top: 0;
            left: 0;
            color: white;
            
        }

        .Menufod h3 {
            color: #069690;
        }

        .Menufod a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .Menufod a:hover {
            background-color: #575757;
        }

        
    </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>

   
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
<?php include "menu.php" ?>
<br>
<br>
<div class="Menufod">
        <h3>Menu</h3>
        <a href="informacoesconta.php">Informações da ONG</a>
        <a href="seguranca.php">Segurança</a>
        <a href="pagamento.php">Métodos de Pagamento</a>
        <a href="histadocao.php">Histórico</a>
        <a href="cadastraranimal.php">Cadastrar animais</a>
    </div>

    <div class="container">
        <h1>Adoções</h1>
        <p>Verifique os animais que você adotou!</p>
        <table>
            <thead>
                <tr>
                    <th>Animal</th>
                    <th>ONG</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="Imagens/Golden.jpg" alt="Golden Retriever" width="50"> Golden Retriever</td>
                    <td>ONG Cão sem Dono</td>
                    <td>08/06/24</td>
                </tr>
                <tr>
                    <td><img src="Imagens/shit_tzu.jpg" alt="Imagens/shit_tzu" width="50"> Shih-tzu</td>
                    <td>ONG Cão sem Dono</td>
                    <td>08/06/24</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include "footer.php" ?>

  
</body>
</html>
