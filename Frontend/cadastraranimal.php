<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
      <link rel="stylesheet" href="estilos2.css">
     <link href="estilos.css" rel="stylesheet">
     <link rel="stylesheet" href="estilos3.css">
</head>
<style>
.Menufod {
            width: 140px;
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
<body>
<?php include "menu.php" ?>

<br>
<br>


<div class="container" style="Padding: 4%">
    <h1 class="d-flex justify-content-center"><b>Cadastre um Animal</b></h1>
    <br>

    <div class="image-placeholder"></div>

    <!-- Botão de Voltar -->
    <div class="d-flex justify-content-start mb-3">
        <button onclick="window.history.back();" class="btn btnb">⬅ Voltar</button>
    </div>

    <form action="../backend/usuarios/cadastraranimais.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-12">
            <label for="imagem"><b>Adicionar/Alterar Imagem</b></label>
            <input type="file" id="imagemanimal" name="imagemanimal" class="form-control" accept="image/*">
            <br>
        </div>

        <label for="nome"><b>Nome (Opcional)</b></label>
        <input type="text" id="nomeanimal" name="nomeanimal" class="form-control">
        <br>

        <div class="row">
            <div class="col-md-3">
                <label for="especie"><b>Espécie</b></label>
                <select id="especie" name="especie" class="form-control" required>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="porte"><b>Porte</b></label>
                <select id="porte" name="porte" class="form-control" required>
                    <option value="pequeno">Pequeno</option>
                    <option value="medio">Médio</option>
                    <option value="grande">Grande</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="sexo"><b>Sexo</b></label>
                <select id="sexo" name="sexo" class="form-control" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="faixa_etaria"><b>Faixa Etária</b></label>
                <select id="faixa_etaria" name="faixa_etaria" class="form-control" required>
                    <option value="filhote">Filhote</option>
                    <option value="adulto">Adulto</option>
                    <option value="idoso">Idoso</option>
                    <br>
                    <br>
                </select>
            </div>
        </div>

        

        <br>
        <label for="descricao"><b>Descrição</b></label>
        <textarea id="descricao" name="descricao" rows="5" class="form-control"></textarea>

        <button type="submit" class="btn btna btn-outline-info me-2">Cadastrar</button>
    </form>
</div>
    <?php include "footer.php" ?>

</body>
</html>
