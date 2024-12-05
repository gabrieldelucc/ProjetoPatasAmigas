<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">

    <style>
        .containerdomeualienfavorito {
            margin: 50px auto;
            padding: 30px;
            max-width: 1200px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 5px solid #005757;
            border-radius: 5px;
            position: relative;
        }
        .btnvoltar {
            position: absolute; 
            top: 20px; 
            left: 20px; 
            padding: 10px 20px; 
            font-size: 16px; 
           color:#005757;
           background-color: white;
            
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            z-index: 10; 
        }
    </style>
</head>
<body>
    <?php include "menu.php"; ?>

    <div class="containerdomeualienfavorito">
        <button onclick="window.history.back();" class="btn btna btn-outline-info me-2"class="btnvoltar">⬅ Voltar</button>
        
        <h1 class="d-flex justify-content-center"><b>Faça sua Reclamação</b></h1>
        <br>

        <form action="../backend/usuarios/enviarfeedback.php" method="POST" class="">
        
            <label for="denuncia"><b>Digite o Motivo da Reclamação</b></label>
            <input type="text" id="Denúncia" name="Denúncia" class="form-control">
            <br>

            <div class="row">
                <div class="col-md-3">
                    <label for="motivos"><b>Aperte no que a denúncia se encaixar</b></label>
                    <select id="motivod" name="motivod" class="form-control" required>
                    <option disabled><─────── Feedback de user ───────></option>
                    <option value="Infofalso">Informações Falsas no Anúncio</option>
                    <option value="Maustratos">Maus-Tratos ou Condições Inadequadas</option>
                    <option value="golpe">Fraude ou Golpe</option>
                    <option value="abuso">Comportamento Abusivo ou Inadequado do Usuário</option>
                    <option value="sus">Adoção com Intenção Suspeita</option>
                    <option value="fotoerrada">Fotos Inadequadas ou Impróprias</option>
                    <option value="termodeuso">Não Cumprimento de Termos de Uso</option>
                    <option value="outroDenuncia">Outros - Digite o motivo acima</option>
                    <option disabled><─────── Feedback de Bugs ───────></option>
                    <option value="validacao">Validação Incorreta dos Campos</option>
                    <option value="layout">Problemas de Responsividade (Layout Quebrado)</option>
                    <option value="navegador">Compatibilidade com Navegadores</option>
                    <option value="api">Erro ao Enviar Dados (API ou Servidor)</option>
                    <option value="seguranca">Falhas de Segurança ou Privacidade</option>
                    <option value="outroBug">Outros - Digite o bug acima</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="acusado"><b>Escreva o nome do acusado (caso tenha)</b></label>
                    <input type="text" id="User" name="User" class="form-control">
                </div>
                
                   
                       
                 
               
                <div class="col-md-3">
                    <label for="datadoocorrido"><b>Data do ocorrido</b></label>
                    <input type="date" id="datadoocorrido" name="datadoocorrido" class="form-control">
                </div>
            </div>

            <br>
            <label for="descricao"><b>Escreva detalhadamente o ocorrido</b></label>
            <textarea id="descricao" name="descricao" rows="5" class="form-control"></textarea>

            <button type="submit" class="btn btna btn-outline-info me-2">Enviar</button>
        </form>
    </div>
    
    <?php include "footer.php"; ?>
</body>
</html>