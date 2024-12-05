<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Ong</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">
</head>

<body>
    <?php include "menu.php" ?>
    <div class="container">
  

       
    <form name="Usercadform" action="../backend/usuarios/cadastrarong.php" class="form" method="POST" enctype="multipart/form-data"> 
            <h2 class="d-flex custom-font justify-content-center">Cadastro de ONG</h2>
            <div class="row">

                <div class="col-md-12">
                    <label class="form-label">Nome da ONG:</label>
                    <input type="text" name="nome_ong" class="form-control">
                    <label class="form-label">Slogan da ONG:</label>
                    <input type="text" name="slogan_ong" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="form-label">CNPJ:</label>
                    <input type="text" name="ongcnpj" class="form-control cnpj-mask" placeholder="00.000.000/0000-00">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="form-label">CEP:</label>
                    <input type="text" id="cep" name="cep"  onblur="buscarEndereco()" class="form-control" maxlength="8">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="form-label">Estado:</label>
                    <input type="text" id="estado" name="ongestado" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Cidade:</label>
                    <input type="text" id="cidade" name="ongcidade" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="form-label">Bairro:</label>
                    <input type="text" id="bairro" name="ongbairro" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Rua:</label>
                    <input type="text" id="logradouro" name="ongrua" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Email de Contato:</label>
                    <input type="email" name="ongemail_contato" id="email_contato" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Senha:</label>
                    <input type="password" name="ongsenha" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Confirmar Senha:</label>
                    <input type="password" name="ongsenhac" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Número de contato:</label>
                    <input type="tel" name="ongtelefone" class="form-control telefone-mask" placeholder="(00) 0000-0000" maxlength="13">
                    <br>
                </div>
                <div class="col-md-12">
                    <label for="imagem">Adicionar/Alterar Imagem:</label>
                    <input type="file" id="ongimagem" name="ongimagem" accept="image/*">
                  <br>
                  <br>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btna btn-outline-info me-2">Cadastrar</button>
                    <button type="reset" class="btn btna btn-outline-danger">Reiniciar</button>
                </div>
            </div>
        </form>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var cnpjInput = document.querySelector('.cnpj-mask');
                cnpjInput.addEventListener('input', function (e) {
                    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
                    e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' + x[3] : '') + (x[4] ? '/' + x[4] : '') + (x[5] ? '-' + x[5] : '');
                });
            });

            document.addEventListener("DOMContentLoaded", function () {
                var telefoneInput = document.querySelector('.telefone-mask');
                Inputmask('(99) 9999-9999').mask(telefoneInput);
            });

            function limparCampos() {
                document.getElementById("cadastroForm").reset();
            }


            function buscarEndereco() {
        const cep = document.getElementById('cep').value.trim();

        // Verifica se o CEP tem 8 caracteres
        if (cep.length !== 8 || isNaN(cep)) {
            alert('Por favor, insira um CEP válido com 8 dígitos.');
            return;
        }

        fetch(`http://localhost:3000/cep/${cep}`)  // Verifique se a URL da API está correta
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert('CEP não encontrado');
                } else {
                    // Preenche os campos de endereço
                    document.getElementById('logradouro').value = data.logradouro;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                    document.getElementById('estado').value = data.uf;
                }
            })
            .catch(error => {
                console.error('Erro ao buscar o CEP:', error);
            });
    }
        </script>
    </div>

    <?php include "footer.php" ?>
</body>

</html>

