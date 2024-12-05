<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Exemplo</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">
    <style>
        

        .content {
            width: 80%;
            max-width: 800px;
            margin: 20px;
            text-align: left;
        }

        h1 {
            color: #008A8A;
            font-size: 36px;
            margin-top: 50px;
        }

        h2 {
            color: #333;
            font-size: 30px;
            text-align: left;
        }

        p {
            color: #333;
            font-size: 18px;
            line-height: 1.6;
        }

        strong {
            font-weight: 600;
        }

        .social {
            text-align: left;
            margin-top: 40px;
        }

        .social a {
            color: #008A8A;
            text-decoration: none;
            margin: 0 10px;
            font-size: 20px;
        }

        .social a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include "menu.php" ?>

    <div class="content">
        <h1>Sobre Nós</h1>
        <p>
            Somos apaixonados por animais e acreditamos que cada cachorro e gato merece um lar amoroso. Nosso site foi criado para conectar pessoas que querem adotar um novo companheiro de quatro patas que estão em busca de uma família, além de facilitar o processo de adoção, oferecemos uma ampla gama de produtos essenciais para o bem-estar dos seus pets. Temos uma variedade de rações de alta qualidade, brinquedos para todas as idades e acessórios que vão desde caminhas confortáveis até coleiras seguras e estilosas, nosso objetivo é proporcionar tudo o que o seu cão ou gato precisa para viver feliz e saudável. Se você está procurando por um novo amigo ou deseja oferecer o melhor para o seu pet, está no lugar certo!</strong>
        </p>

        <h2>Como Funciona e como adotar?</h2>
        <p>
            Nosso processo é simples e pensado para facilitar a adoção de cães e gatos. Ao navegar por nossa seção de adoção, você pode conhecer os pets disponíveis e encontrar aquele que mais combina com você. Quando encontrar um cão ou gato de interesse, basta clicar na aba "Entrar em Contato". Nessa área, você poderá obter mais informações sobre o animal, como sua saúde, personalidade e necessidades especiais. Um de nossos especialistas ou o responsável pelo pet entrará em contato com você para esclarecer dúvidas e organizar os próximos passos. Após conhecer melhor seu futuro companheiro, você pode finalizar o processo na área de adoção, onde nossa equipe fará o acompanhamento para garantir que tudo ocorra de forma segura e que o pet seja entregue com todo o cuidado necessário.</strong>
        </p>

        <div class="social">
            <h2>Siga-nos nas redes sociais!</h2>
            <p>Estamos presentes em diversas plataformas como</p>
            <p>
                <a href="https://www.youtube.com">youtube</a>,
                <a href="https://www.facebook.com">facebook</a>,
                <a href="https://www.twitter.com">twitter</a> e 
                <a href="https://www.instagram.com">instagram</a>!
            </p>
        </div>
    </div>
    <?php include "footer.php" ?>

</body>
</html>
