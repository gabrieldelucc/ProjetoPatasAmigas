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
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Cat03.jpg/1200px-Cat03.jpg" alt="Yorkshire terrier">
            </div>

            <!-- Detalhes do Pet -->
            <div class="pet-details">
                <h1>Elina</h1>
                <h2>Gato | Fêmea | Adulta | Porte Pequena</h2>

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
                    Elina é uma gata laranja de pelagem vibrante e personalidade marcante. Com um olhar atento e curioso, ela é cheia de energia e adora explorar cada canto do ambiente, mostrando sua independência e confiança. Sua pelagem quente combina com seu temperamento afetuoso, e ela é conhecida por momentos de carinho genuíno, especialmente com pessoas que ela conhece bem. Elina também tem um lado brincalhão e, apesar de sua natureza independente, adora interagir e se envolver em atividades com aqueles ao seu redor. </p>
                </div>

                
                

            </div>
            

    </main>
    <br><br><br><br>
    <a href="telasong.php" class="back-link">&#8592; </a>
    <?php include "footer.php" ?>
</body>

</html>