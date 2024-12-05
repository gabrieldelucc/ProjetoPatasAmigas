<!DOCTYPE html>
<html lang="pt-BR">

<body>
<?php include "menu.php" ?>
</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Ong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">

<style>
    body {
        font-family: Arial, sans-serif;
    }
    

    h1 {
        font-family: 'Baloo Tammudu 2', cursive;
        text-align: center;
        font-size: 2rem;
        color: black;
        font-family: 'Baloo Tammudu 2', cursive;
        font-weight: 700;
    }

    h2 {
        font-family: 'Baloo Tammudu 2', cursive;
        font-weight: 700;
        text-align: center;
        font-size: 2rem;
        color: #676767;
        position: relative;
        top: -40px;
    }

    .cards-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 80px;
        margin-top: 20px;
        margin-bottom: 50px;
    }

    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.30);
        overflow: hidden;
        width: 260px;
        height: 325px;
        text-align: center;
        font-family: 'Baloo Tammudu 2', cursive;
        transition: box-shadow 0.3s ease;
    }

    .card img {
        width: 100%;
        height: 170px;
        margin-bottom: 0px;
        
    }

    .card h3 {
        color: #008A8A;
        font-size: 1.3rem;
        margin-top: 20px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }

    .card p {
        color: black;
        font-size: 0.9rem;
        margin-top: -5px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }

    .card button {
        background-color: transparent;
        color: #008A8A;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        margin-top: 7%;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
        border: 1px solid;
        border-color: #008A8A;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
    }

    .card button:hover {
        background-color: #006d64;
        color: white;
        border-color: white;
    }

    .card:hover {
        box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.50);
    }

    /* Estilo da paginação */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        /* Adiciona margem superior para separação dos cards e paginação */
    }

    .pagination a,
    .pagination span {
        margin: 0 5px;
        padding: 8px 12px;
        text-decoration: none;
        background-color: #fff;
        color: #008A8A;
        border: 1px solid #008A8A;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #008A8A;
        color: white;
    }

    .pagination .active {
        background-color: #008A8A;
        color: white;
    }

    .pagination .dots {
        padding: 8px 12px;
        color: #008A8A;
    }
</style>

<body>

<form action="telasong.php">
    <main>
    <br><br>
        <h1>Ongs Parceiras</h1>
        <h1>Confira todas as Ongs que nos apoiam!</h1>
        <br><br>

        <!-- Primeira fileira de cards -->
        <div class="cards-container">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF_LbOc4jEWyTA0pQn2TNr681yKEvw-3-X-g&s" alt="Cão Sem Dono">
                <h3>Cão sem Dono</h3>
                <p>Santo André, SP</p>
                <button a href="telasong.php">Acessar</button>
            </div>

            <div class="card">
                <img src="Imagens/Ong1.png" alt="Associação dos Amigos Ong">
                <h3>Cidadania Animal</h3>
                <p>Santo André, SP</p>
                <button a href="telasong.php">Acessar</button>
            </div>

            <div class="card">
                <img src="Imagens/Ong1.png" alt="Associação dos Amigos Ong">
                <h3>Cidadania Animal</h3>
                <p>Santo André, SP</p>
                <button>Acessar</button>
            </div>
        </div>

        <!-- Segunda fileira de cards -->
        <div class="cards-container">
            <div class="card">
                <img src="Imagens/Ong2.jfif" alt="Abrigo Amor de Mais Ong">
                <h3>Amor de Raça</h3>
                <p>Santo André, SP</p>
                <button>Acessar</button>
            </div>
            <div class="card">
                <img src="Imagens/Ong2.jfif" alt="Abrigo Amor de Mais Ong">
                <h3>Amor de Raça</h3>
                <p>Santo André, SP</p>
                <button>Acessar</button>
            </div>
            <div class="card">
                <img src="Imagens/Ong2.jfif" alt="Abrigo Amor de Mais Ong">
                <h3>Amor de Raça</h3>
                <p>Santo André, SP</p>
                <button>Acessar</button>
            </div>
        </div>

        <!-- Terceira fileira de cards -->
        <div class="cards-container">
            <div class="card">
                <img src="Imagens/Ong3.jpg" alt="Animais da Aldeia Ong">
                <h3>Amigo dos Animais</h3>
                <p>Santo André, SP</p>
                <button>Acessar</button>
            </div>
            <div class="card">
            <img src="Imagens/Ong3.jpg" alt="Animais da Aldeia Ong">
            <h3>Amigo dos Animais</h3>
                <p>Santo André, SP</p>
                <button>Acessar</button>
            </div>
            <div class="card">
            <img src="Imagens/Ong3.jpg" alt="Animais da Aldeia Ong">
            <h3>Amigo dos Animais</h3>
                <p>Santo André, SP</p>
                <button>Acessar</button>
            </div>
        </div>

        <!-- Paginação -->
        <div class="pagination">
            <a href="#" class="prev">&laquo;</a>
            <a href="#" class="page-number active">1</a>
            <a href="#" class="page-number">2</a>
            <a href="#" class="page-number">3</a>
            <span class="dots">...</span>
            <a href="#" class="page-number">10</a>
            <a href="#" class="next">&raquo;</a>
        </div>
    </main>
    <?php include "footer.php" ?>
</form>
</body>

</html>