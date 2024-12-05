<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css"> 
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>

<body>
<?php include "menu.php" ?>
<?php ?>
        
    <div class="custom-font" style="color: #18486b; text-align: center; padding-top: 3%;  font-family: 'Poppins', sans-serif;">
        <h1>Cadastre-se como:</h1>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row align-items-center">
            <div class="col mx-4" style="padding-top: 4%">
                <div class="card cardshadow" style="width: 19rem;">
                    <img src="https://img.freepik.com/fotos-gratis/pessoas-de-cadeia-de-origami-vista-superior-com-globo_23-2148621071.jpg?size=338&ext=jpg&ga=GA1.1.1518270500.1717286400&semt=sph" class="card-img-top cardimgsize" alt="Usuário">
                    <div class="card-body text-center">
                        <h3 class="card-title custom-font2">ONG</h3>
                        <a href="cadastro_ong.php" type="button" class="btn btnbb btn-outline">Ir para o cadastro</a>
                    </div>
                </div>
            </div>

            <div class="col mx-4" style="padding-top: 4%">
                <div class="card cardshadow" style="width: 19rem;">
                    <img src="https://wesco.com.br/wp-content/uploads/2015/08/Pessoas-felizes.jpg" class="card-img-top cardimgsize" alt="Usuário">
                    <div class="card-body text-center">
                        <h3 class="card-title custom-font2_1">Usuário</h3>
                        <a href="cadastro_usuario.php" type="button" class="btn btnaa    btn-outline-info">Ir para o cadastro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>
</body>

</html>
