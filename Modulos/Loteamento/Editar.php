<?php
include "../../header.php"; 
require_once('../../../../db.php');
$upload_dir = '../../ArquivosEnviados/';

if (isset($_POST['Ret'])) {
  $id =  base64_decode($_POST['IdEstoque']);
  $sql = "select * from dadoslotes WHERE id=".$id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
       }else {
   echo $errorMsg = 'Could not Find Any Record';
  }
}

if (isset($_POST['Enviar'])) {
   	
	$quantidade = $_POST['quantidade'];
	$lote = $_POST['lote'];
	$Tipo = $_POST['Tipo'];
	$fente = $_POST['fente'];
  $logradouro = $_POST['logradouro'];
	$valoPorMetroQd = $_POST['valoPorMetroQd'];
	$area = $_POST['area'];
	$precoDoLote = $_POST['precoDoLote'];
	$entrada = $_POST['entrada'];
	$saldoParaParcela = $_POST['saldoParaParcela'];
	$parcela12 = $_POST['parcela12'];
	$parcela24 = $_POST['parcela24'];
	$NumeroProcesso = $_POST['NumeroProcesso'];
	$parcela36 = $_POST['parcela36'];
	$DataLiberacao = $_POST['DataLiberacao'];
	$DataVencimento = $_POST['DataVencimento'];
	$ComprovanteDois = $_POST['ComprovanteDois'];
	$DataLiberacaoDois = $_POST['DataLiberacaoDois'];
	$DataVencimentoDois = $_POST['DataVencimentoDois'];
	$ComprovanteTres = $_POST['ComprovanteTres'];
	$DataLiberacaoTres = $_POST['DataLiberacaoTres'];
	$DataVencimentoTres = $_POST['DataVencimentoTres'];
	$Obs = $_POST['Obs'];
  $id = $_POST['id'];




  $sql3 = "SELECT * FROM dadoslotes WHERE id=".$id;
  $result3 = mysqli_query($conn, $sql3);
      if(mysqli_num_rows($result3)){
          $row2 = mysqli_fetch_assoc($result3);
         

      }


	$NomeDoAnexo1 = $_FILES['Anexo1']['name'];
	$NomeTemporarioAnexo1 = $_FILES['Anexo1']['tmp_name'];
	$TamanhoDoAnexo1 = $_FILES['Anexo1']['size'];



	if($NomeDoAnexo1){

		$ExtensaoAnexo1 = strtolower(pathinfo($NomeDoAnexo1, PATHINFO_EXTENSION));
		$PermitirExtensaoAnexo1  = array('pdf');
		$NovoNomeAnexo1 = time().'_'.rand(1000,9999).'.'.$ExtensaoAnexo1;

		if(in_array($ExtensaoAnexo1, $PermitirExtensaoAnexo1)){
			if($TamanhoDoAnexo1 < 5000000){
          unlink($upload_dir.$row2['Anexo1']); //nome coluna
					move_uploaded_file($NomeTemporarioAnexo1 ,$upload_dir.$NovoNomeAnexo1); 
			}else{
				$errorMsg = 'Arquivo muito grande';
				echo $errorMsg;
			}
		}else{
			$errorMsg = 'Selecione um arquivo válido';
			echo $errorMsg;
		}
	} else{ 
        $NovoNomeAnexo1 = $row2['Anexo1']; 
  
}


$NomeDoAnexo2 = $_FILES['Anexo2']['name'];
$NomeTemporarioAnexo2 = $_FILES['Anexo2']['tmp_name'];
$TamanhoDoAnexo2 = $_FILES['Anexo2']['size'];



if($NomeDoAnexo2){

  $ExtensaoAnexo2 = strtolower(pathinfo($NomeDoAnexo2, PATHINFO_EXTENSION));
  $PermitirExtensaoAnexo2  = array('pdf');
  $NovoNomeAnexo2 = time().'_'.rand(1000,9999).'.'.$ExtensaoAnexo2;

  if(in_array($ExtensaoAnexo2, $PermitirExtensaoAnexo2)){
    if($TamanhoDoAnexo2 < 5000000){
        unlink($upload_dir.$row2['Anexo2']); //nome coluna
        move_uploaded_file($NomeTemporarioAnexo2 ,$upload_dir.$NovoNomeAnexo2); 
    }else{
      $errorMsg = 'Arquivo muito grande';
      echo $errorMsg;
    }
  }else{
    $errorMsg = 'Selecione um arquivo válido';
    echo $errorMsg;
  }
} else{ 
      $NovoNomeAnexo2 = $row2['Anexo2']; 

}

$NomeDoAnexo3 = $_FILES['Anexo3']['name'];
$NomeTemporarioAnexo3 = $_FILES['Anexo3']['tmp_name'];
$TamanhoDoAnexo3 = $_FILES['Anexo3']['size'];



if($NomeDoAnexo3){

  $ExtensaoAnexo3 = strtolower(pathinfo($NomeDoAnexo3, PATHINFO_EXTENSION));
  $PermitirExtensaoAnexo3  = array('pdf');
  $NovoNomeAnexo3 = time().'_'.rand(1000,9999).'.'.$ExtensaoAnexo3;

  if(in_array($ExtensaoAnexo3, $PermitirExtensaoAnexo3)){
    if($TamanhoDoAnexo3 < 5000000){
        unlink($upload_dir.$row2['Anexo3']); //nome coluna
        move_uploaded_file($NomeTemporarioAnexo3 ,$upload_dir.$NovoNomeAnexo3); 
    }else{
      $errorMsg = 'Arquivo muito grande';
      echo $errorMsg;
    }
  }else{
    $errorMsg = 'Selecione um arquivo válido';
    echo $errorMsg;
  }
} else{ 
      $NovoNomeAnexo3 = $row2['Anexo3']; 

}



//Envio para o banco de dados

    if(!isset($errorMsg)){        

      $sql = "SELECT * FROM ReposicaoParcelada WHERE id LIKE '%$id%'";
      $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result)){
              $row = mysqli_fetch_assoc($result);
  
          }
                            
    $sql = "UPDATE ReposicaoParcelada SET
        quantidade = '".$quantidade."',
        lote = '".$lote."',
        Tipo = '".$Tipo."',
        fente = '".$fente."',
        logradouro = '".$logradouro."',
        valoPorMetroQd = '".$valoPorMetroQd."',
        area = '".$area."',
        precoDoLote = '".$precoDoLote."',
        entrada = '".$entrada."',
        saldoParaParcela = '".$saldoParaParcela."',
        parcela12 = '".$parcela12."',
        parcela24 = '".$parcela24."',
        NumeroProcesso = '".$NumeroProcesso."',
        parcela36 = '".$parcela36."',
        DataLiberacao = '".$DataLiberacao."',
        DataVencimento = '".$DataVencimento."',
        ComprovanteDois = '".$ComprovanteDois."',
        DataLiberacaoDois = '".$DataLiberacaoDois."',
        DataVencimentoDois = '".$DataVencimentoDois."',
        ComprovanteTres = '".$ComprovanteTres."',
        DataLiberacaoTres = '".$DataLiberacaoTres."',
        DataVencimentoTres = '".$DataVencimentoTres."',
        Obs = '".$Obs."',
        Anexo1 = '".$NovoNomeAnexo1."',
        Anexo2 = '".$NovoNomeAnexo2."',
        Anexo3 = '".$NovoNomeAnexo3."'

    WHERE id=".$id;

    $result2 = mysqli_query($conn, $sql);
    if($result2){
 $successMsg = 'New record updated successfully';
 echo  $successMsg;
 
    header('Location: ./');

    }else{
    $errorMsg = 'Error '.mysqli_error($conn);
    echo $errorMsg;
    }

    }
} 

?>








<!DOCTYPE html>
<html lang="pt-br">

</header>







<body>
<?php include "../../../menu.php"; ?>

<main id="main" class="main">



<H1>Adicionar reposição parcelada</H1> 


<section class="section">
      <div class="row">
        <div class="col-lg-10">
 
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Adicionar reposição parcelada</h5>
              

              <!-- General Form Elements -->
              <form method="POST"  action="" enctype="multipart/form-data">
                
              

<!--Campo Detentor-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Detentor</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="Detentor" placeholder="Insira Detentor aqui"  value="<?php echo $row['Detentor']; ?>">
                  </div>
                </div>
<!--Final Campo Detentor-->

<!--Campo CpfCnpj-->
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">CPF/CNPJ</label>
                  <div class="col-sm-7">
                    <input name="CpfCnpj"  class="form-control cpfOuCnpj" type="text"   autocomplete="off" maxlength="14"   placeholder="Digite seu CPF ou CNPJ"  value="<?php echo $row['CpfCnpj']; ?>">
                  </div>
                </div>
<!--Final Campo CpfCnpj-->



<!--Campo ImovelVinculado-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Imóvel Vinculado</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="ImovelVinculado" placeholder="Insira o Imóvel Vinculado aqui"  value="<?php echo $row['ImovelVinculado']; ?>">
                  </div>
                </div>
<!--Final Campo ImovelVinculado-->


<!--Campo NumeroAutex-->
          <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número da Autex</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="NumeroAutex" placeholder="Insira Número da Autex aqui"  value="<?php echo $row['NumeroAutex']; ?>">
                  </div>
                </div>
<!--Final Campo NumeroAutex-->


<!--Campo ValidadeAutex-->
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Validade da Autex</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date" name="ValidadeAutex"   value="<?php echo $row['ValidadeAutex']; ?>">
                  </div>
                </div>
<!--Final Campo ValidadeAutex-->


<!--Campo ComprovacaoReposicao-->
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Comprovação de Reposição</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="ComprovacaoReposicao" placeholder="Insira Comprovação de Reposição aqui"  value="<?php echo $row['ComprovacaoReposicao']; ?>">
                  </div>
                </div>
<!--Final Campo ComprovacaoReposicao-->





<!--Campo NumeroTcarf-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número do Tcarf</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="NumeroTcarf" placeholder="Insira o Número do Tcarf aqui"  value="<?php echo $row['NumeroTcarf']; ?>">
                  </div>
                </div>
<!--Final Campo NumeroTcarf-->



<!--Campo entrada-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">entrada</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="entrada" placeholder="Insira o entrada aqui"  value="<?php echo $row['entrada']; ?>">
                  </div>
                </div>
<!--Final Campo entrada-->


<!--Campo saldoParaParcela-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">saldoParaParcela</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="saldoParaParcela" placeholder="Insira saldoParaParcela aqui"  value="<?php echo $row['saldoParaParcela']; ?>">
                  </div>
           </div>
<!--Final Campo saldoParaParcela-->

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Tipo</label>
                  <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example" name="Tipo">
                      <option selected><?php echo $row['Tipo']; ?></option>
                      <option>Savana</option>
                      <option>Floresta</option>
                    </select>
                  </div>
                </div>



<!--Campo VolumetriaLiberadaMetrosCubicos-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Volumetria Liberada M<sup>3</sup></label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira aVolumetria Liberada aqui" name="VolumetriaLiberadaMetrosCubicos"   value="<?php echo $row['VolumetriaLiberadaMetrosCubicos']; ?>">
                  </div>
           </div>
<!--Final Campo VolumetriaLiberadaMetrosCubicos-->

<!--Campo TotalMetrosCubicos-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Total M<sup>3</sup></label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira o Total aqui" name="TotalMetrosCubicos"   value="<?php echo $row['TotalMetrosCubicos']; ?>">
                  </div>
           </div>
<!--Final Campo TotalMetrosCubicos-->

<!--Campo NumeroProcesso-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número do Processo </label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira Número do processo" name="NumeroProcesso"   value="<?php echo $row['NumeroProcesso']; ?>">
                  </div>
           </div>
<!--Final Campo NumeroProcesso-->



<!--Campo ComprovacaoInicialVintePorcentoMetrosCubicos-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Comprovação Inicial 20% M<sup>3</sup></label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira Comprovação Inicial 20% aqui" name="ComprovanteUm"   value="<?php echo $row['ComprovanteUm']; ?>">
                  </div>
           </div>
<!--Final Campo ComprovacaoInicialVintePorcentoMetrosCubicos-->


<!--Campo DataLiberacao-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">DataLiberacao m³</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date"  name="DataLiberacao"   value="<?php echo $row['DataLiberacao']; ?>">
                  </div>
           </div>
<!--Final Campo DataLiberacao-->


<!--Campo DataVencimento-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data de Vencimento</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date"  name="DataVencimento"   value="<?php echo $row['DataVencimento']; ?>">
                  </div>
           </div>
<!--Final Campo DataVencimento-->

                  <!--Campo TresComprovacao-->
                  <div class="row mb-3">
                                  <label for="inputText" class="col-sm-2 col-form-label">1º Comprovação anexo</label>
                                    <div class="col-sm-7">
                                      <input  class="form-control" type="file" placeholder="Insira TresComprovacao aqui" name="Anexo1"   value="">
                                      <a href="<?php echo $upload_dir.$row['Anexo1'] ?>" >Ver documento</a>
                                    </div>
                            </div>
                  <!--Final Campo TresComprovacao-->


<!--Campo DoisComprovacao-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Dois Comprovacao</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira DoisComprovacao aqui" name="ComprovanteDois"   value="<?php echo $row['ComprovanteDois']; ?>">
                  </div>
           </div>
<!--Final Campo DoisComprovacao-->

<!--Campo DataLiberacaoDois-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data Liberacao Dois</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date"  name="DataLiberacaoDois"   value="<?php echo $row['DataLiberacaoDois']; ?>">
                  </div>
           </div>
<!--Final Campo DataLiberacaoDois-->


<!--Campo DataVencimentoDois-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data Vencimento Dois</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira DataVencimentoDois aqui" name="DataVencimentoDois"   value="<?php echo $row['DataVencimentoDois']; ?>">
                  </div>
           </div>
<!--Final Campo DataVencimentoDois-->

                  <!--Campo TresComprovacao-->
                  <div class="row mb-3">
                                  <label for="inputText" class="col-sm-2 col-form-label">2º Comprovação anexo</label>
                                    <div class="col-sm-7">
                                      <input  class="form-control" type="file" placeholder="Insira TresComprovacao aqui" name="Anexo2"   value="">
                                      <a href="<?php echo $upload_dir.$row['Anexo2'] ?>" >Ver documento</a>
                                    </div>
                            </div>
                  <!--Final Campo TresComprovacao-->

<!--Campo TresComprovacao-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">TresComprovacao</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira o valor aqui" name="ComprovanteTres"   value="<?php echo $row['ComprovanteTres']; ?>">
                  </div>
           </div>
<!--Final Campo TresComprovacao-->


<!--Campo DataLiberacaoTres-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">DataLiberacaoTres</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date"  name="DataLiberacaoTres"   value="<?php echo $row['DataLiberacaoTres']; ?>">
                  </div>
           </div>
<!--Final Campo DataLiberacaoTres-->
                  <!--Campo TresComprovacao-->
                  <div class="row mb-3">
                                  <label for="inputText" class="col-sm-2 col-form-label">3º Comprovação anexo</label>
                                    <div class="col-sm-7">
                                      <input  class="form-control" type="file" placeholder="Insira TresComprovacao aqui" name="Anexo3"   value="">
                                      <a href="<?php echo $upload_dir.$row['Anexo3'] ?>" >Ver documento</a>
                                    </div>
                            </div>
                  <!--Final Campo TresComprovacao-->


<!--Campo DataVencimentoTres-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">DataVencimentoTres</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date" name="DataVencimentoTres"   value="<?php echo $row['DataVencimentoTres']; ?>">
                  </div>
           </div>
<!--Final Campo DataVencimentoTres-->



<!--Campo Obs-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Obs</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira Obs aqui" name="Obs"   value="<?php echo $row['Obs']; ?>">
                  </div>
           </div>
<!--Final Campo Obs-->

                  <input type="hidden" class="form-control" name="id"  value="<?php echo $row['id']; ?>" >

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Editar</label>
                  <div class="col-sm-3">
                    <button type="Submit" name="Enviar" class="btn btn-primary">Editar</button>
                  </div>
                </div>

              </form><!-- Finalização formulário cadastrar Reposição parcelada -->

            </div>
          </div>

        </div>














</main>

<?php include "../../../footer.php"; ?>



