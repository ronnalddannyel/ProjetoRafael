<!DOCTYPE html>
<html lang="pt-br">

<?php require_once('../../../db.php'); ?>
</header>
<body>
<?php include "../../menu.php"; ?>

<main id="main" class="main">

    <h1>Adicionar pescador</h1>

    <section class="section">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar pescador</h5>

                        <!-- Formulário de Cadastro de Pescador -->
                        <form method="POST" action="add.php" enctype="multipart/form-data">

                            <!-- Campo Nome -->
                            <div class="row mb-3">
                                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="nome" placeholder="Insira o nome">
                                </div>
                            </div>

                            <!-- Campo Nome do Pai -->
                            <div class="row mb-3">
                                <label for="nomePai" class="col-sm-2 col-form-label">Nome do Pai</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="nomePai" placeholder="Insira o nome do pai">
                                </div>
                            </div>

                            <!-- Campo Nome da Mãe -->
                            <div class="row mb-3">
                                <label for="nomeMae" class="col-sm-2 col-form-label">Nome da Mãe</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="nomeMae" placeholder="Insira o nome da mãe">
                                </div>
                            </div>

                            <!-- Campo Data de Nascimento -->
                            <div class="row mb-3">
                                <label for="dataDeNascimento" class="col-sm-2 col-form-label">Data de Nascimento</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="date" name="dataDeNascimento">
                                </div>
                            </div>

                            <!-- Campo CEP -->
                            <div class="row mb-3">
                                <label for="cep" class="col-sm-2 col-form-label">CEP</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="cep" id="cep" placeholder="Insira o CEP">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" onclick="buscarEndereco()">Buscar</button>
                                </div>
                            </div>

                            <!-- Campos do Endereço (preenchidos automaticamente) -->
                            <div class="row mb-3">
                                <label for="logradouro" class="col-sm-2 col-form-label">Logradouro</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="logradouro" id="logradouro" placeholder="Logradouro" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="uf" class="col-sm-2 col-form-label">UF</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" name="uf" id="uf" placeholder="UF" readonly>
                                </div>
                            </div>

                            <!-- Campo Foto 3x4 -->
<div class="row mb-3">
    <label for="foto3x4" class="col-sm-2 col-form-label">Foto 3x4</label>
    <div class="col-sm-7">
        <input class="form-control" type="file" name="foto3x4">
    </div>
</div>

<!-- Campo Naturalidade -->
<div class="row mb-3">
    <label for="naturalidade" class="col-sm-2 col-form-label">Naturalidade</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="naturalidade" placeholder="Insira a naturalidade">
    </div>
</div>

<!-- Campo Estado Civil -->
<div class="row mb-3">
    <label for="estadoCivil" class="col-sm-2 col-form-label">Estado Civil</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="estadoCivil" placeholder="Insira o estado civil">
    </div>
</div>

<!-- Campo RG -->
<div class="row mb-3">
    <label for="rg" class="col-sm-2 col-form-label">RG</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="rg" placeholder="Insira o RG">
    </div>
</div>

<!-- Campo Data da Primeira RG -->
<div class="row mb-3">
    <label for="dataPrimeirorg" class="col-sm-2 col-form-label">Data da Primeira RG</label>
    <div class="col-sm-7">
        <input class="form-control" type="date" name="dataPrimeirorg">
    </div>
</div>

<!-- Campo E-mail -->
<div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-7">
        <input class="form-control" type="email" name="email" placeholder="Insira o e-mail">
    </div>
</div>

<!-- Campo Nome do Dependente -->
<div class="row mb-3">
    <label for="nomeDependente" class="col-sm-2 col-form-label">Nome do Dependente</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="nomeDependente" placeholder="Insira o nome do dependente">
    </div>
</div>

<!-- Campo RG do Dependente -->
<div class="row mb-3">
    <label for="rgp" class="col-sm-2 col-form-label">RG do Dependente</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="rgp" placeholder="Insira o RG do dependente">
    </div>
</div>

<!-- Campo Data de Nascimento do Dependente -->
<div class="row mb-3">
    <label for="dataNascimenteoDependente" class="col-sm-2 col-form-label">Data de Nascimento do Dependente</label>
    <div class="col-sm-7">
        <input class="form-control" type="date" name="dataNascimenteoDependente">
    </div>
</div>

<!-- Campo Título de Eleitor -->
<div class="row mb-3">
    <label for="tituloDeEleitor" class="col-sm-2 col-form-label">Título de Eleitor</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="tituloDeEleitor" placeholder="Insira o título de eleitor">
    </div>
</div>

<!-- Campo Seção -->
<div class="row mb-3">
    <label for="secao" class="col-sm-2 col-form-label">Seção</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="secao" placeholder="Insira a seção">
    </div>
</div>

<!-- Campo Zona -->
<div class="row mb-3">
    <label for="zona" class="col-sm-2 col-form-label">Zona</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="zona" placeholder="Insira a zona">
    </div>
</div>

<!-- Campo PIS -->
<div class="row mb-3">
    <label for="pis" class="col-sm-2 col-form-label">PIS</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="pis" placeholder="Insira o PIS">
    </div>
</div>

<!-- Campo NIT -->
<div class="row mb-3">
    <label for="nit" class="col-sm-2 col-form-label">NIT</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="nit" placeholder="Insira o NIT">
    </div>
</div>


                            <!-- Botão de Cadastro -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Cadastro</label>
                                <div class="col-sm-3">
                                    <button type="submit" name="Enviar" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>

                        </form>
                        <!-- Fim do formulário de Cadastro de Pescador -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>



<script>
    function buscarEndereco() {
        var cep = document.getElementById('cep').value;
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                if (!data.erro) {
                    document.getElementById('logradouro').value = data.logradouro;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                    document.getElementById('uf').value = data.uf;
                } else {
                    alert('CEP não encontrado. Verifique se o CEP está correto.');
                }
            })
            .catch(error => {
                console.error('Ocorreu um erro ao buscar o endereço:', error);
            });
    }
</script>


<?php include "../../footer.php"; ?>