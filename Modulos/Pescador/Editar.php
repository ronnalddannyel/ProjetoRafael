<?php include "../../header.php"; ?>
<?php require_once('../../../../db.php'); ?>
<?php require_once('../../../../via_cep.php'); // Arquivo para a consulta do CEP ?>
<?php $upload_dir = '../../ArquivosEnviados/'; ?>

<?php
// Verificação do POST para atualizar os dados do pescador
if (isset($_POST['Enviar'])) {
    // Recuperação dos dados do formulário
    $nome = $_POST['nome'];
    $nomePai = $_POST['nomePai'];
    $nomeMae = $_POST['nomeMae'];
    $dataDeNascimento = $_POST['dataDeNascimento'];
    $foto3x4 = $_POST['foto3x4'];
    $naturalidade = $_POST['naturalidade'];
    $uf = $_POST['uf'];
    $estadoCivil = $_POST['estadoCivil'];
    $rg = $_POST['rg'];
    $dataPrimeirorg = $_POST['dataPrimeirorg'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $nomeDependente = $_POST['nomeDependente'];
    $rgp = $_POST['rgp'];
    $dataNascimentoDependente = $_POST['dataNascimentoDependente'];
    $tituloDeEleitor = $_POST['tituloDeEleitor'];
    $secao = $_POST['secao'];
    $zona = $_POST['zona'];
    $pis = $_POST['pis'];
    $nit = $_POST['nit'];

    // Consulta ViaCEP para obter informações adicionais do endereço
    $endereco = buscarEnderecoPorCEP($cep);

    // Atualização dos dados no banco de dados
    $sql = "UPDATE pescador SET 
            nome='$nome', 
            nomePai='$nomePai', 
            nomeMae='$nomeMae', 
            dataDeNascimento='$dataDeNascimento', 
            foto3x4='$foto3x4', 
            naturalidade='$naturalidade', 
            uf='$uf', 
            estadoCivil='$estadoCivil', 
            rg='$rg', 
            dataPrimeirorg='$dataPrimeirorg', 
            cpf='$cpf', 
            escolaridade='$escolaridade', 
            logradouro='$logradouro', 
            bairro='$bairro', 
            cep='$cep', 
            cidade='$cidade', 
            email='$email', 
            nomeDependente='$nomeDependente', 
            rgp='$rgp', 
            dataNascimenteoDependente='$dataNascimentoDependente', 
            tituloDeEleitor='$tituloDeEleitor', 
            secao='$secao', 
            zona='$zona', 
            pis='$pis', 
            nit='$nit'
            WHERE id=".$_POST['id'];

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $successMsg = 'Registro atualizado com sucesso';
        header('Location: ./');
    } else {
        $errorMsg = 'Erro ao atualizar o registro: '.mysqli_error($conn);
    }
}

// Recuperação do pescador a ser editado
if (isset($_POST['Ret'])) {
    $id =  base64_decode($_POST['IdEstoque']);
    $sql = "SELECT * FROM pescador WHERE id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $errorMsg = 'Não foi possível encontrar nenhum registro';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Adicione aqui os metadados, links CSS, etc. -->
    </head>
    <body>
        <?php include "../../../menu.php"; ?>
        <main id="main" class="main">
            <h1>Editar Informações do Pescador</h1> 
            <section class="section">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Editar Informações do Pescador</h5>
                                <!-- Formulário para editar informações do pescador -->
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?php echo $row['nome']; ?>">
                                        </div>
                                    </div>
                                    <!-- Adicione os campos restantes do formulário aqui -->
                                    <!-- Exemplo: -->
                                    <!-- Campo Nome do Pai -->
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nome do Pai</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="nomePai" placeholder="Nome do Pai" value="<?php echo $row['nomePai']; ?>">
                                        </div>
                                    </div>
                                    <!-- Campo Nome da Mãe -->
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nome da Mãe</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="nomeMae" placeholder="Nome da Mãe" value="<?php echo $row['nomeMae']; ?>">
                                        </div>
                                    </div>
                                    <!-- Campo Data de Nascimento -->
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Data de Nascimento</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="date" name="dataDeNascimento" value="<?php echo $row['dataDeNascimento']; ?>">
                                        </div>
                                    </div>
                              

                                    <div class="col-sm-7">
    <input class="form-control cpf" type="text" name="cpf" placeholder="CPF" value="<?php echo $row['cpf']; ?>">
</div>
</div>
<!-- Campo Escolaridade -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Escolaridade</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="escolaridade" placeholder="Escolaridade" value="<?php echo $row['escolaridade']; ?>">
    </div>
</div>
<!-- Campo Logradouro -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Logradouro</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="logradouro" placeholder="Logradouro" value="<?php echo $row['logradouro']; ?>">
    </div>
</div>
<!-- Campo Bairro -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Bairro</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="bairro" placeholder="Bairro" value="<?php echo $row['bairro']; ?>">
    </div>
</div>
<!-- Campo CEP -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">CEP</label>
    <div class="col-sm-7">
        <input class="form-control cep" type="text" name="cep" placeholder="CEP" value="<?php echo $row['cep']; ?>">
        <button type="button" class="btn btn-primary" onclick="buscarCEP()">Buscar CEP</button>
    </div>
</div>
<!-- Campo Cidade -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Cidade</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="cidade" placeholder="Cidade" value="<?php echo $row['cidade']; ?>">
    </div>
</div>
<!-- Campo UF -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">UF</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="uf" placeholder="UF" value="<?php echo $row['uf']; ?>">
    </div>
</div>
<!-- Campo Email -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-7">
        <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>">
    </div>
</div>
<!-- Adicione os demais campos do formulário seguindo a mesma estrutura -->
<!-- Exemplo: -->
<!-- Campo Foto 3x4 -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Foto 3x4</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="foto3x4" placeholder="Foto 3x4" value="<?php echo $row['foto3x4']; ?>">
    </div>
</div>
<!-- Campo Naturalidade -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Naturalidade</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="naturalidade" placeholder="Naturalidade" value="<?php echo $row['naturalidade']; ?>">
    </div>
</div>
<!-- Campo Estado Civil -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Estado Civil</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="estadoCivil" placeholder="Estado Civil" value="<?php echo $row['estadoCivil']; ?>">
    </div>
</div>
<!-- Campo RG -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">RG</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="rg" placeholder="RG" value="<?php echo $row['rg']; ?>">
    </div>
</div>
<!-- Campo Data do Primeiro RG -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Data do Primeiro RG</label>
    <div class="col-sm-7">
        <input class="form-control" type="date" name="dataPrimeirorg" value="<?php echo $row['dataPrimeirorg']; ?>">
    </div>
</div>
<!-- Adicione os demais campos do formulário seguindo a mesma estrutura -->
<!-- Exemplo: -->
<!-- Campo Nome do Dependente -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Nome do Dependente</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="nomeDependente" placeholder="Nome do Dependente" value="<?php echo $row['nomeDependente']; ?>">
    </div>
</div>
<!-- Campo RGP -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">RGP</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="rgp" placeholder="RGP" value="<?php echo $row['rgp']; ?>">
    </div>
</div>
<!-- Campo Data de Nascimento do Dependente -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Data de Nascimento do Dependente</label>
    <div class="col-sm-7">
        <input class="form-control" type="date" name="dataNascimenteoDependente" value="<?php echo $row['dataNascimenteoDependente']; ?>">
    </div>
</div>
<!-- Adicione os demais campos do formulário seguindo a mesma estrutura -->
<!-- Exemplo: -->
<!-- Campo Título de Eleitor -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Título de Eleitor</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="tituloDeEleitor" placeholder="Título de Eleitor" value="<?php echo $row['tituloDeEleitor']; ?>">
    </div>
</div>
<!-- Campo Seção -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Seção</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="secao" placeholder="Seção" value="<?php echo $row['secao']; ?>">
    </div>
</div>
<!-- Campo Zona -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Zona</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="zona" placeholder="Zona" value="<?php echo $row['zona']; ?>">
    </div>
</div>
<!-- Campo PIS -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">PIS</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="pis" placeholder="PIS" value="<?php echo $row['pis']; ?>">
    </div>
</div>
<!-- Campo NIT -->
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">NIT</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="nit" placeholder="NIT" value="<?php echo $row['nit']; ?>">
    </div>
</div>
<!-- Adicione o botão de enviar -->
<div class="row mb-3">
    <div class="col-sm-7 offset-sm-2">
        <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
    </div>
</div>
<!-- Adicione os scripts e estilos necessários -->
</form>
</div>
</div>
</div>
</div>
</section>
</main>
<?php include "../../footer.php"; ?>
<!-- Adicione os scripts e estilos necessários -->
</body>
</html>
