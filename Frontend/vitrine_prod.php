<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade de Produtos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <style>
        body {
            font-family: 'Baloo Tammudu', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            padding: 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        .product-card {
    position: relative;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 30px;
    text-align: left;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    max-width: 200px;
    margin: 0 auto;
    overflow: hidden; /* Adicionado para garantir que a imagem não ultrapasse os limites do card */
}

.product-card img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 150px; /* Ajuste a altura conforme necessário */
    object-fit: cover;
    border-radius: 8px 8px 0 0; /* Apenas os cantos superiores arredondados */
}

.product-card .content {
    position: relative;
    padding-top: 160px; /* Ajuste conforme a altura da imagem */
    z-index: 1; /* Garante que o conteúdo fique acima da imagem */
}

        .product-card h3 {
            font-size: 1em;
            margin: 10px 0;
            font-weight: bold;
            color: #333;
        }

        .product-card p {
            font-size: 0.9em;
            margin: 5px 0;
            font-weight: normal;
            color: #666;
        }

        .price-button {
            display: inline-block;
            padding: 8px 10px;
            font-size: 1.2em;
            color: #108D77;
            background-color: white;
            border: 2px solid #108D77;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            margin: 10px 0;
            transition: all 0.3s ease;
        }

        .price-button:hover {
            background-color: #108D77;
            color: white;
        }

        .product-card a {
            display: inline-block;
            margin-top: 8px;
            text-decoration: none;
            color: #108D77;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            font-size: 1.2em;
        }

        .pagination a {
            margin: 0 5px;
            padding: 8px 12px;
            text-decoration: none;
            color: #108D77;
            font-weight: bold;
        }

        .pagination a.active {
            color: #108D77;
            border: none;
        }

        .pagination a:hover {
            text-decoration: underline;
        }

        
    </style>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link href="estilos.css" rel="stylesheet">
</head>
<body>
    <?php include "menu.php" ?>
    <div class="container text-center caroseldiv">
        <div class="row justify-content-center">
            <div class="col-10">
                <div id="carouselbanner" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-innera">
                        <div class="carousel-itema carousel-item active" data-bs-interval="9000">
                            <img src="https://i.imgur.com/JmohMvi.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-itema carousel-item" data-bs-interval="9000">
                            <img src="Imagens/viadogay.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-itema carousel-item" data-bs-interval="9000">
                            <img src="https://i.imgur.com/HudVhpM.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-preva carousel-control-prev" type="button" data-bs-target="#carouselbanner" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-nexta carousel-control-next" type="button" data-bs-target="#carouselbanner" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="product-card">
            <img src="Imagens/Ped.jfif" alt="Produto 1">
            <div class="content">
            <h3>Ração Pedigree</h3>
            <p>SuperPrix</p>
            <a href="#" class="price-button">12,99</a>
            <a href="#">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/Ped.jfif" alt="Produto 2">
            <div class="content">
            <h3>Ração Pedigree</h3>
            <p>SuperPrix</p>
            <a href="#" class="price-button">12,99</a>
            <a href="#">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/Ped.jfif" alt="Produto 3">
            <div class="content">
            <h3>Ração Pedigree</h3>
            <p>SuperPrix</p>
            <a href="#" class="price-button">12,99</a>
            <a href="#">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/Ped.jfif" alt="Produto 4">
            <div class="content">
            <h3>Comedouro 2 em 1</h3>
            <p>SuperPrix</p>
            <a href="#" class="price-button">80,99</a>
            <a href="#">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/bebe.jfif" alt="Produto 5">
            <div class="content">
            <h3>Bebedouro 2 em 1</h3>
            <p>SuperPrix</p>
            <a href="#" class="price-button">80,99</a>
            <a href="#">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/arra.jfif" alt="Produto 6">
            <div class="content">
            <h3>arranhador</h3>
            <p>SuperPrix</p>
            <a href="#" class="price-button">80,99</a>
            <a href="#">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/caixa.jfif" alt="Produto 7">
            <div class="content">
            <h3>Caixa Transportadora</h3>
            <p>SuperPrix</p>
            <a href="layout_compra.php" class="price-button">20,99</a>
            <a href="layout_compra.php">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/caixa.jfif" alt="Produto 8">
            <div class="content">
            <h3>Caixa Transportadora</h3>
            <p>SuperPrix</p>
            <a href="layout_compra.php" class="price-button">20,99</a>
            <a href="layout_compra.php">ver mais</a>
            </div>
        </div>
        <div class="product-card">
            <img src="Imagens/caixa.jfif" alt="Produto 9">
            <div class="content">
            <h3>Caixa Transportadora</h3>
            <p>SuperPrix</p>
            <a href="layout_compra.php" class="price-button">20,99</a>
            <a href="layout_compra.php">ver mais</a>
            </div>
        </div>
    </div>

    <div class="pagination">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">...</a>
        <a href="#">10</a>
        <a href="#">&raquo;</a>
    </div>
    <?php include "footer.php" ?>
</body>
</html>
