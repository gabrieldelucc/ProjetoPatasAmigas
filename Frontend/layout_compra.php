<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Transportadora</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">
    <style>
        /* Estilos para centralizar a página */
        .fullscreen-container {
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .containerf {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 800px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color: #fff;
        }

        .contentf {
            display: flex;
            gap: 30px;
            width: 100%;
            align-items: flex-start;
            justify-content: center;
            text-align: center;
        }

        .product-image {
            width: 100%;
            max-width: 400px;
            border: 2px solid #008080;
            border-radius: 5px;
        }

        .details {
            flex-grow: 1;
            text-align: left;
        }

        .brand {
            font-size: 18px;
            color: #333;
        }

        .price {
            font-size: 36px;
            color: #008080;
        }

        .buy-button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .buy-button:hover {
            background-color: #006666;
        }

        .description-container {
            width: 100%;
            margin-top: 20px;
            text-align: center;
        }

        .description {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            max-width: 500px;
            margin: auto;
        }

        .back-link {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #008080;
            text-decoration: none;
            font-size: 16px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

        <body>
        <?php include "menu.php" ?>
        <br>
        <div class="fullscreen-container">
    <a href="javascript:history.back()" class="back-link">Voltar</a>

    <div class="containerf">
        <div class="contentf">
            <img src="https://a-static.mlcdn.com.br/800x560/caixa-de-transporte-n1-pet-caes-e-gato-peso-ate-5kg-rosa-mecpet/fullon/16049833566/f870d20c26cd79ddc23f3367bfc8d7d5.jpeg" alt="Caixa Transportadora" class="product-image">
            
            <div class="details">
                <h1>Caixa Transportadora</h1>
                <p class="brand">Marca: SuperPrix</p>
                <h2>Preço:</h2>
                <p class="price">R$ 20,99</p>
                <button class="buy-button">Quero Comprar</button>
            </div>
        </div>

        <div class="description-container">
            <h3>Descrição</h3>
            <p class="description">
                Caixa de Transporte para Cães - Conforto e Segurança em Movimento.
                Esta caixa de transporte para cães foi projetada para garantir o máximo de conforto e segurança para seu
                amigo de quatro patas durante viagens e passeios.
            </p>
        </div>
    </div>
</div>
        </body>



</html>
