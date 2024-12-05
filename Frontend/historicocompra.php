<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
      <link rel="stylesheet" href="estilos2.css">
      <link rel="stylesheet" href="estilos.css">
      <link rel="stylesheet" href="estilos3.css">
      
    <style>
     

        body {
            font-family: Arial, sans-serif;
            
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
            width: 140px;
            background-color: #a0a0a0;
            padding: 20px;
            height: 53%;
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
</head>

<body>

   
    <?php include "menu.php" ?>

   <div class="Menufod">
        <h3>Menu</h3>
        <a href="informacoesconta.php">Informações da Conta</a>
        <a href="seguranca.php">Segurança</a>
        <a href="pagamento.php">Métodos de Pagamento</a>
        <a href="historicocompra.php"> Historico </a>
        
    </div>



    <br><br>
    <div class="container">
        <h1>Compras</h1>
        <p>Verifique seu histórico de compras</p>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="Imagens/Ped.jfif" alt="Ração Pedigree" width="50"> Ração Pedigree</td>
                    <td>Débito</td>
                    <td>R$ 12,99</td>
                    <td>12/06/24</td>
                </tr>
                <tr>
                    <td><img src="Imagens/bebe.jfif" alt="Ração Pedigree" width="50"> Bebedouro</td>
                    <td>Débito</td>
                    <td>R$ 12,99</td>
                    <td>12/06/24</td>
                </tr>
                <tr>
                    <td><img src="Imagens/arra.jfif" alt="Ração Pedigree" width="50"> Arranhador</td>
                    <td>Débito</td>
                    <td>R$ 12,99</td>
                    <td>12/06/24</td>
                </tr>
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


    <?php include "footer.php" ?>

</body>
</html>
