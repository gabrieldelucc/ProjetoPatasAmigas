<!DOCTYPE html>
<html lang="pt-BR">

<body>
<?php include "menu.php" ?>
</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
</head>

<style>
 

    /* Container principal */
    .container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Estilo da imagem */
    .pet-image {
        max-width: 40%;
        border-radius: 5px;
        position: relative;
        bottom: -40px;
    }

    .pet-image img {
        width: 100%;
        border-radius: 10px;
    }

    /* Seção de detalhes do pet */
    .pet-details {
        max-width: 55%;
        padding-left: 20px;
    }

    .pet-details h1 {
        
        font-family: 'Poppins', sans-serif;
        font-size: 79px;
        margin-bottom: 10px;
        font-weight: 400;
        color: #006767;
        position: relative;
        left: -50px;
        bottom: -20px;
    }

    .pet-details h2 {
        font-size: 24px;
        font-weight: normal;
        color: #726E6E;
        position: relative;
        left: -40px;
    }

    .location {
        display: flex;
        align-items: center;
        /* Alinha os elementos no centro verticalmente */
        margin: 10px 0;
        position: relative;
        left: -35px;
    }

    .marcador {
        width: 24px;
        /* Tamanho reduzido do marcador */
        height: 24px;
        margin-right: 10px;
        /* Espaçamento entre o marcador e o texto */
    }

    .avat {
        width: 24px;
        /* Tamanho reduzido do marcador */
        height: 24px;
        position: relative;
        left: -35px;
        /* Espaçamento entre o marcador e o texto */
    }

    .location span {
        font-size: 16px;
        /* Ajusta o tamanho da fonte */
        position: relative;
        top: 3px;
        /* Ajuste fino da posição do texto */
    }

    /* Botões */
    .button {
        background-color: #008A8A;
        color: white;
        padding: 10px 20px;
        margin: 25px 0;
        border-radius: 5px;
        text-align: center;
        line-height: 50px;
        /* Deve ser igual à altura do botão */
        width: 550px;
        height: 50px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
        font-family: 'Baloo Tammudu 2', cursive;
        font-weight: 700;
        font-size: 30px;
    }


    .button:hover {
        background-color: #006d64;
    }

    /* Estilos da descrição */
    .description {
        margin-top: 20px;
        font-size: 1rem;
        line-height: 1.6;
        font-family: 'Baloo Tammudu 2', cursive;
        font-weight: 400;
    }

    /* Botão Voltar */
    .back-link {
        
        text-decoration: none;
        color: #008A8A;
        font-size: 1.2rem;
       padding-left: 30px;
       background-color: #008A8A;
        color: white;
        padding: 10px 20px;
        margin: 25px 0;
        border-radius: 5px;
        text-align: center;
        line-height: 50px;
        width: 150px;
        height: 50px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
        font-family: 'Baloo Tammudu 2', cursive;
        font-weight: 700;
        font-size: 30px;
      
    }

    .back-link:hover {
        text-decoration: underline;
    }

    .ong {
        position: relative;
        left: -35px;
    }




    .back-link:hover {
        text-decoration: underline;
        
    }
</style>

<body>

    <main>
        <div class="container">
            <!-- Imagem do Pet -->
            <div class="pet-image">
                <img src="data:image/jpeg;base64,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" alt="Yorkshire terrier">
            </div>

            <!-- Detalhes do Pet -->
            <div class="pet-details">
                <h1>Vander</h1>
                <h2> | Macho | Adulto | Porte Pequeno</h2>

                <div class="location">
                    <img class="marcador" src="https://img.icons8.com/?size=100&id=qPoyvo26Eh8c&format=png&color=000000" alt="Localização">
                    <span>Santo André, São Paulo</span>
                </div>


                <div class="organization">
                    <img class="avat" src="https://img.icons8.com/?size=100&id=ckaioC1qqwCu&format=png&color=000000" alt="Entidade">
                    <span class="ong">ONG Cão sem Dono</span>
                </div>


                <a href="#" class="button">Entre em contato</a>

                <div class="description">
                    <h3>Descrição</h3>
                    <p>
                        ......
                    </p>
                </div>

                
                

            </div>
            

    </main>
    <br><br><br><br>
    <a href="telasong.php" class="back-link">&#8592; </a>
    <?php include "footer.php" ?>
</body>

</html>S