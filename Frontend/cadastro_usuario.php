<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
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
        
        <form name="Usercadform" action="../backend/usuarios/cadastraruser.php" class="form" method="POST"> 
            <h2 class="text-start custom-font d-flex custom-font justify-content-center">Cadastro de Usuário</h2>
            
            

            <!-- Restante do formulário -->
            <div class="row">
                <div class="col-md-12" style="padding-top: 3%">
                    <label class="form-label custom-font3">Nome completo</label>
                    <input type="text" class="form-control" name="Usernome" placeholder="Digite seu nome completo" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-top: 3%">
                    <label class="form-label custom-font3">E-mail</label>
                    <input type="email" class="form-control" name="Useremail" placeholder="Digite seu email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-top: 3%">
                    <label class="form-label custom-font3">CPF</label>
                    <input type="text" name="Usercpf" class="form-control" maxlength="14" placeholder="000.000.000-00" required>
                </div>
            </div>

            <!-- Campo de CEP -->
            <div class="row">
                <div class="col-md-8" style="padding-top: 3%">
                    <label class="form-label custom-font3">CEP</label>
                    <input type="text" id="cep" name="Usercep" onblur="buscarEndereco()" class="form-control" maxlength="8" placeholder="Digite seu CEP" required>
                </div>
            </div>

            <!-- Campos de Endereço preenchidos automaticamente -->
            <div class="row">
                <div class="col-md-8" style="padding-top: 3%">
                    <label class="form-label custom-font3">Cidade</label>
                    <input type="text" id="cidade" name="Usercidade" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label custom-font3" style="padding-top: 12%">UF</label>
                    <div class="input-group labelinf" style="padding-top: 20%">             
                        <select class="form-select" id="estado" name="Useruf" required>
                            <option value="" selected>UF</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Campo de senha e confirmação -->
            <div class="row">
                <div class="col-md-12" style="padding-top: 3%">
                    <label class="form-label custom-font3">Senha</label>
                    <input type="password" name="Usersenha" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-top: 3%">
                    <label class="form-label custom-font3">Confirmar Senha</label>
                    <input type="password" name="Usersenhac" class="form-control" required>
                </div>
            </div>
            
            <!-- Botões -->
            <div class="row mb-3">
                <div class="col-md-12 text-center" style="padding-top: 10%">
                    <div class="btn-group">
                        <button type="submit" class="btn btna btn-outline-info me-2" onclick="return saveCpf()">Cadastrar</button>
                        <button type="button" class="btn btna btn-outline-danger me-2" onclick="limparCampos()">Reiniciar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <input type="hidden" name="Cleanusercpf" id="Cleanusercpf">

    <script>
        function limparCampos() {
            document.forms["Usercadform"].reset();
        }

        document.getElementsByName('Usercpf')[0].addEventListener('input', function (event) {
            let input = event.target;
            let value = input.value.replace(/\D/g, ''); // Remove tudo que não é dígito
            value = value.replace(/(\d{3})(\d)/, '$1.$2'); // Coloca o primeiro ponto
            value = value.replace(/(\d{3})(\d)/, '$1.$2'); // Coloca o segundo ponto
            value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Coloca o traço
            input.value = value;
        });

        function saveCpf() {
            const cpfInput = document.getElementsByName('Usercpf')[0].value;
            const Cleanusercpf1 = cpfInput.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
            // Definindo o valor do campo oculto
            document.getElementById('Cleanusercpf').value = Cleanusercpf1;
            console.log(document.getElementById('Cleanusercpf').value)
            return true;
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
                        document.getElementById('cidade').value = data.localidade;
                        document.getElementById('estado').value = data.uf;
                    }
                })
                .catch(error => {
                    console.error('Erro ao buscar o CEP:', error);
                });
        }
    </script>

<?php include "footer.php" ?>
</body>
</html>
