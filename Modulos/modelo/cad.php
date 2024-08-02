<!DOCTYPE html>
<html lang="pt-br">
<?php include "../header.php"; ?>
</header>
<body>
<?php include "../menu.php"; ?>

<?php
  require_once('../../../db.php');
  $usuario = $_SESSION['usuario'];
  echo $usuario;
  $sql = "SELECT * FROM usuario WHERE CpfCnpj LIKE '%$usuario%'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result);

  
    
  }






  
?>

<main id="main" class="main">








<div class="pagetitle">
      <h1>Cadastro de estoque de peixe</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                   <li class="breadcrumb-item active">Estoque de peixe</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cadastro de estoque</h5>

              <!-- General Form Elements -->
              <form method="POST"  action="./add.php">
                <div class="row mb-3">
              
                  <label for="inputText" class="col-sm-2 col-form-label">Espécie</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Especie"  placeholder="Digite o nome da espécie"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nome popular</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="NomeVulgar"  placeholder="" value="" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Grau de Industrialização</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="GrauDeIndustrializacao"  placeholder="" value="" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Quantidade(Unid.)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="Quantidade"  placeholder="" value="" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Peso(Kg)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="Peso"  placeholder="" value="" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tipo de embalagem</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="TipoDeEmbalagem"  placeholder="" value="" >
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Categoria</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="Categoria">
                      <option selected>Selecione</option>
                      <option >Piscicultor</option>
                      <option >Feirante</option>
                      <option >Pescador</option>
                      <option >Empresa</option>
                    </select>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Registro Mapa/ADERR</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="RegistroMapaAderr"  placeholder="" value="" >
                  </div>
                </div>


                
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Data de Saída</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="DataSaida"  placeholder="" value="" >
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Município de Saída</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="Municipio">
                      <option>Amajari</option>
                      <option>Alto Alegre</option>
                      <option>Boa Vista</option>
                      <option>Bonfim</option>
                      <option>Cantá</option>
                      <option>Caracaraí</option>
                      <option>Caroebe</option>
                      <option>Iracema</option>
                      <option>Mucajaí</option>
                      <option>Normandia</option>
                      <option>Pacaraima</option>
                      <option>Rorainópolis</option>
                      <option>São João da Baliza</option>
                      <option>São Luiz</option>
                      <option>Uiramutã</option>
                    </select>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Data de chegada</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="DataDeChegada"  placeholder="" value="" >
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Município de destino</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="MunicipioDeDestino">
                      <option>Amajari</option>
                      <option>Alto Alegre</option>
                      <option>Boa Vista</option>
                      <option>Bonfim</option>
                      <option>Cantá</option>
                      <option>Caracaraí</option>
                      <option>Caroebe</option>
                      <option>Iracema</option>
                      <option>Mucajaí</option>
                      <option>Normandia</option>
                      <option>Pacaraima</option>
                      <option>Rorainópolis</option>
                      <option>São João da Baliza</option>
                      <option>São Luiz</option>
                      <option>Uiramutã</option>
                    </select>
                  </div>
                </div>
                
                <input type="hidden" class="form-control" name="usuario_id"  value="<?php echo $row['usuario_id']; ?>" >

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Cadastro</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
                </div>

              </form><!-- Finalização formulário Estoque de Peixe -->

            </div>
          </div>

        </div>



















</main>





</body>
<?php include "../footer.php"; ?>
</html>