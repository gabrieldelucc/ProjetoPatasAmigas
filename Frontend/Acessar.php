<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu&display=swap" rel="stylesheet">
</head>


<body>
<?php include "menu.php" ?>

   


    <!-- Carrosel de imagens -->
    <div class="container text-center caroseldiv">
      <div class="row align-items-center">
        <div class="col-8">
          <div id="carouselLogin" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
            <div class="carousel-inner carousel">

              <div class="carousel-item active carousel">
                <img src="https://i.imgur.com/70C1vTx.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item carousel">
                <img src="https://i.imgur.com/f9xMMep.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item carousel">
                <img src="https://i.imgur.com/NLq5AMT.jpeg" class="d-block w-100" alt="...">
              </div>

            </div>
          </div>
        </div>
          




        <!-- Toda a parte da coluna de login -->
        <div class="col-4">   

          <div class="form ">  <!-- Forms que guarda os accordions -->
            <h2 class="text-start custom-font" style="color: black;">Entrar como:</h2>
       
             <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed custom-font2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ONG
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                      <form action="../backend/usuarios/loginong.php" method="POST" id="formOng">
                        <div class="mb-3" style="align-items: center">
                          <label style="padding-top: 5%;" for="OngCNPJ" class="form-label custom-font3">Email da ONG</label>
                          <input type="email" class="form-control" id="Ongemail" name="Ongemail" placeholder="Digite o email de cadastro utilizado">
                       </div>
                       
                       <div class="mb-3" style="align-items: center">
                         <label  class="form-label custom-font3">Senha</label>
                         <input type="password" class="form-control" id="Ongsenha" name="Ongsenha" placeholder="Digite sua Senha">
                         <button type="submit" class="btn btn-outline-info" form="formOng">Enviar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed custom-font2_1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Usuário
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <form action="../backend/usuarios/loginuser.php" method="POST" id="FormUser">
                        <div class="mb-3">
                          <label for="item2Field1" style="padding-top: 5%;" class="form-label custom-font3">Email</label>
                          <input type="email" class="form-control" id="Useremail" name="Useremail" placeholder="Digite seu email de cadastro">
                        </div>
                        <div class="mb-3">
                          <label for="item2Field2" style="padding-top: 5%;" class="form-label custom-font3">Senha</label>
                          <input type="password" class="form-control" id="Usersenha" name="Usersenha" placeholder="Digite sua senha">
                          <button type="submit" class="btn btn-outline-info" form="FormUser">Enviar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                </div>
              </div>
              <h2 class="custom-font"> Ou </h2>
              <a href="cadastro_menu.php" class="btn btnc btn-outline-info btn-lg">Cadastrar-se</a>          
            </div>
        </div>
        <!-- Fim da coluna de login -->





        </div>
      </div>
    </div>  
    <!-- Fim do carrosel de imagens -->

    <?php include "footer.php" ?>
</body>
</html>