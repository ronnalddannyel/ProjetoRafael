<!DOCTYPE html>
<html lang="pt-br">
<?php include "../header.php"; ?>
</header>
<body>
<?php include "../menu.php"; ?>

<?php
  include('../../../db.php');



  if (isset($_GET['Ret'])) {
    $id =  base64_decode($_GET['IdEstoque']);
    
    $sql = "select * from EstoqueDePeixe where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }











  if(isset($_POST['Enviar'])){
    

      $Especie = $_POST['Especie'];
      $NomeVulgar = $_POST['NomeVulgar'];
      $GrauDeIndustrializacao = $_POST['GrauDeIndustrializacao'];
      $Quantidade = $_POST['Quantidade'];
      $Peso = $_POST['Peso'];
      $TipoDeEmbalagem = $_POST['TipoDeEmbalagem'];
      $Categoria = $_POST['Categoria'];
      $RegistroMapaAderr = $_POST['RegistroMapaAderr'];
      $DataSaida = $_POST['DataSaida'];
      $Municipio = $_POST['Municipio'];
      $MunicipioDeDestino = $_POST['MunicipioDeDestino'];
      $DataDeChegada = $_POST['DataDeChegada'];


		if(!isset($errorMsg)){
			$sql2 = "update EstoqueDePeixe
                    set 
                    Especie = '".$Especie."',
                    NomeVulgar = '".$NomeVulgar."',
                    GrauDeIndustrializacao = '".$GrauDeIndustrializacao."',
                    Quantidade = '".$Quantidade."',
                    Peso = '".$Peso."',
                    TipoDeEmbalagem = '".$TipoDeEmbalagem."',
                    Categoria = '".$Categoria."',
                    RegistroMapaAderr = '".$RegistroMapaAderr."',
                    DataSaida = '".$DataSaida."',
                    Municipio = '".$Municipio."',
                    MunicipioDeDestino = '".$MunicipioDeDestino."',
                    DataDeChegada = '".$DataDeChegada."',
                    Status = 'Pendente'           
                    
              


					where id=".$id;
			$result2 = mysqli_query($conn, $sql2);
			
            if($result2){
				$successMsg = 'Retificado';
                ?>
              <script>  window.location.href = "./Painel/"; </script>
			<?php
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}

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
              <form method="POST"  action="" enctype="multipart/form-data">
                <div class="row mb-3">
              
                  <label for="inputText" class="col-sm-2 col-form-label">Espécie</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Especie"  placeholder="Digite o nome da espécie"  value="<?php echo $row['Especie']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nome popular</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="NomeVulgar"  placeholder="" value="<?php echo $row['NomeVulgar']; ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Grau de Industrialização</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="GrauDeIndustrializacao"  placeholder="" value="<?php echo $row['GrauDeIndustrializacao']; ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Quantidade(Unid.)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="Quantidade"  placeholder="" value="<?php echo $row['Quantidade']; ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Peso(Kg)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="Peso"  placeholder="" value="<?php echo $row['Peso']; ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tipo de embalagem</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="TipoDeEmbalagem"  placeholder="" value="<?php echo $row['TipoDeEmbalagem']; ?>" >
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Categoria</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="Categoria">
                      <option selected><?php echo $row['Categoria']; ?></option>
                      <option value="<?php echo $row['Categoria']; ?>"><?php echo $row['Categoria']; ?></option>
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
                    <input type="text" class="form-control" name="RegistroMapaAderr"  placeholder="" value="<?php echo $row['RegistroMapaAderr']; ?>" >
                  </div>
                </div>


                
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Data de Saída</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="DataSaida"  placeholder="" value="<?php echo $row['DataSaida']; ?>" >
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Município de Saída</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="Municipio">
                      <option><?php echo $row['Municipio']; ?></option>  
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
                    <input type="date" class="form-control" name="DataDeChegada"  placeholder="" value="<?php echo $row['DataDeChegada']; ?>" >
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Município de destino</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="MunicipioDeDestino">
                      <option><?php echo $row['MunicipioDeDestino']; ?></option> 
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
                
                <input type="hidden" class="form-control" name="IdEstoque"  value="<?php echo $row['id']; ?>" >

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Cadastro</label>
                  <div class="col-sm-10">
                    <button type="submit" name="Enviar" class="btn btn-primary">Retificar</button>
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